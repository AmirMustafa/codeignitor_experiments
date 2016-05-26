	<?php
	class Membership_model extends CI_Model
	{
		function validate()
		{
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', md5($this->input->post('password')));  //md5 is for encryption																		in password

			$query = $this->db->get('membership');	// selecting data from db using active row method

			if($query->num_rows() == 1)		// if row entered by user is returned, return that row info.
			{
				return true;
			}
			
		}

		function create_member()
		{										// Here we are writing insert query
			$new_member_insert_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email_address' => $this->input->post('email_address'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
			);
			$insert = $this->db->insert('membership',$new_member_insert_data);	// Parameter1: table where we want to insert, Parameter2: Passing the above variable
			return $insert;
		}
	}
?>