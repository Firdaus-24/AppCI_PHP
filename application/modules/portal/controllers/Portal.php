<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Senin, 31 Agustus 2015
	Controler 	: Pengelolaan Index
	author 		: SSM
********************************************* */
class Portal extends MX_Controller {

  public function __construct()
  {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('captcha');
		$this->load->model('../models/Mdlt_utility');

  }

	public function index(){  
        $this->dock();
  }

  public function dock(){
    $data['hello'] = "Hello World !!!";
    $data['mine'] = "Latihan CI pertama";
	  $this->template->load('themeportal','front/v_portal',$data);         
  }

    public function simpan(){
    	$dat = array(
    		'nim'   => $this->input->post('nim'), 
    		'nama1' => $this->input->post('nama1'), 
    		'nama2' => $this->input->post('nama2'), 
    		'kelas' => $this->input->post('kelas') 
    	);
    	$this->Mdlt_utility->insertTable('tbl_person',$dat);
      $data['hello'] = "Hello World !!!";
      $data['mine'] = "Latihan CI pertama";
      $tbl    = 'tbl_person';
      $field  = '*';
      $order  = 'nim';
      $args   = 'Desc';
      $data['getIt'] = $this->Mdlt_utility->getDAll($tbl,$field,$order,$args);
      $this->template->load('themeportal','front/v_daftar',$data);

    }

}
