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
				tbl_menusub.menu_id='$menuid'
			ORDER BY tbl_menusub.submenu_id ASC";

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

function sideMenuBar(){
	echo '<ul class="nav nav-list">';
		$ci =& get_instance();
		$module 	= $ci->router->fetch_module();
   		$controller = $ci->router->fetch_class(); 
   		$method 	= $ci->router->fetch_method(); 	
   		//echo $controller;

   		$sql1 = "SELECT * from tbl_menu WHERE menu_uri='$controller' and menu_cat='1'";
   		$sql2 = "SELECT * from tbl_menusub WHERE submenu_uri='$controller'";
   		//echo $sql2;

   		$menu1 = $ci->db->query($sql1);
   		$menu2 = $ci->db->query($sql2);
   		//print_r($menu1);
   		//print_r($menu2);
   		
		    if($menu1->num_rows()>0){
		        $rst = $menu1->row_array();
		        $menuid = $rst['menu_id'];
		    }else{
		    	$abc = "SELECT * from tbl_menusub WHERE submenu_uri='$controller'";
		        $xyz ="
		          SELECT
		            tbl_menu.menu_id
		          FROM
		            tbl_menusub
		            INNER JOIN tbl_menu 
		                ON (tbl_menusub.menu_id = tbl_menu.menu_id) 
		                WHERE tbl_menusub.submenu_uri='$controller' and tbl_menu.menu_cat='1'
		                GROUP BY tbl_menusub.menu_id";
		                //echo $sql2;
		        //$z = $ci->db->query($menu2); 
		        //echo $z->num_rows();
		        //print_r($z)      ;
		        //echo $controller;
		        $rst = $menu2->row_array();
		        $menuid = $rst['menu_id'];
		        //echo $rst['menu_id'];
		    } 
		   

		        $sql ="
		          SELECT
		            tbl_menu.*, tbl_menusub.*
		          FROM
		            elearning.tbl_menusub
		            INNER JOIN elearning.tbl_menu 
		                ON (tbl_menusub.menu_id = tbl_menu.menu_id)
		                WHERE tbl_menu.menu_cat='1'
		                GROUP BY tbl_menusub.menu_id";
		        $menu = $ci->db->query($sql);

	        foreach($menu->result_array() as $menu){
	          $class = ( $menuid == $menu["menu_id"] ? 'active' : '' );
	          //$class = ($menu['menu_uri']==$controller ? 'active' : '');
	          $toggle = "";
	          $bdown = "";
	          echo '<li class="'.$class.'">';
				echo '<a href="'.base_url().$module.'/'.$menu['menu_uri'].'" class="'.$toggle.'">';
				echo '<i class="'.$menu["menu_icon"].'"></i>';
				echo '<span class="menu-text">'. $menu["menu_nama"] . '</span>';
				echo $bdown;
				echo '</a>';
	          echo '</li>';
	        }   		
	   		//print_r($menus);



	echo '</ul>';
}