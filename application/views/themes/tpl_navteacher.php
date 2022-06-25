<ul class="nav nav-list">
          
<?php
   $ci =& get_instance();
   $controller = $ci->router->fetch_class(); 
   $method = $ci->router->fetch_method(); 

   //echo $controller;
   $sql1 ="SELECT * from tbl_menu WHERE menu_uri='$controller' and menu_cat='2'";
   $menus = $this->db->query($sql1);
        $rst = $menus->row_array();
        $menuid = $rst['menu_id'];

   

        $sql ="SELECT * from tbl_menu WHERE menu_cat='2'";
        $menuss = $this->db->query($sql);
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

      