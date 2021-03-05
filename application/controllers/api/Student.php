<?php
require APPPATH.'libraries/REST_Controller.php';
class Student extends REST_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index_get(){
        $data = $this->Mcanbo->canbo_get();
        if($data){
            $response = array(
                'status' => 1,
                'message' => 'Can bo found',
                'data' => $data
            );
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Can bo not found',
                'data' => $data
            );
            $this->response($response, REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_post(){

        $data = json_decode(file_get_contents('php://input'), true);

        if(isset($data)){
            $arr_insert = array(
                'do' => $data['data'],
            );

            if($this->Mcanbo->dvhv_post($arr_insert)){
                $this->response(array(
                    'status' => 1,
                    'message' => 'DVHV has been created'
                ), REST_Controller::HTTP_OK);
            } else {
                $this->response(array(
                    'status' => 0,
                    'message' => 'DVHV has been created'
                ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        } else {
            $this->response(array(
                'status' => 0,
                'message' => 'All field require'
            ), REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_put(){
        echo 'This is put method';
    }
    public function index_delete($id){
        if($id){
          if($this->Mcanbo->dvhv_delete($id)){
              $this->response(array(
                  'status' => 1,
                  'message' => 'DVHV has been deleted'
              ), REST_Controller::HTTP_OK);
          } else {
              $this->response(array(
                  'status' => 0,
                  'message' => 'Need id'
              ), REST_Controller::HTTP_NOT_FOUND);
          }
        }
    }
    public function index_patch(){
        echo 'This is patch method';
    }
}
