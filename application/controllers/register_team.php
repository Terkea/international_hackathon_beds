<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Team extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('team');
	}
	
	public function index()
	{
		$this->load->view('register_team');
	}
}
