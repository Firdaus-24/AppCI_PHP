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

<ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_index">Index Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_event">Event Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_proserv">Prog. Service Manage</a></li>
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_expert">Expert Manage</a></li>  
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_partner">Partnership Manage</a></li>
  <li role="presentation" class="active"><a href="#">Porto Folio Manage</a></li>
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_about">AboutUs Manage</a></li>
</ul>
<div class="container sub">
    <!-- row-fluid-->

    <div class="row">
	<!-- FIX Bootstrap z-index on mobiles for .pull-right normalize -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left" style="z-index:1020;"> 
	<!- content-->


	<div id="form_List">
			<table class="table table-bordered table-striped table-fixed-header">
    			<thead>
        		<tr>
           	   		<td align="center" colspan="6"><strong>Porto Folio</strong></td>
	        	</tr>
        		<tr>
            		<th>NO</th>
	            	<th>Porto Folio</th>
	    	        <th>CAPTION</th>
    	    	    <th>UPLOAD DATE</th>
    	    	    <th>ACTION</th>
	        	</tr>
		    	</thead>
    			<tbody>
        		<?php if($getIt > 0){
	            	$counter=0;
	    	        foreach($getIt as $d){
        		?>
            		    <div id="baris<?php echo $counter;?>">
            		    <tr>
            		    	<?php $counter=$counter + 1; ?>
	                	    <td><?php echo $counter; ?></td>
	                	    <td><?php echo $d->file_name; ?></td>
		                    <td><?php echo $d->caption; ?></td>
    		                <td><?php echo $d->upload_date; ?></td>
    		                <td>
    		                	<div id="<?php echo $counter; ?>">
    		                	<button class="glyphicon glyphicon-remove btn btn-danger" id="delete<?php echo $counter;?>" onclick=myDelete(<?php echo $d->id; ?>,<?php echo $counter; ?>)></button>
    		                	</div>
    		                </td>
    		                <?php } ?>
		                </tr>
		            	</div>
    		        <?php 
        		        
            		}else{ ?>
	            	   <tr><td colspan="6"><?php echo $konfirmasi; ?></td></tr>

		            <?php } ?>
    			</tbody>
			</table>
	</div>	
	

	</div>
	</div>
</div>

<script type="text/javascript">

    function myDelete(id1,id2){
    	url_p = "<?php echo base_url();?>officer/manage/deletedataimg";
	    var formData = { param : id1 };
        $.ajax({
            type : "POST",
            url  : url_p,
            data : formData,
            success:function(result){
            	alert(result);
  				$('#delete'+id2).addClass('disabled');
 				$('#delete'+id2).removeAttr('data-toggle');
				<?php $konfirmasi = "No Data"; ?>
            }
            
        }) //end AJAX

    }

</script>
