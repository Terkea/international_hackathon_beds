<?php

class Team extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_by_university_id($id){
                $this->db->where('university_id', $id);
                $query = $this->db->get('team');

                if($query->num_rows() > 0){
                        return $query->result_object();
                }
                else{
                        return false;
                }
        }

        public function get_by_id($id){
                $this->db->where('id', $id);
                $query = $this->db->get('team');

                if($query->num_rows() > 0){
                        return $query->result_object();
                }
                else{
                        return false;
                }
        }

        public function register_team($data){
                $this->db->insert('team', $data);
                return $this->db->insert_id();
        }
}

