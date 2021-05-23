<?php  
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class File extends CI_Model{ 
    function __construct() { 
        $this->tableName = 'product_detail'; 
    } 
     
    /* 
     * Fetch files data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows($id = ''){
        $this->db->select('pd_id,images'); 
        $this->db->from('product_detail'); 
        if($id){ 
            $this->db->where('pd_id',$id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            /*$this->db->order_by('uploaded_on','desc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); */
        } 
        return !empty($result)?$result:false; 
    } 
     
    /* 
     * Insert file data into the database 
     * @param array the data for inserting into the table 
     */ 
    public function insert($data = array()){ 
        $insert = $this->db->insert_batch('product_detail',$data); 
        return $insert?true:false; 
    } 
	
	function save($result){

		return $this->db->insert('product', $result);
		
	}
	
	
	function product_name ($name)
   {
	//$res=array();
	   $this->db->where('sku_code',$name);
	   $query=$this->db->get('product');
	   //print_r($this->db->last_query());
	   $row=$query->row_array();
//print_r($row);
	  
	   if($row>=true)
		{
			
		return 2;
			
		}
		else
	   { 
         return 1;
	   }
		
		
		// return ;
		 
	}   
}