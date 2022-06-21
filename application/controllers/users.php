<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function index() {
        $this->load->database();
        $this->load->view('viewUsers');
    }
    public function getUsers(){
        $this->load->model('userModel');
        $user=$this->userModel->display();
        $data=array();

        $data['users']=$user;

        $this->load->view('viewUsers',$data);
    }
    public function delete($id){
        $this->load->model('userModel');
        $this->userModel->delete($id);
        redirect(base_url('/users/getUsers'));
    }
    
}

?>