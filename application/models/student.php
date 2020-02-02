<?php

class Student extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function register_student($data){
                $this->db->insert('student', $data);
                return $this->db->insert_id();
        }
}

