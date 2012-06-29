<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class subject extends CI_Controller {

function add_subject()
	{
		$this->load->view('add_subject');	
	}
function create_subject()
	{
		$this->form_validation->run('add_subject');
		if($this->Subject_model->add_subject())
         echo "success";
	}
}