<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Community_site_model extends BF_Model
{
    protected $table = 'community_sites';  
    protected $set_created = FALSE;    
    protected $set_modified = FALSE;
    
    public function __construct()
    {
        parent::__construct();
    }
}//end User_model
