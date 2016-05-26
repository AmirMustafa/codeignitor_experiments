<html>
	<div id="login_form">
		<h1>Login Form</h1>
		
		<?php
			echo form_open('login/validate_credentials');	//opening form tag with path to submit
			echo form_input('username','Username');		//way of creating input tag
			echo form_password('password','Password');	//way of creating password tag
			echo form_submit('submit','Login');			//way of creating submit button
			echo anchor('login/signup','Create Account');	//way of creating links
			echo form_close();
		?>
	</div>
	<?php echo validation_errors(); ?>
</html>