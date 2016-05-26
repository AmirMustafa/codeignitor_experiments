<?php 
	class Contact extends CI_Controller
	{
		function index()
		{
			//echo "Contact";

			$data['main_content'] = 'contact_form';			//we have added main_content inside															  views->includes->template.php
			$this->load->view('includes/template',$data);
		}

		function submit()
		{
			$name = $this->input->post('name');			//Receiving name from the form

			$data['main_content'] = 'contact_submitted';	// so now we will create contact_submitted													   page with Thank You message
			

			if($this->input->post('ajax'))
			{
				$this->load->view($data['main_content']);	
			}
			else
			{
				$this->load->view('includes/template',$data);	//Loading view of template
			}
		}
	}
?>