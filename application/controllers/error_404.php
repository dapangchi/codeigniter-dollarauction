<?php

class Error_404 extends CI_Controller 
{
    public function __construct()   {
            parent::__construct();  
    }
    public function index() 
    {
    
    error_reporting(0);
        $this->output->set_status_header('404');
        //$data['content'] = 'error_404'; // View name
		$this->load->view('templates/error');//,$data);//loading in my template
    }
}

?>