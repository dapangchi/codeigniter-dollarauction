<?php

// stworzyć MY_controller wraz z metodą show_view
class MY_Controller extends CI_Controller
{

	function __construct()
	{	 error_reporting(-1);
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('session');
		
		if(!$this->input->cookie('lang', TRUE))
		{
			$cookie = array('name' => 'lang','value' => '1',  'expire' => '86500');
			$this->input->set_cookie($cookie);
			//$lang_id = 1;
			
			redirect(current_url());
		}
		else
		{
			//$lang_id = $this->input->cookie('lang');
		}
		
		$lang_id = $this->input->cookie('lang');
		
		if($lang_id == 1)
		{
			$this->lang->load('en', 'site');
		}
		elseif($lang_id == 2)
		{
			$this->lang->load('es', 'site');
		}
		elseif($lang_id == 3)
		{
			$this->lang->load('fr', 'site');
		}
		elseif($lang_id == 4)
		{
			$this->lang->load('pl', 'site');
		}
		else
			{
			$this->lang->load('en', 'site');
			}
	}

	function show_view($view, $data = null)
  {
  	
		
		$this->db->select('*');
		$this->db->from(db_prefix.'prize_categories');
		$query = $this->db->get();
		$menu_data['categories'] = $query->result();
        
  
		$this->load->view('templates/main_header');
		if(!empty($data))
		{
			$this->load->view($view, $data);
		}
		else
		{
			$this->load->view($view);
		}
		$this->load->view('templates/menu',$menu_data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/main_footer');
  }
  
/*

⊂_ヽ
　 ＼＼
　　 ＼( ͡ ° ͜ʖ ͡° )
　　　 >　⌒ヽ
 　　　/ 　 へ＼
　　 /　　/　＼＼
　　 ﾚ　ノ　　 ヽ_つ 
　　/　/
　 /　/|
　(　(ヽ
　|　|、＼
　| 丿 ＼ ⌒)
　| |　　) /
`ノ )　　Lﾉ
(_／


*/
  

}

?>