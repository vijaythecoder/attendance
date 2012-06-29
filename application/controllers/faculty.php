<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faculty extends CI_Controller {

function add_faculty()
	{
		$this->load->view('add_faculty');	
	}
function create_faculty()
	{
		$this->form_validation->run('add_faculty');
		if($this->Faculty_model->add_faculty())
         echo "success";
	}
}