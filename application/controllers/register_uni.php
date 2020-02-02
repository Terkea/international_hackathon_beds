<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Uni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('university');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('register_uni');
	}

	function validation(){
		$this->form_validation->set_rules('name', 'University Name', 'required');
		$this->form_validation->set_rules('contact_first_name', 'Contact First Name', 'required|trim');
		$this->form_validation->set_rules('contact_last_name', 'Contact Last Name', 'required|trim');
		$this->form_validation->set_rules('contact_email', 'Contact email', 'required');

		// todo: here's a bug for some reason when submit the contact_email is 0
		if ($this->form_validation->run()){
			$data = array(
				'name'						=>	$this->input->post('name'),
				'contact_first_name'		=>	$this->input->post('contact_first_name'),
				'contact_last_name'			=>	$this->input->post('contact_last_name'),
				'contact_email'				=>	$this->input->post('contact_email'),
			);
			$id = $this->university->register_university($data);

			if ($id > 0){
				// the user was created successfully
				// $this->index();
			}
		}else{
			// return to index
			$this->index();
		}

	}
}
