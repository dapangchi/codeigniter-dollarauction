<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reason_model extends BF_Model
{
    protected $table = 'reasons';  
    protected $set_created  = FALSE;
    protected $set_modified = FALSE;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function find_or_create($id)
    {
        $row = $this->where('id', $id)->find_one();
        
        if(empty($row))
        {
            $data = array(
                'id'        => $id,
                'title'     => '',
                'content'   => ''
            );
            
            $row_id = $this->insert($data);
            return $this->find($row_id);
        }
        
        return $row;
    }
}//end User_model
