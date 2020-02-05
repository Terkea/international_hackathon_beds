<?php

class University extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function register_university($data){
                $this->db->insert('university', $data);
                return $this->db->insert_id();
        }

        public function get_universities(){
                $query = $this->db->get('university');
		if ($query->num_rows()>0) {
			return $query->result_array();
		}
        }
}

