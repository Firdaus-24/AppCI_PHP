<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Senin, 31 Agustus 2015
	Controler 	: Pengelolaan Index
	author 		: SSM
********************************************* */
class Upd_data extends MX_Controller {

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

    $id = $this->uri->segment(4);

    $tbl = 'tbl_person';
    $field = '*';
    $key = 'nim';
    $args = $id;
    $data['getIt'] = $this->Mdlt_utility->getData($tbl,$field,$key,$args);

	  $this->template->load('themeportal','front/v_update',$data);         
  }

    public function simpan(){
    	$dat = array(
    		'nim'   => $this->input->post('nim'), 
    		'nama1' => $this->input->post('nama1'), 
    		'nama2' => $this->input->post('nama2'), 
    		'kelas' => $this->input->post('kelas') 
    	);
      $tbl = 'tbl_person';
      $key = 'nim';
      $arg = $this->input->post('nim');
    	$this->Mdlt_utility->updateTable($tbl,$key,$arg,$dat);

      $data['hello'] = "Hello World !!!";
      $data['mine'] = "Latihan CI pertama";
      $tbl    = 'tbl_person';
      $field  = '*';
      $order  = 'nim';
      $args   = 'ASC';
      $data['getIt'] = $this->Mdlt_utility->getDAll($tbl,$field,$order,$args);
      $this->template->load('themeportal','front/v_daftar',$data);

    }

}
