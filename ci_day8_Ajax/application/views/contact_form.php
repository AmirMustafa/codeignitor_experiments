<div id="contact_form">
	<h1>Contact Us !</h1>
	<?php
		echo form_open('contact/submit');
		echo form_input('name','Name', 'id = "name"');
		echo form_input('email','Email', 'id = "email"');

		$data = array('name' => 'message', 'cols' => 35, 'rows' => 12);
		echo form_textarea($data, 'Message', 'id = "message"');//way of creating text area in ci

		echo form_submit('submit','Submit', 'id = "submit"');
		echo form_close();
	?>
</div>

<script type="text/javascript">

	$('#submit').click(function() {			//using jquery i.e. on clicking submit button

	var name = $('#name').val();
	if(!name || name == 'Name')				// validating name 
	{
		alert('Please enter your name');
		return false;
	}

	var email = $('#email').val();			// validating email
	if(!email || email == 'Email')
	{
		alert('Please enter your Email Address');
		return false;
	}
	
	var msg = $('#message').val();			// validating message
	if(!msg || msg == 'Message')
	{
		alert('Message is mandatory Sir !!');
		return false;
	}

	var form_data = {						//it will be storing name, email, message, ajax calling
			name: $('#name').val(),
			email: $('#email').val(),
			mesage: $('#message').val(),
			ajax: '1'
		};

		$.ajax({
			url: "<?php echo site_url('contact/submit'); ?>",
			type: 'POST',
			data: form_data,
			success: function(msg)			//on success we are calling ajax function in
			{
				//alert(msg);
				$('body').html(msg);
			}
		});

		return false;
	});
</script>