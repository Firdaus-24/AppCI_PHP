<ul class="nav nav-list">
					
<?php
   $ci =& get_instance();
   $controller = $ci->router->fetch_class(); 
   $method = $ci->router->fetch_method(); 

   //echo $controller;
   $sql1 = "SELECT * from tbl_menu WHERE menu_uri='$controller' and menu_cat='1'";
   $menus = $this->db->query($sql1);
   
    if($menus->num_rows()>0){
        $rst = $menus->row_array();
        $menuid = $rst['menu_id'];
        //echo "ada = ".$rst['menu_id'];;
    }else{
        $sql2 ="
          SELECT
            tbl_menu.*, tbl_menusub.*
          FROM
            tbl_menusub
            INNER JOIN tbl_menu 
                ON (tbl_menusub.menu_id = tbl_menu.menu_id) 
                WHERE tbl_menusub.submenu_uri='$controller' and tbl_menu.menu_cat='1'
                GROUP BY tbl_menusub.menu_id";
        $menus = $this->db->query($sql2);       
        $rst = $menus->row_array();
        $menuid = $rst['menu_id'];
        //echo "tidak ada / ".$menuid;
    } 
   

        $sql ="
          SELECT
            tbl_menu.*, tbl_menusub.*
          FROM
            tbl_menusub
            INNER JOIN tbl_menu 
                ON (tbl_menusub.menu_id = tbl_menu.menu_id)
                WHERE tbl_menu.menu_cat='1'
                GROUP BY tbl_menusub.menu_id";
        $menuss = $this->db->query($sql);
        //echo $menuss->num_rows();
        foreach($menuss->result_array() as $menu):
          $class = ( $menuid == $menu["menu_id"] ? 'active' : '' );
          $toggle = "";
          $bdown = "";
        ?>
    		<li class="<?php echo $class; ?>">
						<a href="<?php echo base_url().'officer/'.$menu['menu_uri']?>" class="<?php echo $toggle; ?>">
							<i class="<?php echo $menu["menu_icon"]; ?>"></i>
							<span class="menu-text"> <?php echo $menu["menu_nama"]; ?> </span> 
							<?php echo $bdown; ?>
						</a>
    		</li>
    	<?php
    		endforeach;
        
    	?>

</ul>					

			