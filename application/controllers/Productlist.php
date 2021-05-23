<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authors extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->model('authors_model');
        $this->load->library("pagination");
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "authors";
        $config["total_rows"] = $this->authors_model->get_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['authors'] = $this->authors_model->get_authors($config["per_page"], $page);

        $this->load->view('productlist', $data);
    }


  function product_fetch($product_id)  
      {  
           $output = array();  
           
           $data['blogedit'] = $this->authors_model->fetch_single_user($product_id);  
           
          $this->load->view('editproduct',$data);
         

      }  

function update(){  

          $this->load->helper('date');
           if(isset($_POST["update"]))  

           {

            $this->authors_model->update_data($_POST);  
           $result =  $this->authors_model->update_data($_POST);
            if($_POST){
            $this->session->set_flashdata('success_msg', 'record updated successfully');
          }
         else{

            $this->session->set_flashdata('error', 'record fail to update');
 
            }
                
                redirect(base_url('Authors'));

         
          
           }  
      }  




function delete($id)
   {
        $result=$this->authors_model->delete($id);
        redirect(base_url('Authors'));
    }



}



