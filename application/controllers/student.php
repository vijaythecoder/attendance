<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

function add_student()
{
	$this->load->view('add_student');	
}

function create_student()
{
	$this->form_validation->run('add_student');
		if($this->Student_model->add_student())
         echo "success";	
}
} 