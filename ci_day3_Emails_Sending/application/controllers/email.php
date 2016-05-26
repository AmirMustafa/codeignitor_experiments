<?php
	class Email extends CI_Controller
	{
		/*function __construct()
		{
			parent::__construct();
		}*/

		function index()
		{								// saving google smtp
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'amirmustafa777@gmail.com',
				'smtp_pass' => 'amirxyz'
				
			);

			$this->load->library('email',$config);		//loading the email library and passing above												  config variable
			$this->email->set_newline("\r\n");			//must be written in order to avoid errors

			$this->email->from('amirmustafa777@gmail.com','Amir Mustafa');
			$this->email->to('amirmustafa777@gmail.com');
			$this->email->subject('This is email test.');
			$this->email->message('It is working great');

			if($this->email->send())
			{
				echo "Your Email was sent. fool.";
			}
			else
			{
				show_error($this->email->print_debugger());
			}

		}
	}
?>