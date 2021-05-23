<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Upload_Files extends CI_Controller { 
    function  __construct() { 
        parent::__construct(); 
         
        // Load file model 
        $this->load->model('file'); 
    } 
     
    function index(){ 

        $data = array(); 
        $errorUploadType = $statusMsg = ''; 
         
        // If file upload form submitted 
        if($this->input->post('fileSubmit')){ 
		$this->load->helper('string');
		$product_id=mt_rand(1, 100000);
             	 $name=$this->input->post('name');
				 $Description=$this->input->post('Description');
				 $Price=$this->input->post('Price');
				 $status=$this->input->post('status');
                 $Code=$this->input->post('Code');
				$fullDescription=$this->input->post('fullDescription');

				 
				 
				   $insertdata = array('P_id'=>$product_id,'product_name'=>$name,'sku_code'=>$Code,'product_price'=>$Price,'product_short_description'=>$Description,'product_descriprtion'=>$fullDescription,'Status'=>$status);
               
                $this->file->save($insertdata);  

//echo 			 $name;			 die();
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
            { 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = 'uploads/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    ///$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
					 
				
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['images'] = $fileData['file_name']; 
                     
						$uploadData[$i]['p_id'] =$product_id;
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    $insert = $this->file->insert($uploadData); 
                     
                    // Upload status message 
                    $statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
					
					 //redirect(base_url('Customerlist'));
					  echo "<script>
alert('Add Product successfully');
window.location.href='http://localhost/Test/';
</script>";
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
            }else{ 
                $statusMsg = 'Please select image files to upload.'; 
            } 
        } 
         
        // Get files data from the database 
        $data['files'] = $this->file->getRows(); 
         
        // Pass the files data to view 
        $data['statusMsg'] = $statusMsg; 
        $this->load->view('addproduct', $data); 
		
    } 
 
	function check_product_name()
	  {
		  
		  $name=$this->input->post('name');
		  $this->load->model('file');
		 
		  $result=$this->file->product_name($name);
		 if($result==1)
		 {
			  echo 1;
		 }
		 elseif($result==2)
		 {
			 echo 2;
		 }
		 
		 
		  
	  }



     

}