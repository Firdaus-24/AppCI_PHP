<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		    : Rabu, 09 Sept 2015
	Controler 	: Pengelolaan security
	author 		  : SSM
  Related App : 

    1. Capscha for security input and to make sure the user is Human
    
********************************************* */
class Ut_002 extends MX_Controller {

  public function __construct()
  {
    parent::__construct();
        //$this->load->library('session');
        //$this->load->helper('url');
        $this->load->model('mdlt_utility');   
        //$this->load->library('switchlang');
    }

    public function getCapscha($img_url,$expired){
      $vals = array(
          //'word'          => 'Random word',
          'img_path'      => './application/properties/captcha/',
          'img_url'       => $img_url,
          'font_path'     => './application/properties/fonts/creditvalleybold.ttf',
          'img_width'     => '200',
          'img_height'    => 50, //30,
          'expiration'    => $expired, //3600 = 1 hour
          'word_length'   => 4,
          'font_size'     => 20,
          'img_id'        => 'Imageid',
          'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

          // White background and border, black text and red grid
          'colors'          => array(
              'background'  => array(56,163,252),//array(255, 255, 255),
              'border'      => array(0, 0, 0), //array(255, 255, 255),
              'text'        => array(0, 0, 0),
              'grid'        => array(255, 40, 40)
          )
        );
      $cap = create_captcha($vals);
      return $cap;
    }

    public function saveCaptchaToTbl($tbl,$dt){
      $dat = array(
          'captcha_time'  => $dt['time'],
          'ip_address'    => $this->input->ip_address(),
          'word'          => $dt['word'],
          'lokasi'        => base_url().'application/properties/captcha/'.$dt['time'].'.jpg'
      );
      $this->mdlt_utility->insertTable($tbl,$dat);
    }

    public function delCaptcha($expired){
      $tbl = 'tbl_captcha';
      $field = 'captcha_id,captcha_time';
      $args = 'captcha_id';
      $getIt = $this->mdlt_utility->getDAll($tbl,$field,$args);

      if($getIt > 0){
        foreach ($getIt as $k) {
          $dat = array(
            'captcha_id' => $k->captcha_id,
            'captcha_time' => $k->captcha_time
          );
          $kadaluarsa = time() - $dat['captcha_time'];
          $i = ($kadaluarsa / 60) % 60;  

echo "i=".$i." -->exp=".$expired." ";
          if($i > $expired){
            $this->mdlt_utility->deleteTable($tbl,'captcha_id',$dat['captcha_id']);
          }

        }
      }
    }

    public function checkExistCaptcha($expired, $word){
      $this->delCaptcha($expired);
      $word = $this->input->cookie('captcha');
      $getIt = $this->mdlt_utility->getData('tbl_captcha','captcha_id,captcha_time,word','word',$word);
      if ($getIt > 0){
        foreach ($getIt as $k){
          $dt = array(
            'captcha_time' => $k->captcha_time, 
            'word' => $k->word
          );
        }
        return $dt;
      }else return 0;
    }


}


