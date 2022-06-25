<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets30/ico/favicon.png">

    <title><?php echo (isset($headtext) ? $headtext :  $title);  ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets30/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets30/css/navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript" src="<?=base_url()?>assets30/js/jquery.js"></script>

    <!-- jQuery-UI -->
            <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/jquery-ui/development-bundle/themes/base/jquery.ui.all.css" />
           <!-- <script type="text/javascript" src="<?=base_url()?>assets/jquery-ui/development-bundle/jquery-1.4.2.js"></script>-->
            <script type="text/javascript" src="<?=base_url()?>assets/jquery-ui/development-bundle/ui/jquery.ui.widget.js"></script>
            <script type="text/javascript" src="<?=base_url()?>assets/jquery-ui/development-bundle/ui/jquery.ui.tabs.js"></script>  
    <!-- Close jQuery-UI -->

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo (isset($headtext) ? $headtext :  $title);  ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>


        <div id="canvas">
          
          <div class="sidebar">Siderbar</div>


          <!-- Main component for a primary marketing message or call to action -->
          <div class="contents">
            <p>
              <?php echo $contents ?>
            </p>
          </div>

          <br class="clearfloat" />
        </div>



    </div> <!-- /container -->

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url(); ?>assets30/js/bootstrap.min.js"></script>
  </body>
</html>
