<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('student');
		$this->load->model('university');
	}
	
	public function index()
	{
		$data['universities'] = $this->university->get_universities();
		$this->load->view('register_user', $data);
	}

	function validation(){
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[student.email]',
			array(
					'required'      => 'You have not provided %s.',
					'is_unique'     => 'This %s already exists.'
			));
		$this->form_validation->set_rules('university_id', 'University of provenience', 'required|trim');
		$this->form_validation->set_rules('year', 'Year of study', 'required|trim');
		$this->form_validation->set_rules('dob', 'Date of birth', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()){
			$encrypted_password = $this->encryption->encrypt($this->input->post('password'));

			$data = array(
				'first_name'	=>	$this->input->post('first_name'),
				'last_name'		=>	$this->input->post('last_name'),
				'university_id' =>	$this->input->post('university_id'),
				'course'		=>	$this->input->post('course'),
				'email'			=>	$this->input->post('email'),
				'year'			=>	$this->input->post('year'),
				'dob'			=>	$this->input->post('dob'),
				'password'		=>	$encrypted_password
			);
			$id = $this->student->register_student($data);

			if ($id > 0){
				redirect('/login/index');
			}
		}else{
			$this->index();
		}

	}
}
