<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial_model extends BF_Model
{
    protected $table = 'testimonials';  
    protected $key = 'tstm_id';
    protected $created_field    = 'tstm_created_at';
    protected $modified_field   = 'tstm_updated_at'; 
    
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
