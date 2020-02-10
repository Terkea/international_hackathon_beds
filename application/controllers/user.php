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

	public function join_team(){
		$this->form_validation->set_rules('student_id', 'User', 'required');
		$this->form_validation->set_rules('team_id', 'Team', 'required');
		if ($this->form_validation->run()){
			$team_id = $this->input->post('team_id');
			$student_id = $this->input->post('student_id');
			$data = array(
				'team_id'		=>	$this->input->post('team_id'),
				'student_id'	=>	$this->input->post('student_id')
			);
			$id = $this->team_member->register_member($data);

			if ($id > 0){
				redirect('/user/my_account');
			}
		}else{
			$this->my_account();
		}
	}

	public function create_team(){
		$this->form_validation->set_rules('team_leader', 'User', 'required');
		$this->form_validation->set_rules('university_id', 'University', 'required');
		$this->form_validation->set_rules('team_name', 'Team name', 'required');
		if ($this->form_validation->run()){
			$team_leader = $this->input->post('team_leader');
			$university_id = $this->input->post('university_id');
			$name = $this->input->post('team_name');

			$data_team = array(
				'team_leader'		=>	$this->input->post('team_leader'),
				'university_id'	=>	$this->input->post('university_id'),
				'name'	=>	$this->input->post('team_name')
			);

			$team_id = $this->team->register_team($data_team);

			$data_member = array(
				'team_id'		=>	$team_id,
				'student_id'	=>	$this->input->post('team_leader')
			);
			
			$id = $this->team_member->register_member($data_member);

			if ($id > 0){
				redirect('/user/my_account');
			}
		}else{
			$this->my_account();
		}
	}

	public function contact_us(){
		$this->load->view('contact_us');
	}

	public function validate_email(){
		$this->form_validation->set_rules('full_name', 'Full name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		if ($this->form_validation->run()){
			$data['send_email'] = array(
				'name'			=>	$this->input->post('full_name'),
				'email'			=>	$this->input->post('email'),
				'subject'		=>	$this->input->post('message'),
				'message'		=>	$this->input->post('subject'),
			);

		$send = $this->sendEmail($data['send_email']);

		}else{
			$this->contact_us();
		}
	}

	private function sendEmail($mailData){
        // Load the email library
        $this->load->library('email');
        
        // Mail config
        $to = 'terkeabt@gmail.com';
        $from = 'codexworld@gmail.com';
        $fromName = 'CodexWorld';
        $mailSubject = 'Contact Request Submitted by '.$mailData['name'];
        
        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Subject: </b>'.$mailData['subject'].'</p>
            <p><b>Message: </b>'.$mailData['message'].'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        return $this->email->send()?true:false;
    }

}
