<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function useronline(){
	$ci =& get_instance();
	$ci->load->helper('cookie');
    $ci->load->library('user_agent');
    $ci->load->model('mloguser');
    $ci->load->helper('date');

    $tm=time();
    $timeout=time()-1800;
    $id=md5(date('Ymdhis').$ci->session->userdata('user_name'));
    $ci->load->library('user_agent');
    $browser = $ci->agent->browser();
    $takeos=$ci->agent->platform();
    $os=explode(" ",$takeos);
    $ip=$_SERVER['REMOTE_ADDR'];
   // echo "tes";
   
    if(get_cookie('useronline'))
      get_cookie('useronline');
    else
      set_cookie('useronline',$id,time()+3600);
     
    
    $idCookie=$ci->input->cookie('useronline');
   // echo $idCookie;

    $ci->load->model('mloguser');

    $ci->mloguser->getdelete($idCookie,$timeout);
    $data['cekid']=$ci->mloguser->getcekid($idCookie);
    if($data['cekid']){
     // echo "adaid";
     // $data['cektime']=$this->mloguser->getcektime($timeout,$idCookie);
      //  if(!is_array($data['cektime'])){
        //  echo "update";
          $ci->mloguser->getupdate($idCookie,$timeout);
      //  }

    }
      
    else{
     $ci->load->model('mloguser');
     
     $ci->mloguser->getsave($idCookie,$ip,$browser,$tm);
     
     // echo "tidak";
    }
    
   
}

?>