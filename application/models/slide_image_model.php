<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Slide_image_model extends BF_Model
{
    protected $table = 'slide_images';  
    protected $set_created  = FALSE;
    protected $set_modified = FALSE;
    
    public function __construct()
    {
        parent::__construct();
    }
}//end User_model
