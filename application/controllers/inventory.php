<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
    public function index() {
        $this->load->view('invetory');
    }
    public function getProducts(){
        $this->load->model('inventoryModel');
        $products=$this->inventoryModel->display();
        $data=array();

        $data['products']= $products;
       


        $this->load->view('inventory',$data);
        
    }
}

?>