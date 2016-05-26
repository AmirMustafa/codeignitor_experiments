<?php
	class Login extends CI_Controller
	{
		function index()
		{
			$data['main_content'] = 'login_form';	//main_content is the variable created in												template.php for accessing actual contents of the page
			$this->load->view('includes/template',$data);
		}

		function validate_credentials()
		{
			$this->load->model('membership_model');
		    $query = $this->membership_model->validate();	//calling membership_model
		
			if($query)										//if user's credentials validated
			{
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				
			 	$this->session->set_userdata($data);	//This is how we append data into session
				redirect('site/members_area');			// After successful login, loading next page											   i.e. members_area.php
			}
			
			else
			{
				$this->index();	//loads login form again
			}

		}

		function signup()
		{
			$data['main_content'] = 'signup_form';
			$this->load->view('includes/template', $data);	// Loading signup page in view and passing													   data
		}

		function create_member()
		{
			$this->load->library('form_validation');	//Loading Library for Form Validation
			//fieldname, error message, validation rules

			$this->form_validation->set_rules('first_name','First Name','trim|required');
			$this->form_validation->set_rules('last_name','Last Name','trim|required');
			$this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email');
			$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');

			if($this->form_validation->run() == FALSE)
			{
				$this->signup();	//calling signup page again as wrong data entered by user
			}
			else
			{
				$this->load->model('membership_model');	// in membership_model.php within														create_member() we are putting insertion query
				if($query = $this->membership_model->create_member())
				{
					$data['main_content'] = 'signup_successful';
					$this->load->view('includes/template',$data);
				}
				else
				{
					$this->signup();
				}
			}
		}
	}
?>