<?php
    class Cfirst extends CI_Controller{
        public function __contruct(){
            parent::__contruct();
        }

        public function index(){
            $this->load->model('Mcanbo');
            $data['data'] = $this->Mcanbo->canbo_get();
            $this->load->view('vfirst',$data);
            // print_r($data);
            // exit;
            // $this->load->view("Vfirst");
        }

    }