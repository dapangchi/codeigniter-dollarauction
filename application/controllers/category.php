<?php

class Category extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
        
	}
	
	function index()
	{
		$this->view();	
	}

	function view()
	{
		
		$category=$this->input->post('id');
		$this->db->select('*');
		$this->db->from(db_prefix.'lotteries');
		$this->db->where('category',$category);
		$query = $this->db->get();
		$data['lotteries']=$query->result();
		
		
		echo $this->load->view('pages/category', $data,TRUE);
		//$ouput=$this->show_view('pages/category', $data);
		//$this->set_output($ouput);
    }
		
		
	
	
	
    
    
    
}

?>