<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reason extends Admin_Controller {
   
    protected $side = 'left'; 
    protected $menu = 'reason';
    protected $submenu = '';
    protected $pagetitle = '10 Reasons';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('reason_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $reasons = $this->reason_model->find_all();
        Template::set('rows', $reasons);
        
        $this->set_view('reason/index');
        $this->render();
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                Template::set_message('Reason content is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('reason'));
                }
                else
                {
                    redirect(admin_uri('reason/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        $row = $this->reason_model->find_or_create($id);
        Template::set('row', $row);
        
        $no_str = array('1st', '2nd', '3rd', '4th', '4th', '5th', '7th', '8th', '9th', '10th');
        
        $this->pagetitle = $this->pagetitle . ' - ' . (isset($no_str[$id-1])?$no_str[$id-1]:$no_str[0]);
        $this->set_view('reason/edit');
        $this->render();    
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id)
    {        
        //$this->form_validation->set_rules('title', 'Title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('content', 'Content', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            //'title' => $this->input->post('title'),
            'content'  => $this->input->post('content')
        ];
        
        return $this->reason_model->update($id, $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */