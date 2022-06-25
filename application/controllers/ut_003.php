<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		    : Rabu, 09 Sept 2015
	Controler 	: Pengelolaan security
	author 		  : SSM
  Related App : 

    1. Cookies usage
    
********************************************* */
class Ut_003 extends MX_Controller {

  public function __construct()
  {
    parent::__construct();
        //$this->load->library('session');
        //$this->load->helper('url');
        //$this->load->model('mdlt_utility');   
        //$this->load->library('switchlang');
    }

    public function set($name,$value,$expire){
      $x = $this->input->cookie($name);
      if(empty($x)){
        $y = $value;
        $cookie = array(
          'name'   => $name,
          'value'  => $y,
          'expire' => $expire
        );
        $this->input->set_cookie($cookie);        
        return 1;
      }else{
        return 0;
      } 
    }



}


