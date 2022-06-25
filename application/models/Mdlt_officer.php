<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdlt_officer extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->load->database();
	}

	public function getUser($usr,$pass)
	{
        $this->db->select('*');
        $this->db->where('user_id', $usr);
        $this->db->where('user_password', md5($pass));
        $query = $this->db->get('tbl_user'); 
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

	public function simpan_user($txtemail,$txtusername,$txtpassword)
    	{
		//print_r($txtemail);exit();
        	$this->db->where('user_name',$txtusername);
        	//$this->db->where('email',$txtemail);
        	$query = $this->db->get('tbl_user');


       	 if($query->num_rows()>0){
            		$this->session->set_flashdata('register_message', '<div  style="font:14px Tahoma; color:#ff0000;">User sudah ada</div>');   
            		redirect('/teacher/registrasi'); 
        	}else{

            		$this->db->where('nip',$txtusername);
        		//$this->db->where('email',$txtemail);
            		$query = $this->db->get('tbl_tutor');

			//print_r($query->num_rows());exit();

            if($query->num_rows()>0){
                $kodeenkrip=md5($txtusername.date('YmdHis'));
                $data = array(
                'user_name' => $txtusername,
                'user_password' => md5($txtpassword),
                'user_email' =>$txtemail,
                'user_reg' =>'0',
                'aktivasi' =>$kodeenkrip,
                'user_actor' =>'teacher'
                );
                $this->db->insert('tbl_user',$data);
            $this->session->set_flashdata('login_message', '<div  style="font:14px Tahoma; color:#ff0000;">Anda Berhasil Registrasi</div>');
            redirect('/teacher/login');
                 
            }else{
                $this->session->set_flashdata('register_message', '<div  style="font:14px Tahoma; color:#ff0000;">NIP atau Email Anda Tidak Terdaftar</div>');   
                redirect('/teacher/registrasi');
            }

        }
           
    }








}




