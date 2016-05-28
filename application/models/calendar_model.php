<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Calendar_model extends BF_Model
{
    protected $table = 'calendar';  
    protected $set_created = FALSE;    
    protected $set_modified = FALSE;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function find_all_by_date_indexed()
    {
        $result = $this->find_all();
        
        if(empty($result)) return array();
        
        $arr = array();
        foreach($result as $r)
        {
            $arr[$r->date] = $r;
        }
        
        return $arr;
    }
}//end User_model
