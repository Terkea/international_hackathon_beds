<?php

class Team_Member extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function check_user_team($user_id){
                $this->db->where('student_id', $user_id);
                $query = $this->db->get('team_member');

                if($query->num_rows() > 0){
                        return $query->result_object();
                }
                else{
                        return false;
                }
        }
}

