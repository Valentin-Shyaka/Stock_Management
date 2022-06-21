<?php
class OutgoingModel extends CI_Model{
    function display(){
        
        return $outgoings=$this->db->get('outgoing')->result_array();
    }
    function create($data){

        return $this->db->insert('outgoing', $data);
    }
    function delete($id){
        return $this->db->delete('outgoing',['outgoingId'=>$id]);
    }

}



?>