<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends BF_Model
{
    protected $table = 'lt_users';   
    
    public function __construct()
    {
        parent::__construct();
    }
}//end User_model
