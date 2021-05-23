<?php defined('BASEPATH') OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{
  function __construct(){
	  
		parent::__construct();
		$this->load->helper('url');
       /* $this->load->helper('cookie');		
        delete_cookie('name');
        $this->session->unset_userdata('last_page');*/
             /*  $currentURL = current_url();
              
                 if(!empty(current_url()))
                 {
                 	 $this->session->set_userdata('last_page', current_url());// die();
                 }
                 else
                 {
                 	$this->session->set_userdata('last_page', 'http://shopeeon.16mb.com/nelson/');
                 }
        */
						$this->load->library('user_agent');
						if ($this->agent->is_referral())
						{
								$refer =  $this->agent->referrer();
								$this->session->set_userdata('last_page', $refer);
						}
						else
						{
							        $this->session->set_userdata('last_page', current_url());
									if($this->session->userdata('fuserid') == 0)
									{
									  redirect('Login','refresh');
									}

						}
						
		//print_r($_SESSION['last_page']); die();
		


				
		
		
  }
}