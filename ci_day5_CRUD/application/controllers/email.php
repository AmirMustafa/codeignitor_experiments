<?php
	class Email extends CI_Controller
	{
		/*function __construct()
		{
			parent::__construct();
		}*/

		function index()
		{
			$this->load->view('newsletter');
		}

		function send()
		{
			/*echo "Hello from SEND "; die(); */

			$this->load->library('form_validation');		//Loading form_validation, can also be															loaded in autoload.
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email Address','trim|required|valid_email');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('newsletter');		//Redirecting to same form page.
			}
			else
			{
				//Validation has passed, Now send the email.

				$name = $this->input->post('name');		// or $name = $this->input->$_POST['name'];
				$email = $this->input->post('email');   // or $email = $this->input->$_POST['email'];

				$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'amirmustafa777@gmail.com',
				'smtp_pass' => '1101297141bismillah'
				
			);
			

				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");

				$this->email->from('amirmustafa777@gmail.com','Amir Mustafa');
				$this->email->to('email');
				$this->email->subject('Test Newsletter Sign Up Confirmation!!.');
				$this->email->message('You are now signed in');

				$path = $this->config->item('server_root');
				$file = $path.'/ci/attachments/newsletter1.txt';	//create newsletter.txt in																	attachments file.
				$this->email->attach($file);

				if($this->email->send())
				{
					/*echo "Your Email was sent. fool.";*/
					$this->load->view('newsletter_signup_page');
					
				}
				else
				{
					show_error($this->email->print_debugger());
				}


			}
			

			

		}
	}
?>