<?php
class Mcanbo extends CI_Model{
    public function canbo_get(){
        return $this->db->get('todo')->result_array();
    }
    public function dvhv_post($data){
        return $this->db->insert('todo', $data);
    }
    public function dvhv_delete($id){
      $this->db->where('id',$id);
      return $this->db->delete('todo');
    }
}
