<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scenarious extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('scenario');

    }

    public function index(){
        $data['scenarious'] = $this->scenario->get_scenarious();
        $this->load->view('scenarious', $data);
    }
}
