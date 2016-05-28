<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends Admin_Controller {
    
    protected $side = 'right';
    protected $menu = 'promotion';
    protected $submenu = '';
    protected $pagetitle = 'Deals and Promotions';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('slide_model');
        $this->load->model('slide_image_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        $this->include_datatable_assets(array(3));
        
        $slides = $this->slide_model
            ->find_all_empty_array();
        Template::set('rows', $slides);
         
        $this->set_view('promotion/index');
        $this->render();
    }
    
    public function create()
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info())
            {
                $this->_process_images($id); 
                
                Template::set_message('Promotion is created.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('promotion'));
                }
                else
                {
                    redirect(admin_uri('promotion/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_css('js/plugins/uploadify/uploadify.css');
        Assets::add_js('js/plugins/uploadify/jquery.uploadify.js');
        Assets::add_js('js/pages/promotion.js');
        
        $this->set_view('promotion/create');
        $this->render();    
    }
    
    public function edit($id)
    {
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id))
            {
                $this->_process_images($id); 
                
                Template::set_message('Promotion is updated.', 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('promotion'));
                }
                else
                {
                    redirect(admin_uri('promotion/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_css('js/plugins/uploadify/uploadify.css');
        Assets::add_js('js/plugins/uploadify/jquery.uploadify.js');
        Assets::add_js('js/pages/promotion.js');
        
        $row = $this->slide_model->find($id);
        Template::set('row', $row);
        
        $images = $this->slide_image_model
            ->where('slide_id', $id)
            ->order_by('sort')
            ->find_all_empty_array();
        Template::set('images', $images);
        
        $this->set_view('promotion/edit');
        $this->render();    
    }
    
    public function delete($id)
    {
        if($this->slide_model->delete($id))
        {
            Template::set_message("One of promotion is deleted from system.", 'success');
        }
        else
        {
            Template::set_message('There is an error in saving.', 'danger');
        }
        
        redirect(admin_uri('promotion'));
    }
    
    /////////////////////////////////////////////////////////////////////
    // AJAX METHODS
    /////////////////////////////////////////////////////////////////////
    
    
    /////////////////////////////////////////////////////////////////////
    // PRIVATE METHODS
    /////////////////////////////////////////////////////////////////////
    private function _save_info($id=0)
    {
        $this->form_validation->set_rules('title', 'title', 'required|trim|xss_clean|strip_tags');        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'title' => $this->input->post('title'),
            //'url' => prep_url($this->input->post('url')),
        ]; 
        
        if($id == 0)
        {
            return $this->slide_model->insert($data);
        }
        else
        {
            return $this->slide_model->update($id, $data);
        }
        
        return FALSE;
    }
    
    public function _process_images($slide_id)
    {
        $jdata = json_decode($this->input->post('image_data'));
        foreach($jdata as $d)
        {
            if($d->type == 'new')
            {
                $upload_path = UPLOAD_PATH . '/';
                
                // Move images to right place
                if(!file_exists($upload_path . $d->src)) continue;
                if($d->remove == '1') continue;
                
                $imagePath = str_replace('tmp/', '', $d->src);
                $targetPath = $upload_path . dirname($imagePath);
                if(!mkpath($targetPath)) continue;
                @rename($upload_path.$d->src, $upload_path.$imagePath);
                
                $image_data = [
                    'slide_id'  => $slide_id,
                    'image'     => $imagePath,
                    'url'       => prep_url($d->url),
                    'label'     => $d->label,
                    'sort'      => $d->sort,
                ];         
                $this->slide_image_model->insert($image_data);
            }
            else
            {
                if($d->remove == '1') 
                {
                    $this->slide_image_model
                        ->delete($d->id); 
                }
                else
                {
                    $data = [
                        'label' => $d->label, 
                        'url'   => prep_url($d->url), 
                        'sort'  => $d->sort
                    ];
                    $this->slide_image_model
                        ->update($d->id, $data);
                }
            }
        }  
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */