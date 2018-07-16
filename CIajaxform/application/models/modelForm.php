<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class modelForm extends CI_Model {  
  
    function __construct()  
    {  
        parent::__construct();  
    }     
        
    function savedata()
    {
      $fname=$this->input->post('fname');
      $lname=$this->input->post('lname');
      $data = array('fname' => $fname,'lname'=>$lname);
      $this->db->insert('table3',$data);
    }
}
?>