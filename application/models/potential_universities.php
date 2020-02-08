<?php

class Potential_universities extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_universities(){
            $query = $this->db->get('university');
                if ($query->num_rows()>0) {
                    return $query->result_array();
                }
        }
}

