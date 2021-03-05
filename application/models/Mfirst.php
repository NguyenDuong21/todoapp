<?php
    class Mfirst extends CI_Model{
        public function getA(){
            $res = $this->db->get("sinhvien")->result_array();
            return $res;
        }
    }
