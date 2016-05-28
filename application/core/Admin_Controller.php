<?php

class Admin_Controller extends Base_Controller
{
    protected $side = '';
    protected $menu = '';
    protected $submenu = '';
    protected $pagetitle = '';
    
    public function __construct()
    {
        parent::__construct();
        
        // Make sure we're logged in.  
        $this->admin_auth->restrict();
        
        // Pagination config
        $this->pager = array();
        $this->pager['full_tag_open']    = '<div class="pagination pagination-right"><ul>';
        $this->pager['full_tag_close']    = '</ul></div>';
        $this->pager['next_link']         = '&rarr;';
        $this->pager['prev_link']         = '&larr;';
        $this->pager['next_tag_open']    = '<li>';
        $this->pager['next_tag_close']    = '</li>';
        $this->pager['prev_tag_open']    = '<li>';
        $this->pager['prev_tag_close']    = '</li>';
        $this->pager['first_tag_open']    = '<li>';
        $this->pager['first_tag_close']    = '</li>';
        $this->pager['last_tag_open']    = '<li>';
        $this->pager['last_tag_close']    = '</li>';
        $this->pager['cur_tag_open']    = '<li class="active"><a href="#">';
        $this->pager['cur_tag_close']    = '</a></li>';
        $this->pager['num_tag_open']    = '<li>';
        $this->pager['num_tag_close']    = '</li>';

        $this->limit = 20;
    }
    
    protected function set_view($view)
    {
        Template::set('side', $this->side);
        Template::set('menu', $this->menu);
        Template::set('submenu', $this->submenu);
        Template::set('pagetitle', $this->pagetitle);
        
        parent::set_view("admin/$view");
    }
    
    protected function include_datatable_assets($inds= array(1))
    {
        Assets::add_css('js/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');
        Assets::add_css('js/plugins/datatables-responsive/css/dataTables.responsive.css');
        Assets::add_js('js/plugins/datatables/media/js/jquery.dataTables.min.js');
        Assets::add_js('js/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');
        Assets::add_js(theme_view('parts/datatable_js', array('inds' => $inds), true), 'inline');
    }
}