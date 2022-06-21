<?php
class ProductModel extends CI_Model
{
    function display()
    {

        return $products = $this->db->get('products')->result_array();
    }
    function create($data)
    {

        return $this->db->insert('products', $data);
    }
    function edit($id)
    {
        $query = $this->db->get_where('products', ['productId' => $id]);
        return $query->row();
    }

    function update($data, $id)
    {
        $this->db->update('products', $data, ['productId' => $id]);
    }
    function delete($id)
    {
        return $this->db->delete('products', ['productId' => $id]);
    }
    
}
