<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Rabu, 28 Maret 2018
	Controler 	: Pengelolaan views
	author 		: SSM
********************************************* */
class Daftar extends MX_Controller {

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
      //$data['hello'] = "Hello World !!!";
      $data['mine'] = "Latihan CI pertama";
      $tbl    = 'tbl_person';
      $field  = '*';
      $order  = 'nim';
      $args   = 'ASC';
      $data['getIt'] = $this->Mdlt_utility->getDAll($tbl,$field,$order,$args);
//print_r($data['getIt']); exit();

	    $this->template->load('themeportal','front/v_daftar',$data);         
    }

      

}
