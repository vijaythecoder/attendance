<?php
class Faculty_model extends CI_Model
{
	function add_faculty()
	{
		$faculty_data = array('user_id'=>$this->input->post('user_id'),
							   'faculty_name'=>$this->input->post('faculty_name'),
							   'phone_number'=>$this->input->post('phone_number'),
							   'designation'=>$this->input->post('designation'),
							   'email'=>$this->input->post('email'),
							   'hours'=>$this->input->post('hours'));
							   
		$this->db->insert('faculty',$faculty_data);
				
	}	
}
?>