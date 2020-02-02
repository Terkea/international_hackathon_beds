<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Uni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('university');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('register_uni');
	}
}
