<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
    
    protected $menu = 'dashboard';
    protected $submenu = '';
    protected $pagetitle = 'Dashboard';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin_model');
        $this->load->model('testimonial_model');
        $this->load->model('video_model');
        $this->load->model('user_model');
    }
   
    public function index()
    {
        $members = $this->admin_model->count_all();
        $testimonials = $this->testimonial_model->count_all();
        $videos = $this->video_model->count_all();
        $users = $this->user_model->count_all();
        Template::set('members', $members);
        Template::set('testimonials', $testimonials);
        Template::set('videos', $videos);
        Template::set('users', $users);
        
        $this->set_view('dashboard/index');
        $this->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */