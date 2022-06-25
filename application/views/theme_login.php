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

					var a=$(document.body);
					a.removeClass("skin-1 skin-2 skin-3");
					//$(".ace-nav > li").addClass("no-border margin-1");
					//$(".ace-nav > li:not(:last-child)").addClass("light-pink").find('> a > [class*="icon-"]').addClass("pink").end().eq(0).find(".badge").addClass("badge-warning")
					$(".ace-nav > li.grey").addClass("dark");
					//console.log("document loaded");
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
							FISIP UI
						</small>
					</a><!--/.brand-->

				<?php //require_once('themes/tpl_navbar.php'); ?>
 	
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">

			<div class="login-container">

			<div class="space-6"></div>

				<div class="row-fluid">
					<div class="center">
						<h1><span class="blue"><?php echo $title." ".$subtitle; ?></span></h1>
					</div>
				</div>

				<div class="row-fluid">
					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box">
							<div class="widget-body">
								<div class="widget-main">
								<?php echo $contents ?>
								</div><!--/widget-main-->


							</div><!--/widget-body-->
						</div><!--/login-box-->

					</div><!--/position-relative-->
				</div>

				<p class="footer center">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			</div>								
			
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>


		<!--[if IE]>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->

		<!--[if !IE]>-->
		<!--
		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?=base_url()?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		-->
		<!--<![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='<?=base_url()?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?=base_url()?>application/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>		
		<!-- Dynamically Add Javascript and CSS -->
		<?php
			echo put_footers_css();
			echo put_footers_js();
		?>

	</body>
</html>
