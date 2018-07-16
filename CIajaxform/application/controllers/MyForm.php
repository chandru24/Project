<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyForm extends CI_Controller {

    public function __construct()  
    {  
        parent::__construct();  
        $this->load->model("modelForm");  
    }

	public function index()
	{
        $this->load->view('user_view');
    }
    
    public function loadForm()
    { 
        $this->load->view('load_form');
    }

    

    function postdata()  
    { 
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            
                $this->load->view('load_head');
                $this->load->view("load_form");  
        }
        else
        {
            $this->modelForm->savedata();
            $this->load->view("user_view");
        }

    }
}