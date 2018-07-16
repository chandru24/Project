<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("modelForm");
        
    }

    public function index() {
        $this->load->view('demo_view');
    }
    
    public function saveForm()
    { 
        $this->modelForm->savedata();
        $this->load->view("demo_view");
    }

}

?>
