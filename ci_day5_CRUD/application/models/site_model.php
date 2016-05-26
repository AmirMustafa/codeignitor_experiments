<?php
	class Site_model extends CI_Model
	{
		function get_records()								// For reading from db
		{
			$query = $this->db->get('data');				//data is the name of table created	
			return $query->result();			//This function returns the query result as an array of										  objects, or an empty array on failure. Other than											  this, other way of genearting result is num_rows()
		}

		function add_record($data)							// For inserting into db
		{
			$this->db->insert('data',$data);	//again data is table name in db and $data is data											  passed through insert query
			return;
		}

		function update_record($data)						// For updating data in db
		{
			$this->db->where('id',2);						//here 2 is id we want to update(can be any)
			$this->db->update('data',$data);
		}

		function delete_row()								// For deleting data in db
		{
			$this->db->where('id',$this->uri->segment(3));
			$this->db->delete('data');
		}
	}

	/*
			$this->uri->segment(n)

		Permits you to retrieve a specific segment. Where n is the segment number you wish to retrieve. Segments are numbered from left to right. For example, if your full URL is this:

		http://example.com/index.php/news/local/metro/crime_is_up
		The segment numbers would be this:

		news
		local
		metro
		crime_is_up
	*/
?>