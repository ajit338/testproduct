 <?php

  function department_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('department.*')->get('department');
    return $result->result_array();
  }

  function department_count()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->count_all_results('department');
    return $result;
  }

  function approval_request_count()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->count_all_results('approval_request');
    return $result;
  }


   function plant_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('plant.*,cities.*')->join('cities','plant.city_id=cities.city_id')->get('plant');
    return $result->result_array();
  }
  function  get_plant_name($plant_id)
  {
    $ci=& get_instance();
    $ci->load->database();
   $result=$ci->db->select('plant.*')->where('plant.plant_id', $plant_id)->get('plant');
    return $result->result_array();
  }
 function  get_dept_name($dept_id)
  {
    $ci=& get_instance();
    $ci->load->database();
   $result=$ci->db->select('department.*')->where('department.dept_id', $dept_id)->get('department');
    return $result->result_array();
  }

  function plant_count()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->count_all_results('plant');
    return $result;
  }

   function site_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Stie_Mst.*')->get('Stie_Mst');
    return $result->result_array();
  }  

   function store_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Store_Detail.*')->get('Store_Detail');
    return $result->result_array();
  }   
  function payment_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Payment_Mode.*')->get('Payment_Mode');
    return $result->result_array();
  }  

  function sub_category_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Sub_Category.Category_id,Sub_Category.SubCategory_id,Sub_Category.isActive,Sub_Category.SubCategory_Name,Sub_Category.SubCategory_Image,Sub_Category.Created_Date,Category.Category_Name')->join('Category','Category.Category_id=Sub_Category.Category_id','left')->get('Sub_Category');
    return $result->result_array();
  }

   function product_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Category.Category_id,Sub_Category.SubCategory_id,Sub_Category.SubCategory_Name,Category.Category_Name,Products.Products_id,Products.Product_Name,Products.Product_weight,Products.Product_unit,Products.Product_Description,Products.Product_id,Products.Product_Image,Products.Created_Date,Products.Product_Price,Products.Product_Qty,Products.isActive,Products.isPopular,Products.isNew')->join('Sub_Category','Sub_Category.SubCategory_id=Products.SubCategory_id','left')->join('Category','Category.Category_id=Products.Category_id','left')->get('Products');
    return $result->result_array();
  } 

  function order_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Order_Details.Order_id,Order_Details.Status_Id,Order_Details.Total_Amount,Order_Details. Total_Item,Users.User_Name,Users.User_Mobile,Payment_Mode.Payment_Type,Order_Status.Status_Type')
    ->join('Users','Users.User_id=Order_Details.User_id','left')
    ->join('Payment_Mode','Payment_Mode.Payment_id=Order_Details.Payment_id','left')   
    ->join('Order_Status','Order_Status.Status_id=Order_Details.Status_Id','left')   
    ->get('Order_Details');   
    return $result->result_array();
  }

  function order_detail()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('Orders.Order_id,Orders.Status_Id,Orders.Total_Amount,Users.User_Name,Users.User_Mobile,Payment_Mode.Payment_Type,Order_Status.Status_Type,Category.Category_Name,
      Sub_Category.SubCategory_Name,Products.Product_Name,Products.Product_Qty,Products.Product_Price,Products. Product_weight')
    ->join('Users','Users.User_id=Orders.User_id','left')
    ->join('Payment_Mode','Payment_Mode.Payment_id=Orders.Payment_id','left')   
    ->join('Order_Status','Order_Status.Status_id=Orders.Status_Id','left')   
    ->join('Category','Category.Category_Id=Orders.Category_id','left')   
    ->join('Sub_Category','Sub_Category.SubCategory_id=Orders.SubCategory_id','left')   
    ->join('Products','Products.Product_id=Orders.Product_id','left')   
    ->get('Orders');   
   // return $ci->db->last_query();
    return $result->result_array();
  }

   function category_list_specific($dept_id,$plant_id)
  {
    $ci=& get_instance();
    $ci->load->database();
 //   $result=$ci->db->select('category.*')->where('plant_id',$plant_id)->get('category');
    $result=$ci->db->select('category.*')->where(array('dept_id'=>$dept_id,'plant_id'=>$plant_id))->get(' category');
    return $result->result_array();
  } 

  function offer_list()
  {
    $ci=& get_instance();
    $ci->load->database();
 //   $result=$ci->db->select('category.*')->where('plant_id',$plant_id)->get('category');
    $result=$ci->db->select('Offer.*')->get(' Offer');
    return $result->result_array();
  }
   function category_hirarchy_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('category.*,category_hierarchy.*')
    ->join('category_hierarchy','category.cat_id=category_hierarchy.cat_id')->get('category');
    return $result->result_array();
  }
  function get_categorywise_data($cat_id)
  {
     $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('category.*,category_hierarchy.*')
    ->join('category_hierarchy','category.cat_id=category_hierarchy.cat_id')->where('category.cat_id',$cat_id)->get('category');
    return $result->result_array();
  }

  

  function users()
  {
    $ci=& get_instance();
    $ci->load->database();
    $val=$ci->session->userdata();    
    $result=$ci->db->select('users.*')->where('users.role_id', 2)->where('users.user_id!=',$val['fuserid'])->get('users');
    return $result->result_array();
  }


  function dblist()
  {
    $ci=& get_instance();
    $ci->load->database();
    $val=$ci->session->userdata();    
    $result=$ci->db->select('Delivery_Boy.*')->get('Delivery_Boy');
    return $result->result_array();
  }

  
  
  function users_count()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->count_all_results('users');
    return $result;
  }

   function designation_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->select('designation.*')->get('designation');
    return $result->result_array();
  }

  function state_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    $result=$ci->db->query('SELECT DISTINCT `city_state` FROM cities');
    return $result->result_array();
  }

  function user_list()
  {
    $ci=& get_instance();
    $ci->load->database();
    //$result=$ci->db->select('users.*')->get('users');
    $result=$ci->db->select('Users.*')->get('Users');

     return $result->result_array();
  }

  

function userprofile()
{
    $ci=& get_instance();
    $ci->load->database();
    $val=$ci->session->userdata();            
  // echo $val['fuserid'];
    $res=$ci->db->select('users.*')->where('user_id', $val['fuserid'])->get('users');
    return $res->row_array();
}

?>