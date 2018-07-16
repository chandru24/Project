<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class modelForm extends CI_Model {  
  
    function __construct()  
    {  
        parent::__construct();  
    }     
        
    function savedata()
    {
      $fname=$this->input->post('firstname');
      $lname=$this->input->post('lastname');
      $email=$this->input->post('email');
      $pwd=$this->input->post('password');
      $data = array('fname' => $fname,'lname'=>$lname,'email'=>$email,'pwd'=>$pwd);
      $this->db->insert('table4',$data);
    }
}
?>