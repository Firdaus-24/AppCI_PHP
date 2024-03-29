<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* ********************************************
  Hari        : Senin, 19 MAY 2015
  Controler   : Pengelolaan news
  author      : SSM
********************************************* */ 
class Tinymce extends MX_Controller {

  public function __construct()
  {
		parent::__construct();
	}

  public function _tinymce(){
    return '
      <script type="text/javascript" src="<?php echo base_url()."application/assets/tinymce/tinymce.min.js"; ?>"></script>
      <script>
        tinyMCE.init({
          theme : "advanced",
          mode : "textareas",
          plugins : "imagemanager,filemanager,insertdatetime,preview,emotions,visualchars,nonbreaking",
          theme_advanced_buttons1_add: "insertimage,insertfile",
          theme_advanced_buttons2_add: "separator,forecolor,backcolor",
          theme_advanced_buttons3_add: "emotions,insertdate,inserttime,preview,visualchars,nonbreaking",
          theme_advanced_disable: "styleselect,formatselect,removeformat",
          plugin_insertdate_dateFormat : "%Y-%m-%d",
          plugin_insertdate_timeFormat : "%H:%M:%S",
          theme_advanced_toolbar_align : "left",
          theme_advanced_resize_horizontal : false,
          theme_advanced_resizing : true,
          apply_source_formatting : true,
          spellchecker_languages : "+English=en",
          extended_valid_elements :"img[src|border=0|alt|title|width|height|align|name],"
          +"a[href|target|name|title],"
          +"p,"
          invalid_elements: "table,span,tr,td,tbody,font"
        });
      </script>';
  }

}

