	<!-- NAVBAR-->
	<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	  	<!-- Collect the nav links, forms, and other content for toggling -->
	  	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="quotetxt"><a href="<?php echo base_url();?>portal/portal"><?php echo $lbl_home ; ?></a></li>

	        <li class="dropdown quotetxt">
    	    	<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Profile<span class="caret"></span></a>
        		<ul class="dropdown-menu">
            		<li class="quotetxt"><a href="<?php echo base_url();?>portal/proserv"><?php echo $lbl_vmision ; ?></a></li>
	            	<li class="quotetxt"><a href="<?php echo base_url();?>portal/aboutus"><?php echo $lbl_orgstruct ; ?></a></li>
				</ul>
 	        </li>

			<li class="quotetxt"><a href="<?php echo base_url();?>portal/portal"><?php echo $lbl_history ; ?></a></li>

	        <li class="dropdown quotetxt">
    	      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $lbl_news; ?> <span class="caret"></span></a>
        	  <ul class="dropdown-menu" role="menu">
	            <li class="dropdown quotetxt">
	            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bizzpark<span class="caret"></span></a>
	            	<ul class="dropdown-submenu" role="menu">


	            	</ul>
	            </li>

	            <li class="quotetxt"><a href="<?php echo base_url();?>portal/newproject">Bizzpark</a></li>
    	        <li class="quotetxt"><a href="<?php echo base_url();?>portal/ubud_project">Ubud</a></li>

            	<li class="quotetxt"><a href="<?php echo base_url();?>portal/bussinesplan"><?php echo $lbl_bussinesplan ; ?></a></li>
            	<li class="quotetxt"><a href="<?php echo base_url();?>portal/experts"><?php echo $lbl_eventinfo ; ?></a></li>
	            <li class="divider"></li>
	            <li class="quotetxt"><a href="<?php echo base_url();?>portal/document"><?php echo "Upload ".$lbl_files." ".$lbl_project; ?></a></li>
	          </ul>
    	    </li>

			<li class="quotetxt"><a href="<?php echo base_url();?>portal/contactus"><?php echo $lbl_galery ; ?></a></li>
			<li class="quotetxt"><a href="<?php echo base_url();?>portal/career"><?php echo $lbl_employee ; ?></a></li>
			<li class="quotetxt"><a href="<?php echo base_url();?>portal/contactus"><?php echo $lbl_contactus ; ?></a></li>
		</ul>
		</div><!-- /.navbar-collapse --> 

	</div>
	</nav>
