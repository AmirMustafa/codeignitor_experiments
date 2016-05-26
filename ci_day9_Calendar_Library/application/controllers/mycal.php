<?php
	class Mycal extends CI_Controller
	{
		function display($year = null, $month = null)	// By setting $year = null, $month = null, even														if nothing is returned no error will show
		{
			if(!$year)
			{
				$year = date('Y');		//if no year return give current year
			}

			if(!$month)
			{
				$month = date('m');		//if no month return give current month
			}

			$this->load->model('Mycal_model');		//Loading Model
		
			if($day = $this->input->post('day'))		//receiving day data from model
			{
				$this->Mycal_model->add_calendar_data(
					"$year-$month-$day", $this->input->post('data')   // format of date																		 $year-$month-$day
				);
			}

			$data['calendar'] = $this->Mycal_model->generate($year, $month);	//Retrieving data from																			the model
			$this->load->view('mycal', $data);				//Passing the above retrieved data to view.
		}
	}
?>