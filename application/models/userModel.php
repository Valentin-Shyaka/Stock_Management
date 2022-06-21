<?php
class UserModel extends CI_Model{
    function display(){
        
        return $users=$this->db->get('users')->result_array();
    }
    function create($data){

        return $this->db->insert('users', $data);
    }
    function edit($id){
        $query=$this->db->get_where('users',['userId'=>$id]);
        return $query->row();
       
    }

    function update($data,$id){
        $this->db->update('users',$data,['userId'=>$id]);
       
    }
    function delete($id){
        return $this->db->delete('users',['userId'=>$id]);
    }
}

?>