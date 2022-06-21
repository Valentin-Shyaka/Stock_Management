<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function index()
    {
        $this->load->database();
        $this->load->view('signup');
    }
     public function createUser()
    {
        $this->load->model('userModel');
        $this->load->library('form_validation');

        // $this->form_validation-

        $data = array(
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'telephone' => $this->input->post('telephone'),
            'gender' => $this->input->post('gender'),
            'nationality' => $this->input->post('nationality'), 
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->userModel->create($data);
        redirect(base_url('Login/'));
    }
    function edit($id){
        $this->load->model('userModel');
        $data['user'] = $this->userModel->edit($id);
        $this->load->view('userEdit',$data);

    }
    public function updateUser($id){

        
        $data=[
            'firstName' => $this->input->post('firstname'),
            'lastName' => $this->input->post('lastname'),
            'telephone' => $this->input->post('telephone'),
            'gender' => $this->input->post('gender'),
            'nationality' => $this->input->post('nationality'), 
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            

        ];
       
        $this->load->model('userModel');
        $this->userModel->update($data,$id);
        redirect(base_url('Login/'));

        

       

    }
}
