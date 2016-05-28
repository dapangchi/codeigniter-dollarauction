<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community extends Admin_Controller {
    
    protected $side = 'right';
    protected $menu = 'community';
    protected $submenu = '';
    protected $pagetitle = 'Global Community Impact';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('block_model');
        $this->load->model('community_site_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    
    public function links()
    {
        $this->include_datatable_assets(array(5));
        
        $links = $this->community_site_model
            ->order_by('sort')
            ->find_all_empty_array();
        Template::set('rows', $links);
        
        $this->submenu = 'links';
        $this->pagetitle .= ' - Links';
        
        $this->set_view('community/links');
        $this->render();
    }
    
    public function link_create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id=$this->_save_link())
            {
                Template::set_message('New link is created.', 'success');
                redirect(admin_uri('community/links'));
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('community/links'));
                }
                else
                {
                    redirect(admin_uri('community/link_edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $this->submenu = 'links';
        $this->pagetitle .= ' - Create Link';
        
        $this->set_view('community/link_create');
        $this->render();
    }
    
    public function link_edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_link($id))
            {
                Template::set_message('One of link is updated.', 'success');

                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('community/links'));
                }
                else
                {
                    redirect($this->uri->uri_string());
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $row = $this->community_site_model
            ->find($id);
        Template::set('row', $row);
        
        $this->submenu = 'links';
        $this->pagetitle .= ' - Edit Link';
        
        $this->set_view('community/link_edit');
        $this->render();
    }
    
    public function link_delete($id)
    {
        if($this->community_site_model->delete($id))
        {
            Template::set_message("One of testimonial is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('community/links'));
    }
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    ///////////////////////////////////////////////////////////////////// 
        
    private function _save_link($id=0)
    {
        $this->form_validation->set_rules('link-name', 'Name', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('link-url', 'Link', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('link-sort', 'Sort', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'name'  => $this->input->post('link-name'),
            'link'  => $this->input->post('link-url'),
            'sort'  => $this->input->post('link-sort')
        ]; 
        
        if($id == 0)
        {
            return $this->community_site_model->insert($data);
        }
        else
        {
            return $this->community_site_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */