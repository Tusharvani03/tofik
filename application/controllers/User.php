<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User extends CI_Controller {



    public function __construct() {

        parent::__construct();

        $this->load->model('User_data_model','user_data_model');

        $this->load->library('session');

        $this->load->helper('url_helper');

        $this->load->helper('form');

        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Dubai');
    }

    

    public function index(){
     
    
      $this->load->view('User/header');
      $this->load->view('User/index');
      $this->load->view('User/footer'); 
	 
	  
}
 
    public function project(){
     
    
      $this->load->view('User/header');
      $this->load->view('User/project');
      $this->load->view('User/footer'); 
   
    
}
 
    public function contactUs(){
     
    
      $this->load->view('User/header');
      $this->load->view('User/contact-us');
      $this->load->view('User/footer'); 
   
    
  }
    public function aboutUs(){
     
    
      $this->load->view('User/header');
      $this->load->view('User/about');
      $this->load->view('User/footer'); 
   
    
}



 public function saveUser(){

           $result['save_user'] =  $this->user_data_model->save_user();

          if ($result['save_user']) {
           
            echo '<div data-notify="container" class="col-11 col-md-4 alert alert-info alert-with-icon animated fadeInDown" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 15px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 202px; right: 20px;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -9px; z-index: 1033;"><i class="material-icons">close</i></button><i data-notify="icon" class="material-icons">add_alert</i><span data-notify="title"></span> <span data-notify="message">Customer Added <b>Successfully</b> - Done .</span><a href="#" target="_blank" data-notify="url"></a></div>';
          }
     }
  

 public function checkUserName(){

           $result['check_user_name'] =  $this->user_data_model->check_user_name();

          if ($result['check_user_name']) {
           
            echo '<div  style="color: red;">This User Name is Already User</div>';
          }
          // else{
          //   echo "Congratulation";
          // }
     }
  

 public function checkEmail(){

           $result['check_email'] =  $this->user_data_model->check_email();

          if ($result['check_email']) {
           
            echo '<div  style="color: red;">This Email is Already User</div>';
          }
          // else{
          //   echo "Congratulation";
          // }
     }
  


	    

    // login

      public function verify_user() {

        $result_user = $this->user_data_model->doLogin();
                   

     if ($result_user) {         
         foreach ($result_user as $value) {
           $c_id = $value['c_id'];
             $username = $value['username'];
        

       }
            
            $session_data = array(
             
              'c_id'  => $c_id,
              'username'  => $username
            );

             

            $this->session->set_userdata('logged_in_user', $session_data);

               redirect('User/index','refresh');




        } else {



            

            echo "<script>alert('Pleaser Fill Correct user Name and ')</script>";

             redirect('User/index','refresh');
      

        }

    }

      public function dashboard(){

            if($this->session->userdata('logged_in_user')){

            $this->load->view('User/header');

            $this->load->view('User/dashboard');

            $this->load->view('User/footer');

        }

        else{

        redirect('User/index');

        }

    }



	 public function listProduct(){

            if($this->session->userdata('logged_in_user')){
          	$value = $this->session->userdata('logged_in_user');
          	 $c_id = $value['c_id'];
           
         $data['list_product'] =  $this->user_data_model->list_product($c_id);
            $this->load->view('User/header');
            $this->load->view('User/listProduct',$data);
            $this->load->view('User/footer');
            }
        else{
 
  redirect('User/index');
        }

     }
      public function productDetails($id){
   
    $data['product_details'] =  $this->user_data_model->product_details($id);
      $this->load->view('User/productDetails',$data);
     }
   public function listPayment(){

       if($this->session->userdata('logged_in_user')){
	   	 $value = $this->session->userdata('logged_in_user');
  	     $c_id = $value['c_id'];

         // $data['list_customer'] =  $this->admin_data_model->list_customer($c_id);
         $data['list_product'] =  $this->user_data_model->list_product($c_id);

         
            $this->load->view('User/header');
            $this->load->view('User/listPayment',$data);
            $this->load->view('User/footer');      
        }
        else{
        	echo "string";
        // redirect('User/index');
        }
     }
      public function listInvoice(){

       if($this->session->userdata('logged_in_user')){
       	 $value = $this->session->userdata('logged_in_user');
  	     $c_id = $value['c_id'];
        // $data['list_customer'] =  $this->admin_data_model->list_customer();
        $data['list_product'] =  $this->user_data_model->invoice_list($c_id);
            $this->load->view('User/header');
            $this->load->view('User/listInvoice',$data);
            $this->load->view('User/footer');      
        }
        else{
        redirect('user/index');
        }
     }

    public function printInvoice($id) {
    	   	 $value = $this->session->userdata('logged_in_user');

  	     $c_id = $value['c_id'];
  $data['create_invoice'] =  $this->user_data_model->create_invoice($id,$c_id);
 $data['edit_profile'] =  $this->user_data_model->edit_profile();
    $this->load->view('User/printInvoice',$data);

    }  
     public function balanceSheet(){

     	 if($this->session->userdata('logged_in_user')){
			$value = $this->session->userdata('logged_in_user');
			$c_id = $value['c_id'];
        $data['total_amount'] =  $this->user_data_model->total_amount($c_id);
        $data['list_product'] =  $this->user_data_model->list_product($c_id);
        $data['recived_amount'] =  $this->user_data_model->recived_amount($c_id);
           $data['list_product_new'] =  $this->user_data_model->list_product_new($c_id);
            $this->load->view('User/header');
            $this->load->view('User/balanceSheet',$data);
            $this->load->view('User/footer');      
        }
        else{
        redirect('Admin/index');
        }
     }

    public function message(){

     	 if($this->session->userdata('logged_in_user')){
     	 	 $value = $this->session->userdata('logged_in_user');
			$c_id = $value['c_id'];
     	 	$data['message'] =  $this->user_data_model->message($c_id);
     	 
            $this->load->view('User/header');
            $this->load->view('User/message',$data);
            $this->load->view('User/footer');      
        }
        else{
        redirect('Admin/index');
        }
     }



  

      public function logout() {

        $this->session->unset_userdata('logged_in_user');

        session_unset();

        session_destroy();

        redirect('User/index');

    }



     

    }