<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Bmodel extends CI_Model {  
  
    function __construct()  
    {  
        parent::__construct();  
    }     
        
    function savedata()
    {
      $title=$this->input->post('title');
      $descr=$this->input->post('descr');
      $data = array('Title' => $title,'Descr'=>$descr);
      $this->db->insert('table1',$data);
    }

    function fetchtable()  
    {  
        $query = $this->db->get('table1');  
        return $query->result();  
    }  

    function editdata($rid)  
    {  
        $this->db->from('table1');
        $this->db->where('id',$rid);
        $query=$this->db->get();
        return $query->result();  
    }

    public function updatedata($title,$descr,$id)
    {
        $data = array('title' =>$title ,'descr' =>$descr);
        $this->db->update('table1',$data,array('id' => $id));
        return true;
    }

    public function deletedata($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('table1');
        return true;
    }
       
}  
?>  