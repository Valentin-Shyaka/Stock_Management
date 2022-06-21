<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Outgoing extends CI_Controller {
    public function index() {
        $this->load->database();
        $this->load->view('outgoing');
    }
    public function getOutgoing(){
        $this->load->model('outgoingModel');
        $outgoing=$this->outgoingModel->display();
        $data=array();

        $data['outgoing']=$outgoing;

        $this->load->view('viewOutgoing',$data);
    }
    public function createoutgoing(){
        $this->load->model('outgoingModel');
        $this->load->library('form_validation');

        // $this->form_validation-

        $data = array(
            'productId' => $this->input->post('productId'),
            'quantity' => $this->input->post('quantity')
            
           
        );

        $this->outgoingModel->create($data);
    }
    public function delete($id){
        $this->load->model('outgoingModel');
        $this->outgoingModel->delete($id);
        redirect(base_url('/outgoing/getOutgoing'));
    }
    
}

?>