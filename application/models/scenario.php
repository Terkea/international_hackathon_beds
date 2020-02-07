<?php

class Scenario extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_scenarious(){
        $query = $this->db->get('scenarious');
		if ($query->num_rows()>0) {
			return $query->result_array();
		}
    }
}
