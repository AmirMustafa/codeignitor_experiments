<?php
	class Site extends CI_Controller
	{
		function index()				// R as in CRUD is done here
		{
			
			$data = array();  //if nothing returned i.e. no row--> no error will show

			if($query = $this->site_model->get_records())
			{
				$data['records'] = $query;
			}
			$this->load->view('options_view.php',$data);	//in options_view.php we will write CRUD														method 

		}

		function create()					// this is C as in Create in CRUD
		{
			$data = array(
				'title' => $this->input->post('title'), //retrieving data from the form and storing in												$data
				'content' => $this->input->post('content')
			);
			

			$this->site_model->add_record($data);	//add_record is the method for inserting													  we have created in site_model.php
			$this->index();					//calling index function within the class
		}

		function update()
		{
			$data = array(
				'title' => 'My Freshly Updated Title',
				'content' => 'My Freshly Updated Content.............'
			);
			$this->site_model->update_record($data);
		}

		function delete()
		{
			$this->site_model->delete_row();
			$this->index();
		}
	}
?>

