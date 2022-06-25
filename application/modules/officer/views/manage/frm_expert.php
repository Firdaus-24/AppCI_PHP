<link href="<?php echo base_url(); ?>assets30/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets30/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets30/js/jquery.js" type="text/javascript"></script>

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
</style>

<?php echo $scriptmce; ?>

<ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_index">Index Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_event">Event Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_proserv">Prog. Service Manage</a></li>
  <li role="presentation" class="active"><a href="#">Expert Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_partner">Partnership Manage</a></li>
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_porto">Porto Folio Manage</a></li>
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_about">About Us Manage</a></li>
</ul>
<div class="container sub">
    <!-- row-fluid-->

    <div class="row">
	<!-- FIX Bootstrap z-index on mobiles for .pull-right normalize -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left" style="z-index:1020;"> 
	<!- content-->


    <form method="post" accept-charset="utf-8" action="<?php echo base_url().'officer/manage/updateData'; ?>" />
    <table class="table">
        <thead>
        <?php foreach ($getIt as $k) { ?>

	        <tr>
    	        <td><strong><font color="blue">Document in Indonesia</font></strong></td>
        	</tr>   
	        <tr>
    	        <td><textarea cols="60" rows="5" name="id_doc" id="id_doc"><?php echo $k->doc_in;?></textarea></td>
        	</tr>        
	        <tr class="info">
    	        <td><input type="hidden" name="flag" id="flag" value="1"></td>
    	        <td><input type="hidden" name="id" id="id" value="<?php echo $k->id;?>"></td>
        	</tr>
	        <tr>
    	        <td><strong><font color="blue">Document in English</font></strong></td>
        	</tr>   
	        <tr>
    	        <td><textarea cols="60" rows="5" name="en_doc" id="en_doc"><?php echo $k->doc_en;?></textarea></td>        
        	</tr>
	        <tr>
    	        <td><strong><font color="red"><?php echo validation_errors(); ?></font></strong></td>
        	</tr>
	        <tr>
    	        <td><input type="submit" name="simpan" id="simpan" class="btn btn-primary" value="Save"></td>
        	</tr>

        <?php 
        }
        ?>
        </thead>
    </table>
	</form>
		

	</div>
	</div>
</div>
