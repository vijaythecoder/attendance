<?php
class student_model extends CI_Model
{
	function add_student()
	{
		$student_data = array('student_id'=>$this->input->post('student_id'),
							   'student_name'=>$this->input->post('student_name'),
							   'phone_number'=>$this->input->post('phone_number'),
							   'branch'=>$this->input->post('branch'),
							   'year'=>$this->input->post('year'),
							   'sem'=>$this->input->post('sem'),
							   'email'=>$this->input->post('email'),
							   'address'=>$this->input->post('address'));
							   
		$this->db->insert('students',$student_data);
				
	}	
}
?>