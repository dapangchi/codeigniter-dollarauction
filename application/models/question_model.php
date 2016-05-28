<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends BF_Model
{
    protected $table = 'questions';  
    
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
