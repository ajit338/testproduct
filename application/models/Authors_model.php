<?php

class Authors_model extends CI_Model {

    protected $table = 'product';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
       $this->db->where('Status',1);
        return $this->db->count_all($this->table);
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('Status',1);
        $query = $this->db->get($this->table);

        return $query->result();
    }



function fetch_single_user($product_id)  
      {  
           $this->db->where("P_id",$product_id);  
           $query=$this->db->get('product');  
           return $query->result();  
      }  



function product_images($product_id)  
      {  
           $this->db->where("p_id",$product_id);  
           $query=$this->db->get('product_detail');  
           return $query->result();  
      }


      function update_data($post)  
      {
 
               


          $product_id= $_POST['P_id'];
          $name= $_POST['name'];
           $Price= $_POST['Price']; 
              $Description= $_POST['Description']; 
                 $status= $_POST['status']; 
  $Code= $_POST['Code'];
        $fullDescription=$_POST['fullDescription'];

 $ext='';
       $imgs=$_FILES['file']['name'];
                $imgse = str_replace(' ', '', $imgs);
            
                
                if($imgs==''){
          $data=array('P_id'=>$product_id,'product_name'=>$name,'product_price'=>$Price,'product_short_description'=>$Description,'Status'=>$status,'sku_code'=>$Code,'product_descriprtion'=> $fullDescription);

          $this->db->where("P_id", $product_id);  
          $this->db->update("product", $data); 
}else{
         //{
        // echo "hi";die();
          
                    $config['upload_path']   = 'upload/';
                   $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG';
                   $config['max_size']      = '15360';
                 
                 
                 
                 //  $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

                   //$config['file_name']     = $imgse;

                   $this->upload->initialize($config);

                   if($this->upload->do_upload('file'))
                   {
                       $res=$this->upload->data();
                       $ext=$res['file_name'];
                      // $error = array('error' => $this->upload->display_errors());
                       //$this->load->view('dashboard', $error);
                   }

                      // $file_name = $config['file_name'];
         /* }
         else
         {
              $file_name = $imgs;
         }*/
              
              if($ext==null || $ext=='')
              {
                $image=$imgs; 
              }
               else
               {
                  $image=$ext; 
               }

          $data=array('P_id'=>$product_id,'product_name'=>$name,'product_price'=>$Price,'product_short_description'=>$Description,'Status'=>$status,'sku_code'=>$Code,'product_descriprtion'=> $fullDescription);

          $this->db->where("P_id", $product_id);  
          $this->db->update("product", $data); 
            
     
           $data=array('images'=>$imgs);
           $this->db->where("p_id", $product_id);  
          $this->db->update("product_detail", $data); 
      } 
           
      } 



    public function delete($id){
            $this->db->where('P_id', $id);
            $this->db->delete('product');
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }

        }
        
}