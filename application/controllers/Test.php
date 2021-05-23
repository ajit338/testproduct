<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Test extends CI_Controller
{
	
	 public function __construct()
    {
        parent::__construct();
        $this->load->Model('Test_model');
    }
 
	  public function index(){
		  
		
		$this->load->view('test');
		

	  }
	  
	  public function Save_Data()
	   {
		  
		    $bank_name=$this->input->post('bank_name');
           $exam_name=$this->input->post('exam_name');
           $Class=$this->input->post('Class');
           $Subject=$this->input->post('Subject');
         
		  
		  $data=array('bank_name'=>$bank_name ,'exam_name'=>$exam_name,'class'=>$Class ,'subject'=>$Subject );
		  $this->Test_model->save_info($data);
		  redirect('Test');
		  
       
	  }
	  
 	



	
	

	
}
 
?>