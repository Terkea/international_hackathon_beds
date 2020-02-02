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
}

