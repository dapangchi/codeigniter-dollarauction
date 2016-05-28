<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends Admin_Controller {
   
    protected $side = 'left'; 
    protected $menu = 'faq';
    protected $submenu = '';
    protected $pagetitle = 'Frequently Ask Questions';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('question_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $this->include_datatable_assets(array(3));
        
        $questions = $this->question_model
            ->order_by('created_at', 'desc')
            ->find_all_empty_array();
        Template::set('rows', $questions);
         
        $this->set_view('faq/index');
        $this->render();
    }
    
    public function create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info())
            {
                Template::set_message('New question is created.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('faq'));
                }
                else
                {
                    redirect(admin_uri('faq/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $this->set_view('faq/create');
        $this->render();    
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                Template::set_message('Question content is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('faq'));
                }
                else
                {
                    redirect(admin_uri('faq/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $row = $this->question_model->find($id);
        Template::set('row', $row);
        
        $this->set_view('faq/edit');
        $this->render();    
    }
    
    public function delete($id)
    {
        if($this->question_model->delete($id))
        {
            Template::set_message("One of question content is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('faq'));
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id=0)
    {        
        $this->form_validation->set_rules('title', 'Title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('content', 'Content', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'title' => $this->input->post('title'),
            'content'  => $this->input->post('content')
        ]; 
        
        if($id == 0)
        {
            return $this->question_model->insert($data);
        }
        else
        {
            return $this->question_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */