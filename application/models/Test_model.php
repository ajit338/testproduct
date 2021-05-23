<?php

class Test_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


	public function  save_info($data)
	{
		
		$query=$this->db->insert('test',$data);
		
		return $query; 
		
	}
	

	
	
	
}
