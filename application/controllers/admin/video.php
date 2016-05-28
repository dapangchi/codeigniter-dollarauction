<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends Admin_Controller {
    
    protected $side = 'right';
    protected $menu = 'video';
    protected $submenu = '';
    protected $pagetitle = 'Video';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('video_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $this->include_datatable_assets(array(1,4));
        
        $videos = $this->video_model
            ->order_by('vdo_created_at', 'desc')
            ->find_all_empty_array();
        Template::set('rows', $videos);
         
        $this->set_view('video/index');
        $this->render();
    }
    
    public function create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info())
            {
                Template::set_message('Video is created.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('video'));
                }
                else
                {
                    redirect(admin_uri('video/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/video_image.js');
        
        $this->set_view('video/create');
        $this->render();    
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                Template::set_message('Video is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('video'));
                }
                else
                {
                    redirect(admin_uri('video/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/video_image.js');
        
        $row = $this->video_model->find($id);
        Template::set('row', $row);
        
        $this->set_view('video/edit');
        $this->render();    
    }
    
    public function delete($id)
    {
        if($this->video_model->delete($id))
        {
            Template::set_message("One of video is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('video'));
    }
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id=0)
    {
        $this->form_validation->set_rules('vdo-title', 'Title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('vdo-link', 'Link', 'required|trim|xss_clean|strip_tags');

        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        if($id == 0) //insert
        {
            if(!isset($_FILES['vdo-image']) || $_FILES['vdo-image']['name'] == '')
            {
                Template::set('vdo_image_message', 'Image is required.');
                return FALSE;
            }
        }
        
        $data = [
            'vdo_title' => $this->input->post('vdo-title'),
            'vdo_link'  => prep_url($this->input->post('vdo-link'))
        ]; 
        
        //if video image
        if(isset($_FILES['vdo-image']) && $_FILES['vdo-image']['name'] != '')
        {
            $result = $this->upload_image('vdo-image', 'video');
            if($result['status'])
            {
                $data['vdo_image'] = $result['image_name'];
            }            
            else
            {
                Template::set('vdo_image_message', $result['error'][0]);
                return FALSE;
            }  
        }
        
        if($id == 0)
        {
            return $this->video_model->insert($data);
        }
        else
        {
            $data['vdo_created_by'] = $this->current_user->id;
            
            return $this->video_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */