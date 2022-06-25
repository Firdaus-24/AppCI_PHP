<script src="<?php echo base_url(); ?>application/assets/bootstrap335/js/bootstrap.min.js"></script>
<link href="<?php echo base_url(); ?>application/assets/bootstrap335/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>application/assets/jquery/core/jquery-2.1.4.min.js" type="text/javascript"></script>

<style type="text/css">
    body {
        padding-top: 0px;
        padding-bottom: 0px;
		background:#e0e0e0;
    }
		.wrapper{
		max-width:1300px;
		display:block;
		margin-right:auto;
		margin-left:auto;
		background:#fff;
	}

    .info{
        border: 0px solid #333;
        float: left;
        margin-right: 25px;
        float: left;
    }
	
	.container{
		padding:0px 100px;
	}
	
	.navbar {
		margin-bottom:0px;
		border-radius:0px;
	}
	
	.sub{
		padding: 20px 0 0 0;
	}
	
	.totop{
		margin-top:0px;
	}
	
	
	.titlenuri{
		color: #ff0000;

	}

	h1 {
		font-size: 32.5px;
	}
	.attention h2, .attention h3{
		font-size:30px;
	}
	
	p{
		text-align:justify;
	}
	
	.link{
		text-align:center;
		font-size:20px;
		font-family: "Times New Roman", Times, serif;
	}

</style>

<style type="text/css">
    .logout{
        float: right;
    }
    .clearfloat{
        clear: both;
    }
    .panel-custom > .panel-heading-custom {
        background: #4C801A; color: #ffffff; 
    } 

    .panel-body {
        background:#F0FFD1;
    }        
</style>
<?php 
    //setting warna panel kiri dan kanan
    //$panelLeft="success"; 
    $panelLeft="custom"; 
    $custom = "custom";
    $panelRight="custom"; 
    //$panelRight="primary"; 

?>
<div class="container-sub">
    <!-- row-fluid-->

    <div class="row">
	<!-- FIX Bootstrap z-index on mobiles for .pull-right normalize -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left" style="z-index:1020;"> 

	<!-- content-->
    <div class="panel panel-<?php echo $custom; ?>">

        <div class="panel-heading panel-heading-<?php echo $custom; ?>"><?php echo $lbl_contactus; ?></div>
        <div class="panel-body">



        <form class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="<?php echo base_url().'portal/contactus/saveContactUs'; ?>" />

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><?php echo $lbl_name." *"; ?></label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name of person type here" style="height:30px;" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><?php echo $lbl_phone; ?></label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number type here" style="height:30px;">
                </div>
            </div>
        
            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><?php echo $lbl_email." *"; ?></label>
                <div class="col-md-7">
                    <input type="text" class="form-control" name="email" id="email" placeholder="email type here" style="height:33px;" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><?php echo $lbl_comments." *"; ?></label>
                <div class="col-md-8">
                    <textarea class="form-control" rows="5" name="comments" id="comments" placeholder="comments here" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><?php echo $lbl_validation; ?></label>
                <label for="inputType" class="col-md-3 control-label"><img src="<?php echo $image; ?>"></label>
            </div>

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><font color="red"><?php echo $optional; ?></font></label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="security_code" id="security_code" style="height:40px" required>
                    <input type="hidden" name="id_code" id="id_code" value="<?php echo $id_img; ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-2"><!--<button type="button" class="btn btn-warning"> -->
                    <input type="submit" name="simpan" class="btn btn-primary" value="Submit">
                </div>
            </div>

            <div class="form-group">
                <label for="inputType" class="col-md-3 control-label"><font color="red"><?php echo $lbl_record; ?></font></label>
            </div>

	   </form>
        <font color="red"><?php echo validation_errors(); ?></font>
	   </div>
	
    </div>
    </div>
    </div>
</div>    
