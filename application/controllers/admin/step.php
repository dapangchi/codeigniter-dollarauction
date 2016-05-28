<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Step extends Admin_Controller {
   
    protected $side = 'left'; 
    protected $menu = 'step';
    protected $submenu = '';
    protected $pagetitle = 'Step By Step';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('step_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $this->include_datatable_assets(array(4));
        
        $steps = $this->step_model
            ->order_by('sort')
            ->order_by('created_at')
            ->find_all_empty_array();
        Template::set('rows', $steps);
         
        $this->set_view('step/index');
        $this->render();
    }
    
    public function create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info())
            {
                Template::set_message('New step is created.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('step'));
                }
                else
                {
                    redirect(admin_uri('step/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $this->set_view('step/create');
        $this->render();    
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                Template::set_message('Step content is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('step'));
                }
                else
                {
                    redirect(admin_uri('step/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $row = $this->step_model->find($id);
        Template::set('row', $row);
        
        $this->set_view('step/edit');
        $this->render();    
    }
    
    public function delete($id)
    {
        if($this->step_model->delete($id))
        {
            Template::set_message("One of step content is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('step'));
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id=0)
    {        
        $this->form_validation->set_rules('title', 'Title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('sort', 'Sort', 'trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('content', 'Content', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'title' => $this->input->post('title'),
            'sort'  => $this->input->post('sort'),
            'content'  => $this->input->post('content')
        ]; 
        
        if($id == 0)
        {
            return $this->step_model->insert($data);
        }
        else
        {
            return $this->step_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */