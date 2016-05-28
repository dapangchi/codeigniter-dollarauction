<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends Admin_Controller {
   
    protected $side = 'right'; 
    protected $menu = 'testimonial';
    protected $submenu = '';
    protected $pagetitle = 'Testimonial';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('testimonial_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $this->include_datatable_assets(array(1,6));
        
        $testimonials = $this->testimonial_model
            ->order_by('tstm_created_at', 'desc')
            ->find_all_empty_array();
        Template::set('rows', $testimonials);
         
        $this->set_view('testimonial/index');
        $this->render();
    }
    
    public function create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info())
            {
                Template::set_message('Testimonial is created.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('testimonial'));
                }
                else
                {
                    redirect(admin_uri('testimonial/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/testimonial_avatar.js');
        
        $this->set_view('testimonial/create');
        $this->render();    
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                Template::set_message('Testimonial is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('testimonial'));
                }
                else
                {
                    redirect(admin_uri('testimonial/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/testimonial_avatar.js');
        
        $row = $this->testimonial_model->find($id);
        Template::set('row', $row);
        
        $this->set_view('testimonial/edit');
        $this->render();    
    }
    
    public function delete($id)
    {
        if($this->testimonial_model->delete($id))
        {
            Template::set_message("One of testimonial is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('testimonial'));
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id=0)
    {        
        $this->form_validation->set_rules('tstm-name', 'Name', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('tstm-date', 'Date', 'required|trim|valid_date|xss_clean|strip_tags');
        $this->form_validation->set_rules('tstm-city', 'City', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('tstm-content', 'Content', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'tstm_name'     => $this->input->post('tstm-name'),
            'tstm_date'  => $this->input->post('tstm-date'),
            'tstm_city'     => $this->input->post('tstm-city'),
            'tstm_content'  => $this->input->post('tstm-content')
        ]; 
        
        //if avatar
        if(isset($_FILES['tstm-avatar']) && $_FILES['tstm-avatar']['name'] != '')
        {
            $result = $this->upload_image('tstm-avatar', 'testimonial');
            if($result['status'])
            {
                $data['tstm_avatar'] = $result['image_name'];
            }            
            else
            {
                //$this->form_validation->set_message('tstm-avatar', $result['error'][0]);
                Template::set('tstm_avatar_message', $result['error'][0]);
                return false;
            }
        }  
        
        if($id == 0)
        {
            return $this->testimonial_model->insert($data);
        }
        else
        {
            $data['tstm_created_by'] = $this->current_user->id;
            
            return $this->testimonial_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */