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
	div.urai {
    	text-align: left;
	    font-weight: normal;
	    font-family: "Times New Roman", Times, serif;
	    font-size: 14px;
    	width: 600px;
    	margin: 5px;
	}

</style>

<?php echo $scriptmce; ?>

<ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/img_carusel">Index Manage</a></li>  
  <li role="presentation" class="active"><a href="#">Comment Manage</a></li>
  <li role="presentation"><a href="<?php echo base_url();?>officer/manage/txt_about">About Us Manage</a></li>
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
           	   		<td align="center" colspan="6"><strong>Comment Manage Authorized</strong></td>
	        	</tr>
        		<tr>
            		<th>NO</th>
    	    	    <th>COMMENT</th>
    	    	    <th>IP</th>
    	    	    <th>DATE</th>
    	    	    <th>STATUS</th>
    	    	    <th>ACTION</th>
	        	</tr>
		    	</thead>
    			<tbody>
        		<?php
        		if($getIt > 0){
	            	$counter=0;
	    	        foreach($getIt as $d){ ?>
            		    <tr>
            		    	<?php $counter=$counter + 1; ?>
    		                <td><?php echo $counter; ?></td>
    		                <td><div class="urai"><?php echo $d->comment; ?></div></td>
    		                <td><?php echo $d->ip; ?></td>
    		                <td><?php if($d->flag==0) echo "Not Authorized"; elseif($d->flag=2) echo "Not Yet Auth" ?></td>
    		                <td><?php echo $d->date; ?></td>
    		                <td>
    		                	<?php if($d->flag==2)
    		                	{?> 
	    		                	<button class="glyphicon glyphicon-remove btn btn-danger" id="delete<?php echo $counter;?>" onclick=myAct(<?php echo $d->id; ?>,"d",<?php echo $counter;?>)></button>
    		                		<button class="glyphicon glyphicon-ok btn btn-success" id="auth<?php echo $counter;?>" onclick=myAct(<?php echo $d->id; ?>,"u",<?php echo $counter;?>)></button>
    		                	 	<button class="glyphicon glyphicon-minus-sign btn btn-warning" id="block<?php echo $counter;?>" onclick=myAct(<?php echo $d->id; ?>,"b",<?php echo $counter;?>)></button>
    		                	<?php 
    		                	}elseif($d->flag==0){?>
	    		                	<button class="glyphicon glyphicon-remove btn btn-danger" id="delete<?php echo $counter;?>" onclick=myAct(<?php echo $d->id; ?>,"d",<?php echo $counter;?>)></button>
    		                	<?php
    		                	} 
    		                	?>
    		                </td>
		                </tr>
    		    	<?php
    		    	}
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

    function myAct(id1,id2,counter){
    	url_p = "<?php echo base_url();?>officer/manage/act_comment";
	    var formData = { 
	    	act 	: id1, 
	    	param 	: id2 
	    };
        $.ajax({
            type : "POST",
            url  : url_p,
            data : formData,
            success:function(result){
            	alert(result);
  				$('#delete'+counter).addClass('disabled');
 				$('#delete'+counter).removeAttr('data-toggle');
  				$('#auth'+counter).addClass('disabled');
 				$('#auth'+counter).removeAttr('data-toggle');
  				$('#block'+counter).addClass('disabled');
 				$('#block'+counter).removeAttr('data-toggle');
				<?php $konfirmasi = "No Data"; ?>
            }
        }) //end AJAX
    }


</script>
