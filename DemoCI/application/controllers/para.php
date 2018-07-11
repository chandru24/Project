<?php  
if(!defined('BASEPATH')) exit('No direct script access allowed');   
class Para extends CI_Controller{  
// declaring variables  
var $name;  
    function __construct(){  
    parent::__construct();  
// passing value  
$this->name="CodeIgniter";  
}  
function tut()  
{  
$data['name']=$this->name;   
// define variable sent to views  
$this->load->view('para_view',$data);  
 }  
}  
?>  