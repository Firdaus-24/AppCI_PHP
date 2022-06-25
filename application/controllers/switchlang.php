<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Selasa, 17 Pebruari 2015
	Controler 	: Pengelolaan Bahasa
	author 		: SSM
********************************************* */
class Switchlang extends MX_Controller {

   	public function __construct()
   	{
		parent::__construct();
   	}

    public function _bahasa($bhs){
        $bhscookie = $this->input->cookie('bahasa');
        if($bhs!='english' and $bhs!='indonesia'){
            if(empty($bhscookie)){
                $bhs = 'english';
            }else{
                $bhs = $bhscookie;
            } 
        }    

        //if($bhs!='english' and $bhs!='indonesia') $bhs ='indonesia';
        $this->lang->load('label', $bhs);
        $cookie = array(
                    'name'   => 'bahasa',
                    'value'  => $bhs,
                    'expire' => 604800
                );
        $this->input->set_cookie($cookie);
    }

    public function loadbahasa(){
        $dt = array(
            'lbl_login'         => $this->lang->line("lbl_login"),
            'lbl_online'        => $this->lang->line("lbl_online"),
            'lbl_language'      => $this->lang->line("lbl_language"),
            'lbl_partners'      => $this->lang->line("lbl_partners"),
            'lbl_portofolio'    => $this->lang->line("lbl_portofolio"),
            'lbl_visitor'       => $this->lang->line("lbl_visitor"),
            'lbl_certificate'   => $this->lang->line("lbl_certificate"),
            'lbl_media'         => $this->lang->line("lbl_media"),
            'lbl_files'         => $this->lang->line("lbl_files"),
            'lbl_home'          => $this->lang->line("lbl_home"),
            'lbl_program'       => $this->lang->line("lbl_program"),
            'lbl_aboutus'       => $this->lang->line("lbl_aboutus"),
            'lbl_expert'        => $this->lang->line("lbl_expert"),
            'lbl_contactus'     => $this->lang->line("lbl_contactus"),
            'lbl_eventinfo'     => $this->lang->line("lbl_eventinfo"),
            'lbl_name'          => $this->lang->line("lbl_name"),
            'lbl_phone'         => $this->lang->line("lbl_phone"),
            'lbl_email'         => $this->lang->line("lbl_email"),
            'lbl_comments'      => $this->lang->line("lbl_comments"),
            'lbl_record'        => $this->lang->line("lbl_record"),
            'lbl_validation'    => $this->lang->line("lbl_validation"),
            'lbl_project'       => $this->lang->line("lbl_project"),
            'lbl_newproject'    => $this->lang->line("lbl_newproject"),
            'lbl_bussinesplan'  => $this->lang->line("lbl_bussinesplan"),
            'lbl_history'       => $this->lang->line("lbl_history"),
            'lbl_galery'        => $this->lang->line("lbl_galery"),
            'lbl_employee'      => $this->lang->line("lbl_employee"),
            'lbl_news'          => $this->lang->line("lbl_news"),
            'lbl_docmovie'      => $this->lang->line("lbl_docmovie"),
            'lbl_vmision'       => $this->lang->line("lbl_vmision"),
            'lbl_orgstruct'     => $this->lang->line("lbl_orgstruct"),
            'lbl_fax'           => $this->lang->line("lbl_fax"),
            'lbl_nmcomp'        => $this->lang->line("lbl_nmcomp"),
            'lbl_address'       => $this->lang->line("lbl_address"),
            'lbl_cp'            => $this->lang->line("lbl_cp"),
            'lbl_doccomp'       => $this->lang->line("lbl_doccomp")

        );
        return $dt;
    }


}


