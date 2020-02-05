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

        public function get_by_email($email){
                $this->db->where('email', $email);
                $query = $this->db->get('student');

                if($query->num_rows() > 0){
                        return $query->result_object();
                }
                else{
                        return false;
                }
        }
}

