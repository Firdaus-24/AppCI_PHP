<h4 class="header blue lighter bigger">
	<i class="icon-coffee blue"></i>
	Please Enter Your Information
</h4>

<div class="space-6"></div>
<?php echo form_open('officer/greeting') ;?>
	<fieldset>
		<label>
			<span class="block input-icon input-icon-right">
				<input name="inputUsername" class="span12" placeholder="Username" type="text" required>
				<i class="icon-user"></i>
			</span>
		</label>

		<label>
			<span class="block input-icon input-icon-right">
				<input name="sandi" class="span12" placeholder="Password" type="password" required>
				<i class="icon-lock"></i>
			</span>
		</label>

		<label>
			<span class="block input-icon input-icon-right">
			<label for="inputType" class="col-md-3 control-label" align="center"><img src="<?php echo $image; ?>"></label>
			</span>
		</label>

		<label>
			<span class="block input-icon input-icon-right">
				<input name="security_code" id="security_code" class="span12" placeholder="Type Capscha" type="text" required>
				<i class="icon-lock"></i>
			</span>
		</label>

		<div class="space"></div>
		<?php echo $this->session->flashdata('login_message'); ?>
		<div class="space"></div>

		<div class="clearfix">
			<label class="inline">
				<input type="checkbox">
				<span class="lbl"> Remember Me</span>
			</label>

			<?php 
				$tombol = array(
				    'name' => 'submit',
				    'class' => 'width-35 pull-right btn btn-small btn-primary',
				    'value' => 'true',
				    'type' => 'submit',
				    'content' => '<i class="icon-key"></i> Login'
				);

				echo form_button($tombol);	
				//echo form_submit('cmdlogin', 'LOGIN'); 
			?>

		</div>
		
		<div class="space-4"></div>
	</fieldset>
<?php echo form_close() ;?>

<div class="toolbar clearfix">
	<div>
		<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
		<i class="icon-arrow-left"></i>
		I forgot my password
		</a>
	</div>

<!--	
	<div>
		<a href="<?php echo base_url(); ?>teacher/registrasi" onclick="show_box('signup-box'); return false;" class="user-signup-link">
		I want to register
		<i class="icon-arrow-right"></i>
		</a>
	</div>
-->

</div>