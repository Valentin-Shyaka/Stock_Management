<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function index() {
        $this->load->database();
        $this->load->view('product');
        
    }
    public function getProducts(){
        $this->load->model('productModel');
        $product=$this->productModel->display();
        $data=array();

        $data['products']=$product;

        $this->load->view('viewProducts',$data);
    }
    public function createProduct()
    {
        $this->load->model('productModel');
        $this->load->library('form_validation');
        

        // $this->form_validation-

        $data = array(
            'product_Name' => $this->input->post('productname'),
            'brand' => $this->input->post('brand'),
            'supplier_phone' => $this->input->post('supplier_phone'),
            'supplier' => $this->input->post('supplier'),
           
        );

        $this->productModel->create($data);
    }
    function edit($id){
        $this->load->model('productModel');
        $data['product'] = $this->productModel->edit($id);
        $this->load->view('productEdit',$data);

    }
    public function updateProduct($id){

        
        $data=[
            'product_Name' => $this->input->post('productname'),
            'brand' => $this->input->post('brand'),
            'supplier_phone' => $this->input->post('supplier_phone'),
            'supplier' => $this->input->post('supplier'),
            
            

        ];
       
        $this->load->model('productModel');
        $this->productModel->update($data,$id);
        redirect(base_url('products/getProducts'));

        

       

    }
    public function delete($id){
        $this->load->model('productModel');
        $this->productModel->delete($id);
        redirect(base_url('/products/getProducts'));
    }
    function print()
    {
        $this->load->library('FPDF');
        $products = $this->db->get('products')->result_array();
        $fpdf = new FPDF();

        $fpdf->AddPage();

        $fpdf->SetFont('arial', '', 12);
        $fpdf->Cell(180, 10, "Product Details", 1, 1, 'C');
        $fpdf->Cell(45, 10, "ProductName", 1, 0);
        $fpdf->Cell(45, 10, "Brand", 1, 0);
        $fpdf->Cell(45, 10, "SupplierPhone", 1, 0);
        $fpdf->Cell(45, 10, "Supplier", 1, 0);

        foreach ($products as $product) {
            $fpdf->Ln();
            $fpdf->SetFont('arial', '', 9);
            $fpdf->Cell(45, 10, $product['product_Name'], 1, 0);
            $fpdf->Cell(45, 10, $product['brand'], 1, 0);
            $fpdf->Cell(45, 10, $product['supplier_phone'], 1, 0);
            $fpdf->Cell(45, 10, $product['supplier'], 1, 0);
        }

        $fpdf->Output();
    }
}


?>