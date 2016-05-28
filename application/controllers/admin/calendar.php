<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends Admin_Controller {
    
    protected $side = 'left';
    protected $menu = 'calendar';
    protected $submenu = '';
    protected $pagetitle = 'Calendar';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('date');
        $this->load->model('calendar_model');
    }
    
    /////////////////////////////////////////////////////////////////////
    // ACTION METHODS
    /////////////////////////////////////////////////////////////////////
    public function index()
    {
        Assets::add_css('js/plugins/fullcalendar/fullcalendar.min.css');
        Assets::add_js('js/pages/calendar.js');
        
        $cyear = date('Y');
        $cmonth= date('m');
        
        //if there is no session for year and month
        //then save current to session
        if(!$this->session->userdata('cyear'))
        {
            $this->session->set_userdata('cyear', $cyear);
            $this->session->set_userdata('cmonth', $cmonth);
        }
        
        //load year and month from session
        $cyear = (int) $this->session->userdata('cyear');
        $cmonth= (int) $this->session->userdata('cmonth');
        
        //when click next
        if($this->input->post('btn-next'))
        {
            $cmonth++;
            if($cmonth > 12)
            {
                $cmonth = 1;
                $cyear++;
            }
        }
        //when click prev
        else if($this->input->post('btn-prev'))
        {
            $cmonth--;
            
            if($cmonth <= 0)
            {
                $cmonth = 12;
                $cyear--;
            }
        }
        //when click current
        else if($this->input->post('btn-current'))
        {
            $cyear = date('Y');
            $cmonth= date('m');
        }
        //when select month
        else if($this->input->post('btn-select'))
        {
            $temp = explode('-', $this->input->post('monthpicker'));
            $cmonth = $temp[0];
            $cyear = $temp[1];
        }
        
        //save changes to session again
        $this->session->set_userdata('cyear', $cyear);
        $this->session->set_userdata('cmonth', $cmonth);
        Template::set('month', $cmonth);
        Template::set('year', $cyear);
        
        //get calendar data
        $start_date = date('Y-m-d', mktime(0, 0, 0, $cmonth, 1, $cyear));
        $end_date = date('Y-m-d', mktime(0, 0, 0, $cmonth, 31, $cyear));
        
        $events = $this->calendar_model
            ->where('date >=', $start_date)
            ->where('date <=', $end_date)
            ->find_all_by_date_indexed();
        Template::set('events', $events);
        
        $this->set_view('calendar/index');
        $this->render();
    }
    
    public function create($time)
    {
        $date = date('Y-m-d', $time);
        
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($id = $this->_save_info(0, $date))
            {
                Template::set_message("Event of $date is created.", 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('calendar'));
                }
                else
                {
                    redirect(admin_uri("calendar/edit/$id/$time"));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/calendar_image.js');
        
        $this->pagetitle .= " - Create <small>($date)</small>";
        $this->set_view('calendar/create');
        $this->render();  
    }
    
    public function edit($id, $time)
    {
        $date = date('Y-m-d', $time);
        
        if($this->input->post('btn-save') || $this->input->post('btn-save-edit'))
        {
            if($this->_save_info($id, $date))
            {
                Template::set_message("Event of $date is updated.", 'success');
                
                if($this->input->post('btn-save'))
                {
                    redirect(admin_uri('calendar'));
                }
                else
                {
                    redirect(admin_uri('calendar/edit/'.$id));
                }
            } 
            else
            {
                Template::set_message('There is an error in saving.', 'danger');
            }   
        }
        
        Assets::add_js('js/plugins/resample.js');
        Assets::add_js('js/pages/calendar_image.js');
        
        $row = $this->calendar_model->find($id);
        Template::set('row', $row);
        
        
        $this->set_view('calendar/edit');
        $this->render();    
    }
    
    public function delete($id, $time)
    {
        $date = date('Y-m-d', $time);
        
        if($this->calendar_model->delete($id))
        {
            Template::set_message("Event of $date is deleted from calendar.", 'success');
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
    private function _save_info($id=0, $date)
    {        
        $this->form_validation->set_rules('title', 'title', 'required|trim|xss_clean|strip_tags');
        $this->form_validation->set_rules('price', 'Price', 'required|trim|numeric|xss_clean|strip_tags');
        $this->form_validation->set_rules('content', 'Content', 'required|trim|xss_clean|strip_tags');
        
        if ($this->form_validation->run($this) === FALSE)
        {
            return FALSE;
        } 
        
        $data = [
            'title' => $this->input->post('title'),
            'price' => $this->input->post('price'),
            'content'   => $this->input->post('content')
        ]; 
        
        //if avatar
        if(isset($_FILES['image']) && $_FILES['image']['name'] != '')
        {
            $result = $this->upload_image('image', 'calendar');
            if($result['status'])
            {
                $data['image'] = $result['image_name'];
            }            
            else
            {
                //$this->form_validation->set_message('tstm-avatar', $result['error'][0]);
                Template::set('image_message', $result['error'][0]);
                return false;
            }
        }  
        
        if($id == 0)
        {
            $data['date'] = $date;
            
            return $this->calendar_model->insert($data);
        }
        else
        {
            return $this->calendar_model->update($id, $data);
        }
        
        return FALSE;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */