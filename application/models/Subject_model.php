<?php
class subject_model extends CI_Model
{
	function add_subject()
	{
		$subject_ref_data = array('subject_id'=>$this->input->post('subject_id'),
							   'branch'=>$this->input->post('branch'),
							   'year'=>$this->input->post('year'),
							   'sem'=>$this->input->post('sem'));
							   
		 $subject_data = array('subject_name' => $this->input->post('subject_name'),
								 'subject_id'=>$this->input->post('subject_id'));
							   
		$this->db->insert('subjects_ref',$subject_ref_data);
		$this->db->insert('subjects',$subject_data);
				
	}	
}
?>