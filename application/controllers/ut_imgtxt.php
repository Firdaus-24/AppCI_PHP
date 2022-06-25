<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Selasa, 23 June 2015
	Controler 	: Pengelolaan text dan gambar
	author 		: SSM
  Related App : switchlang
********************************************* */
class Ut_imgtxt extends MX_Controller {

   	public function __construct()
   	{
		parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('mdlt_utility');   
        $this->load->library('switchlang');

   	}

  public function single_img($category){
    $tbl    = 'tbl_images';
    $field  = 'id,caption,lokasi';
    $key1   = 'category'; //0,1,3
    $arg1   = $category;        
    $key2   = 'flag'; //0,1,3
    $arg2   = 1;  
    $getIt  = $this->mdlt_utility->findW2($tbl,$field,$key1,$arg1,$key2,$arg2,'DESC');

    if($getIt==0){
      $link = 'No Data'; 
    }else{
      $link = $getIt;
    }
    return $link;
  }

  public function img($category){
    $tbl = 'tbl_images';
    $field = 'id,caption,lokasi';
    $key  = 'category'; //0,1,3
    $args = $category;        
    $getIt = $this->mdlt_utility->getData($tbl,$field,$key,$args);

    if($getIt==0){
      $link = 'No Data'; 
    }else{
      $link = $getIt;
    }
    return $link;
  }

  public function carusel($category,$orderby,$countimg){
    $tbl = 'tbl_images';
    $field = 'id,caption,lokasi';
    $key  = 'category'; //0,1,3
    $args = $category;  
    $count = $this->mdlt_utility->countcarusel($tbl,$field,$key,$args);
    if($count <= $countimg) $countimg = $count;
    $getIt = $this->mdlt_utility->findcarusel($tbl,$field,$key,$args,$orderby,$countimg);
      
    if($getIt==0){
      $link = 'No Data'; 
    }else{
      $link = $getIt;
    }
    return $link;
  }

  public function txt($category){
    $language = $this->input->cookie('bahasa');
    $tbl      = 'tbl_news';
    $field    = 'id,category,doc_in,doc_en,flag';
    $key1     = 'category';
    $arg1     = $category;
    $key2     = 'flag';
    $arg2     = 1;
    $orderby  = 'DESC';
    //$getIt  = $this->mdlt_utility->findW($tbl,$field,$key,$args,$orderby);
    $getIt    = $this->mdlt_utility->findW2($tbl,$field,$key1,$arg1,$key2,$arg2,$orderby);
    
    if($getIt==0){
      $news_view = 'No Data';
    }else{
      foreach ($getIt as $k){
        if($language=='english') 
          $news_view = $k->doc_en;
        else
          $news_view = $k->doc_in;
      }
    }
    return $news_view;
  }



}


