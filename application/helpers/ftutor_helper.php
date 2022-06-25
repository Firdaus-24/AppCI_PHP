<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
	Hari 		: Jum'at, 09 Jan 2015
	Controler 	: View tutor blog with Helper
	author 		: SSM
********************************************* */

	function vTutor($flag){
		$pathInfo = 'img/tutor/';
		$fileFotoDB = array();
		$fileFotoFLD = array();

		$i = 0;
		$ci=& get_instance();
        	$ci->load->model('mportal');
		//$this->load->model('mportal');
		$enrollDosen = $ci->mportal->getAllTutor();
		foreach ($enrollDosen as $nip) {
			$fileFotoDB[$i] = $nip->id_tutor;
			//echo $fileFotoDB[$i]."<br>";
			$i++;
		}

		$i=0;
		foreach(glob($pathInfo.'{*.jpg,*.gif,*.jpeg,*.png}', GLOB_BRACE) as $image) 
		{
			$cek = substr($image,-13,-4);
			if (in_array($cek,$fileFotoDB)) {
    				$fileFotoFLD[$i] = $image;
			}else{
				$fileFotoFLD[$i] = "img/default/default00.jpg";
			}
			//echo $fileFotoFLD[$i]."<br>";
			$i++;
		}

		if($flag==0){
			$data['fotoTutor'] = $fileFotoFLD; //array_intersect($fileFotoDB, $fileFotoFLD);
			return $data['fotoTutor'];
		}else{
			$data['jmlFoto'] = count($fileFotoDB);
			return $data['jmlFoto'];
		}
	}
