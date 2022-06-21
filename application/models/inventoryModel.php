
<?php
class InventoryModel extends CI_Model{
    function display(){
        
        return $products=$this->db->get('products')->result_array();
    }
    function create($data){

        return $this->db->insert('inventory', $data);
    }


}
?>