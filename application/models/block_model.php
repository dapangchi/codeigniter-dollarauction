<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Block_model extends BF_Model
{
    protected $table = 'blocks';  
    protected $key = 'blk_id';
    protected $created_field    = 'blk_created_at';
    protected $modified_field   = 'blk_updated_at'; 
    
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    public function find_or_create($slug)
    {
        $row = $this->where('blk_slug', $slug)->find_one();
        
        if(empty($row))
        {
            $data = array(
                'blk_title'     => '',
                'blk_content'   => '',
                'blk_slug'      => $slug
            );
            
            $row_id = $this->insert($data);
            return $this->find($row_id);
        }
        
        return $row;
    }
}//end User_model
