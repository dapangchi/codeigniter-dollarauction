<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Video_model extends BF_Model
{
    protected $table = 'videos';  
    protected $key = 'vdo_id';
    protected $created_field    = 'vdo_created_at';
    protected $modified_field   = 'vdo_updated_at'; 
    
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}//end User_model
