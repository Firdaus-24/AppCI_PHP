<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
  Hari        : Senin, 19 MAY 2015
  Controler   : Pengelolaan officer/admin
  author      : SSM
********************************************* */ 
class Officer extends MX_Controller {

  public function __construct()
  {
		parent::__construct();
    $this->load->vars( array( 'headtext' => "Integrated System Of KEMENDES" ) );
    $var['theme'] = "skin-1";
    $this->load->vars($var);

    $this->load->helper('form','url');
    $this->load->helper('html');
    $this->load->helper('file');
    $this->load->helper('menus');
    $this->load->library('pagination');
    $this->load->library('user_agent','session');
    $this->load->library('../controllers/scripttiny');
    $this->load->model('../models/mdlt_officer');   
    $this->load->model('../models/mdlt_initial');   
    $this->load->model('../models/mdlt_utility');   
    //$this->load->model('mdlt_transaction'); 
	}
 
	public function index()
	{	
      if(!$this->session->userdata('officer')) redirect('portal'); 
      $this->dock();
  }

	public function greeting(){
    if ($this->input->post('inputUsername'))
    {
      $username_txt = $this->input->post('inputUsername');
      $password_txt = $this->input->post('sandi');
      $id = $this->mdlt_officer->getUser($username_txt,$password_txt);   
      if($id == 0){
          echo '<script>alert("Maaf user tidak terdaftar. Silahkan mencoba lagi");</script>';
          redirect('portal/', 'refresh');        
        //$this->session->set_flashdata('Msg', '<div  style="font:12px Tahoma; color:#ff0000;">Maaf user tidak terdaftar.<br />Silahkan mencoba lagi</div>');   
        //redirect('portal/');
      }else{
        foreach ($id as $row)
        {
          $username = $row->user_id;
          $password = $row->user_password;
          $level = $row->user_actor;
        }

        if((($username == $username_txt)&&($password == md5($password_txt)))&&($this->input->post('security_code') == $this->session->userdata('mycaptcha')))
        //if(($username == $username_txt)&&($password == md5($password_txt)))
        {
          $this->session->set_userdata('officer',$username); 
  
          $this->breadcrumb->append_crumb('Officer',base_url()."officer/officer");
          $this->breadcrumb->append_crumb('Session Administrator',base_url()."officer/officer");
          $data['title'] = "Manage";
          $data['subtitle'] = "Content";
          $data['scripttiny'] = $this->scripttiny->scripttiny_mce();
          $tbl = 'tbl_comments';
          $field    = '*';
          $key1     = 'flag';
          $arg1     = 0;
          $key2     = 'status';
          $arg2     = 0;
          $data['getIt']  = $this->mdlt_utility->getData2($tbl,$field,$key1,$arg1,$key2,$arg2);
          if($data['getIt']==0) $konfirmasi = "No Data";

          $this->template->load('theme','officer/officer/frm_greeting',$data);     

        }else{
          echo '<script>alert("Maaf User, Password atau Captcha salah. Silahkan mencoba lagi");</script>';
          redirect('portal/', 'refresh');        
        }
      }
    }
    else
    {
      $this->session->set_flashdata('login_message', '<div  style="font:12px Tahoma; color:#ff0000;">Maaf user tidak terdaftar.<br />Silahkan mencoba lagi</div>');   
      redirect('portal/');
    }
  }

  public function dock(){
    if(!$this->session->userdata('officer')) redirect('portal'); 

    $this->breadcrumb->append_crumb('Officer',base_url()."officer/officer");
    $this->breadcrumb->append_crumb('Session Administrator',base_url()."officer/officer");
    $data['title'] = "Manage";
    $data['subtitle'] = "Comments";

    $tbl = 'tbl_comments';
    $field    = '*';
    $key1     = 'flag';
    $arg1     = 0;
    $key2     = 'status';
    $arg2     = 0;
    //$orderby  = 'ASC';
    $data['getIt']  = $this->mdlt_utility->getData2($tbl,$field,$key1,$arg1,$key2,$arg2);
    if($data['getIt']==0) $konfirmasi = "No Data";
    //$data['scripttiny'] = $this->scripttiny->scripttiny_mce();
    $this->template->load('theme','officer/officer/frm_greeting',$data);     

  }

  public function deletecomments(){
    $id = $this->input->post('param');

    $tbl      = 'tbl_comments';
    $key      = 'id';
    $args     = $id;          
    $this->mdlt_utility->deleteTable($tbl,$key,$args);
    echo "Success to delete comment...";
  }

  public function reply($id=null)
  {
    if(!$this->session->userdata('officer')) redirect('portal'); 

    $this->breadcrumb->append_crumb('Officer',base_url()."officer/officer");
    $this->breadcrumb->append_crumb('Session Administrator',base_url()."officer/officer");
    $data['title']="Reply";
    $data['subtitle']="Email";
    if($this->input->post('simpan')=='Submit'){
      $to   = $this->input->post('email'); //$_POST['email'];
      $subj = $this->input->post('subject'); //$_POST['subject'];
      $mess = $this->input->post('message'); //$_POST['message'];
      $from = $this->input->post('admin'); //$_POST['message'];
      $idrec = $this->input->post('id'); //$_POST['message'];
      $this->load->library('email');
      $this->email->from($from);
      $this->email->to($to);
      $this->email->subject($subj);
      $this->email->message($mess);
      $this->email->send();

      //signed flag to 1
      $tbl = 'tbl_comments';
      $key = 'id';
      $arg = $idrec;
      $dat = array('flag' => 1 );
      $this->mdlt_utility->updateTable($tbl,$key,$arg,$dat);

      $this->session->set_flashdata('Msg','Kirim Email Sukses...');
      $this->dock();

    }else{
      $id = $this->uri->segment(3);
      $tbl = 'tbl_comments';
      $field = 'id,comments,email';
      $key = 'id';
      $args = $id;
      $dat = $this->mdlt_utility->findW($tbl,$field,$key,$args,'ASC');
      foreach ($dat as $k){
        $d = array('id' =>$id,'email' =>$k->email ,'comments'=>$k->comments );
      } 

      $data['email']    = $d['email'];
      $data['comments'] = $d['comments'];
      $data['id']       = $d['id'];
      $this->template->load('theme','/mail/frm_reply',$data);
    }
  }

  public function logout(){
    $this->session->unset_userdata('officer');
    redirect('portal/');
      
  }





}

