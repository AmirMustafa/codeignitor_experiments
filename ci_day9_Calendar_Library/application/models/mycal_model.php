<?php
	class Mycal_model extends CI_Model
	{
		var $conf;					// using $conf as the class member and calling the constructor

		function __construct()
		{
			parent :: __construct(); 

			$this->conf = array(
				'start_day' => 'monday',
				'show_next_prev' => true
				//'next_prev_url' => base_url().'mycal/display'
			);
				//the template code is found in internet i.e. google-> codeignitor userguide calendar library template. open 1st link, go to its last page and copy template within quotes and paste. Note we have added 3 names of class below to add ui effect.

			$this->conf['template'] = '
				 {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr class="days">{/cal_row_start}
   {cal_cell_start}<td class="day">{/cal_cell_start}

   {cal_cell_content}
		<div class="day_num">{day}</div>
		<div class="content">{content}</div>
	{/cal_cell_content}
   {cal_cell_content_today}
		<div class="day_num highlight">{day}</div>
		<div class="content">{content}</div>
   {/cal_cell_content_today}

   {cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
			';

		}
		
		function get_calendar_data($year, $month)	//this will get the data from the database
		{
			$query = $this->db->select('date, data')->from('calendar')
				->like('date', "$year-$month", 'after')->get();		//we are using select method to														access page
			$cal_data = array();

			foreach($query->result() as $row)
			{
				$cal_data[substr($row->date,8,2)] = $row->data; //since date format is YYYY-MM-DD,											accesisng date after 8 character 2 letter
			}
			return $cal_data;	//so data will be returned on that day in calender.
		}
		

		function add_calendar_data($date, $data)	//here we will update data if exists otherwise add.
		{
			if($this->db->select('date')->from('calendar')
							->where('date', $date)->count_all_results())  //  where('date', $date) will									           see if date exists alredy,									count_all_results() checks no. of results
			{
				$this->db->where('date', $date)		//if data is found on that date, use update query
						->update('calendar', array(
							'date' => $date,
							'data' => $data
				));
			}
			else
			{									//if data is not found on that date, use insert query
				$this->db->insert('calendar', array(
							'date' => $date,
							'data' => $data
				));
			}
		}
		
		function generate($year, $month)	//creating the generate function passed from controller.
		{
			

			$this->load->library('calendar', $this->conf);		//Loading Calendar Library

			//$this->add_calendar_data('2016-05-20', 'more testiiii'); --> for debugging o/p

			/*$cal_data = array(
				15 => 'Amir',		//using hardcoded data before creating actual click function.
				17 => 'Mustafa'
			);*/

			$cal_data = $this->get_calendar_data($year, $month);
			return $this->calendar->generate($year, $month, $cal_data);	//returning get calendar data																to controller and passing the																above third parameter
		}
	}
?>
