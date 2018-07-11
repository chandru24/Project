<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyModel extends CI_Model
{
   function getBrand()       // Get brand
   {
    $response = array();
    $this->db->select('*');
    $q = $this->db->get('brand');
    $response = $q->result_array();
    return $response;
   }

  function getType($postData)        // Get Type
  {
    $response = array();
    $this->db->select('id,tname');      // Select record
    $this->db->where('brand', $postData['brand']);
    $q = $this->db->get('type');  
    $response = $q->result_array();
    return $response;
  }

  
  function getModel($postData)       // Get Model
  {
    $response = array();
    $this->db->select('id,mname');      // Select record
    $this->db->where('type', $postData['type']);
    $q = $this->db->get('model');
    $response = $q->result_array();
    return $response;
  }

}
?>