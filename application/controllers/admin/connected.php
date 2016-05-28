<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connected extends Admin_Controller {
    
    protected $side = 'right';
    protected $menu = 'connected';
    protected $submenu = '';
    protected $pagetitle = 'Stay Connected';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('setting_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function links()
    {
        if($this->input->post('btn-save'))
        {
            if($this->_save_links())
            {
                Template::set_message('Social links are updated.', 'success');
                redirect($this->uri->uri_string());
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        // Read our current settings
        $settings = $this->settings_lib->find_all_by('module', 'social');
        Template::set('settings', $settings);
        
        $this->pagetitle .= ' - Social Links';
        $this->submenu = 'social';
        $this->set_view('connected/links');
        $this->render();
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_links()
    {
        $data = array(
            array('name' => 'social_facebook', 'value' => $this->_prep_url($this->input->post('facebook'))),
            array('name' => 'social_google', 'value' => $this->_prep_url($this->input->post('google'))),
            array('name' => 'social_linkedin', 'value' => $this->_prep_url($this->input->post('linkedin'))),
            array('name' => 'social_twitter', 'value' => $this->_prep_url($this->input->post('twitter'))),
            array('name' => 'social_pinterest', 'value' => $this->_prep_url($this->input->post('pinterest'))),
            array('name' => 'social_youtube', 'value' => $this->_prep_url($this->input->post('youtube'))),
        );

        // save the settings to the DB
        return $this->setting_model->update_batch($data, 'name');
    }
    
    private function _prep_url($str)
    {
        if($str == '' || $str == '#') return $str;
        
        return prep_url($str);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */