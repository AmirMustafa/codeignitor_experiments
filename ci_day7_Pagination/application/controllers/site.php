<?php
	class Site extends CI_Controller
	{
		function index()
		{

			$this->load->library('pagination');		//Loading Pagination
			$this->load->library('table');			// Loading Table for displaying data

			$this->table->set_heading('ID', 'Title', 'Author', 'Content');  // for setting heading fonts

			$config['base_url'] = "http://localhost/ci/index.php/site/index";
			$config['total_rows'] = $this->db->get('data')->num_rows(); //data is the name of table in																  db ci_series
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$config['full_tag_open'] = '<div id="pagination">';	//creating opening and closing tag to														  put ext. css
			$config['full_tag_close'] = '</div>';

			$this->pagination->initialize($config);			// Initialize above data

			$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
										//parameter1: passing data table,								  parameter2: imits per page,									  parameter3: uri segments

			$this->load->view('site_view',$data);		//Loading view and passing data variable created												  above
		}

		
	}
?>