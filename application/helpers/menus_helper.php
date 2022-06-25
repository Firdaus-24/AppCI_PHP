<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function subMenuBar()
{
	$ci =& get_instance();

	//$module 	= $ci->router->default_controller;
	$controller = $ci->router->fetch_class(); 
	$method 	= $ci->router->fetch_method();

	//echo $controller;

	$ci->load->database();

	//Get data menu ada taua tidak ?
	$sqlGetMenu = $ci->db->query("SELECT * FROM tbl_menu WHERE menu_uri='$controller'");
    if($sqlGetMenu->num_rows()==0)
    {
    	$sqlGetMenu = $ci->db->query("SELECT * FROM tbl_menusub WHERE submenu_uri='$controller'");
    }

	$rst = $sqlGetMenu->row_array();
	$menuid = $rst['menu_id'];

	$sql = "SELECT
			    tbl_menusub.*
			    , tbl_menu.menu_id
			    , tbl_menu.menu_cat
			    
			FROM
			    tbl_menusub
			    INNER JOIN tbl_menu 
			        ON (tbl_menusub.menu_id = tbl_menu.menu_id)
			WHERE
				tbl_menusub.menu_id='$menuid';";

	$rs = $ci->db->query($sql);
	if($rs->num_rows() > 0)
	{
		echo '<div class="menubar">';
		foreach ($rs->result() as $row) {
			if($row->menu_cat==1) $module = "officer";
			if($row->menu_cat==2) $module = "teacher";
			if($row->menu_cat==3) $module = "student";

			echo 
			' <a class="" href="'.base_url().$module.'/'.$row->submenu_uri.'">
	        	<i class="'.$row->submenu_icon.' icon-1x"></i> '.$row->submenu_name.'
	        </a> &nbsp;&nbsp; ';
    	}
    	echo '</div>';
    	//echo $module;
    	//echo $ci->router->default_controller;
	}	
}