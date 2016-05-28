<?php

class Page extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        
	}

	function index()
	{
		$data='';
		
		$this->show_view('pages/main', $data);
    }
		
		
	
	
	
    
    
    
}

?>