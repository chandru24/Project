<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class FormC extends CI_Controller {  

    public function __construct()  
    {  
        parent::__construct();  
        $this->load->model("Bmodel", "a");  
    }  
      
    public function index()  
    {  
        $this->data['posts'] = $this->a->fetchtable();
		$this->load->view('myform',$this->data);
    }  

    function postdata()  
    { 
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('descr', 'Description', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->data['posts'] = $this->a->fetchtable();
            $this->load->view('myform',$this->data); 
        }
        else
        {
            $this->a->savedata();
            redirect(base_url());
        }

    }  

    function editdata()  
    {  
        $rid=$this->input->get('id');
        $data['post']=$this->a->editdata($rid);
        $this->load->view("update",$data);
    }

    public function updatedata()
    {   
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('descr', 'Description', 'required');
        
        if ($this->form_validation->run() == TRUE)
        {
            $title=$this->input->post('title');
            $descr=$this->input->post('descr');
            $id=$this->input->post('id');
            $this->a->updatedata($title,$descr,$id);
            redirect(base_url());
        }
        else
        {
            $rid=$this->input->post('id');
            $data['post']=$this->a->editdata($rid);
            $this->load->view('update',$data); 
        }
        
    }

    public function deletedata()
    {
        $rid=$this->input->get('id');
        $this->a->deletedata($rid);
        redirect(base_url());
    }
    
}  
?>  