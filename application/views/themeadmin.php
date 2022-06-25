<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo (isset($headtext) ? $headtext :  $title);  ?></title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- Dynamically Add Javascript and CSS -->
		<?php
			echo put_headers_css();
			echo put_headers_js();
		?>
		
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script>
			$(document.body).ready(function() {

			//$("#skin-colorpicker").ace_colorpicker().on("change",function(){
				//var b=$(this).find("option:selected").data("class");
				var b='<?php echo $theme; ?>';
				var a=$(document.body);
				a.removeClass("skin-1 skin-2 skin-3 default");
				if(b!="default"){
					a.addClass(b)
				}
				
				if(b=="skin-1"){
					$(".ace-nav > li.grey").addClass("dark")
				}else{
					$(".ace-nav > li.grey").removeClass("dark")
				}
				
				if(b=="skin-2"){
					$(".ace-nav > li").addClass("no-border margin-1");
					$(".ace-nav > li:not(:last-child)").addClass("light-pink").find('> a > [class*="icon-"]').addClass("pink").end().eq(0).find(".badge").addClass("badge-warning")
				}else{
					$(".ace-nav > li").removeClass("no-border margin-1");
					$(".ace-nav > li:not(:last-child)").removeClass("light-pink").find('> a > [class*="icon-"]').removeClass("pink").end().eq(0).find(".badge").removeClass("badge-warning")
				}
				
				if(b=="skin-3"){
					$(".ace-nav > li.grey").addClass("red").find(".badge").addClass("badge-yellow")
				}else{
					$(".ace-nav > li.grey").removeClass("red").find(".badge").removeClass("badge-yellow")
				}
			//})

			});
				//$(window).load(function() {
				//	console.log("window loaded");
				//});
		</script>


	</head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							Elearning Bina Sarana Informatika
						</small>
					</a><!--/.brand-->

				<?php //require_once('themes/tpl_navbar.php'); ?>
 	
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<?php //require_once('themes/tpl_navshorcut.php'); ?>

				<?php if($this->session->userdata('sesi_officer')){require_once('themes/tpl_navofficer.php'); }?>
				<?php if($this->session->userdata('sesi_student')){require_once('themes/tpl_navstudent.php'); }?>
				<?php if($this->session->userdata('sesi_teacher')){require_once('themes/tpl_navteacher.php'); }?>

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<?php echo $this->breadcrumb->output(); ?>	
				<?php echo subMenuBar(); ?>
				<div class="page-content">

					
					<div class="page-header position-relative">
						<h1>
							<?php echo $title; ?>
							<small>
								<i class="icon-double-angle-right"></i>
								<?php echo $subtitle; ?>
							</small>
						</h1>
						
					</div><!-- Page Header -->

					<div class="row-fluid">
						<!-- <div class="span12"> -->

							<!--PAGE CONTENT BEGINS-->

							<?php echo $contents ?>
							<!--PAGE CONTENT ENDS-->

					

						<!--</div>/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->


			</div><!--/.main-content-->
		</div><!--/.main-container-->
<!--
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
-->

		<!--[if IE]> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!--[endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?=base_url()?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='<?=base_url()?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?=base_url()?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>		
		<!-- Dynamically Add Javascript and CSS -->
		<?php
			echo put_footers_css();
			echo put_footers_js();
		?>

	</body>
</html>
