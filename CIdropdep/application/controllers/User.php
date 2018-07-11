<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');         // load base_url 
    $this->load->model('MyModel');   //load model 
    $data['brands'] = $this->MyModel->getBrand();     // get brands 
    $this->load->view('user_view',$data);       // load view 
  }

  public function getType()
  { 
    $postData = $this->input->post();   // POST data 
    $this->load->model('MyModel');   // load model 
    $data = $this->MyModel->getType($postData);    // get data 
    echo json_encode($data); 
  }

  public function getModel()
  { 
    $postData = $this->input->post(); // POST data 
    $this->load->model('MyModel');   // load model 
    $data = $this->MyModel->getModel($postData);    // get data 
    echo json_encode($data); 
  }

}
?>