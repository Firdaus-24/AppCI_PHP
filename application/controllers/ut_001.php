<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		    : Selasa, 23 June 2015
	Controler 	: Pengelolaan secara general
	author 		  : SSM
  Related App : 

    1. file_get_contents_curl untuk keperluan download file, sebagai jambatan incompatibility PHP
    
********************************************* */
class Ut_001 extends MX_Controller {

   	public function __construct()
   	{
		parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('mdlt_utility');   
        $this->load->library('switchlang');

   	}

    public function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}


