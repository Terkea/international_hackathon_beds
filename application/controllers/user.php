<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('student');
		$this->load->model('team');
		$this->load->model('team_member');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('encryption');
	}
	
	public function index(){
		$this->load->view('login');
	}

	public function validation(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->student->get_by_email($email)){
				if($this->encryption->decrypt($this->student->get_by_email($email)[0]->password) === $password){
					$session_data = array(
						'email'		=>		$email
					);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'user/my_account');

				}else{
					$this->session->set_flashdata('error', $decrypted_password);
					redirect(base_url() . 'user');
				}
			}
		}else{
			$this->index();
		}
	}

	public function my_account(){
		if($this->session->userdata('email') != ''){
			$data['user'] = $this->student->get_by_email($this->session->userdata('email'));
			$data['university_id'] = $data['user'][0]->university_id;
			$data['teams'] = $this->team->get_by_university_id($data['university_id']);
			$data['my_team'] = $this->team_member->check_user_team($data['user'][0]->id);
			$this->load->view('my_account', $data);
		}else{
			redirect(base_url() . 'user');
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		redirect(base_url() . 'welcome');
	}
}
