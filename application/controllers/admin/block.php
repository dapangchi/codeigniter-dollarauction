<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Block extends Admin_Controller {
    
    protected $menu = 'block';
    protected $submenu = '';
    protected $pagetitle = 'Block';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('block_model');
        
        Assets::add_css('js/plugins/summernote/summernote.min.css');
        Assets::add_css('js/plugins/summernote/summernote-bs3.min.css');
        Assets::add_js('js/plugins/summernote/summernote.min.js');
        Assets::add_js('js/pages/block.js');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function privacy()
    {
        $this->side = 'right';
        $this->submenu = 'privacy';
        $this->pagetitle = 'Privacy Policy';
        $this->_edit('privacy-policy');
    }
    
    public function gambling()
    {
        $this->side = 'right';
        $this->submenu = 'gambling';
        $this->pagetitle = 'Gambling Addiction';
        $this->_edit('gambling-addiction');
    }
    
    public function stay_connect1()
    {
        $this->side = 'right';
        $this->menu = 'connected';
        $this->submenu = 'stay_connect1';
        $this->pagetitle = 'Stay Connected - Block1';
        $this->_edit('stay-connect1');
    }
    
    public function stay_connect2()
    {
        $this->side = 'right';
        $this->menu = 'connected';
        $this->submenu = 'stay_connect2';
        $this->pagetitle = 'Stay Connected - Block2';
        $this->_edit('stay-connect2');
    }
    
    public function global_community_impact()
    {
        $this->side = 'right';
        $this->menu = 'community';
        $this->submenu = 'content';
        $this->pagetitle = 'Global Community Impact - Content';
        $this->_edit('global-community-impact');
    }
    
    public function local_community_impact()
    {
        $this->side = 'right';
        $this->menu = 'local';
        $this->submenu = 'local_content';
        $this->pagetitle = 'Local Community Impact - Content';
        $this->_edit('local-community-impact');
    }
    
    //left menu 
    public function vision()
    {
        $this->side = 'left';
        $this->menu = 'vision';
        $this->pagetitle = 'Vision';
        $this->_edit('vision');
    }
    
    public function mission()
    {
        $this->side = 'left';
        $this->menu = 'mission';
        $this->pagetitle = 'Mission';
        $this->_edit('mission');
    }
    
    public function dream()
    {
        $this->side = 'left';
        $this->menu = 'dream';
        $this->pagetitle = 'Dream';
        $this->_edit('dream');
    }
    
    public function terms()
    {
        $this->side = 'left';
        $this->menu = 'terms';
        $this->pagetitle = 'Terms of Service';
        $this->_edit('terms');
    }
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _edit($slug)
    {
        $row = $this->block_model->find_or_create($slug);
        Template::set('row', $row);
        
        if($this->input->post('btn-save'))
        {
            if($this->_save_info($row->blk_id))
            {
                Template::set_message('Page is updated.', 'success');
                redirect($this->uri->uri_string());
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
         
        $this->set_view('block/edit');
        $this->render();
    }
    
    private function _save_info($id=0)
    {
        $this->form_validation->set_rules('blk-title', 'Title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('blk-content', 'Content', 'required');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'blk_title' => $this->input->post('blk-title'),
            'blk_content' => $this->input->post('blk-content')
        ]; 
        
        return $this->block_model->update($id, $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */