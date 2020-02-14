<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {



    public function __construct() {

        parent::__construct();
        $this->load->model('Admin_data_model','admin_data_model');       
    }

    public function delete($id){
 
      $this->admin_data_model->delete_data($id);
    }



    public function index(){
 
        if($this->session->userdata('admin_logged_in')){
       
 $data['list_user'] =  $this->admin_data_model->list_user();        
 
 $data['list_active_user'] =  $this->admin_data_model->list_active_user();  
 $data['list_panding_user'] =  $this->admin_data_model->list_panding_user();           
 


            $this->load->view('Admin/header');
            $this->load->view('Admin/dashboard',$data);
             $this->load->view('Admin/footer');
            
    }

    else{
       $this->load->view('Admin/login');

    }

    }

public function next(){
             $this->load->view('Admin/dashboard');
}


       public function allUsers(){
 
        if($this->session->userdata('admin_logged_in')){
      $data['list_user'] =  $this->admin_data_model->list_user();  
      $data['list_active_user'] =  $this->admin_data_model->list_active_user();  
      $data['list_panding_user'] =  $this->admin_data_model->list_panding_user();         
            $this->load->view('Admin/header');
            $this->load->view('Admin/dashboard',$data);
            $this->load->view('Admin/footer');
        }
        else{
        redirect('Admin/index');          
        }
 

     }

       public function updateUserStatus(){
 
        if($this->session->userdata('admin_logged_in')){
      $data['update_user_status'] =  $this->admin_data_model->update_user_status();  
        }
        else{
        redirect('Admin/index');          
        }
 

     }


      public function editProfile(){

            if($this->session->userdata('exporter_logged_in')){
 $data['edit_profile'] =  $this->admin_data_model->edit_profile();


            $this->load->view('Admin/header');
          	$this->load->view('Admin/editProfile',$data);
            $this->load->view('Admin/footer');
        

        }

        else{

        redirect('Admin/index');

        }

     }
         public function Profile(){

            if($this->session->userdata('exporter_logged_in')){
 $data['edit_profile'] =  $this->admin_data_model->edit_profile();


            $this->load->view('Admin/header');
          	$this->load->view('Admin/profile',$data);
            $this->load->view('Admin/footer');
        

        }

        else{

        redirect('Admin/index');

        }

     }
       public function updateProfile(){

       if($this->input->post('submit') != NULL ){
      
      $data = array();
  
       
          
          if(!empty($_FILES['files']['name'])){

          // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'];
            $_FILES['file']['type'] = $_FILES['files']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['files']['error'];
            $_FILES['file']['size'] = $_FILES['files']['size'];

          // Set preference
          $config['upload_path'] = 'img/';  
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size']    = '5000';  // max_size in kb
          $config['file_name'] = $_FILES['files']['name'];
            
          //Load upload library
          $this->load->library('upload',$config);     
          
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
 

            // Initialize array
            $data['filenames'][] = $filename;
           
        }
          
      }
     
 
    $data['update_profile'] =  $this->admin_data_model->update_profile($data);
    
    }else{

    echo "Please upload File Less than 20 MB";
              
 
    }
         

       
     }
           
     
       public function listCustomer(){

       if($this->session->userdata('exporter_logged_in')){
        $data['list_user'] =  $this->admin_data_model->list_user();
         
      
            $this->load->view('Admin/list_user',$data);
               
        }
        else{
        redirect('Admin/index');
        }
     }
     
 

        public function saveShiped(){

           $result['save_shiped'] =  $this->admin_data_model->save_shiped();
          
         if ($result['save_shiped']) {
           
               echo '<div data-notify="container" class="col-11 col-md-4 alert alert-info alert-with-icon animated fadeInDown" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 15px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 202px; right: 20px;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -9px; z-index: 1033;"><i class="material-icons">close</i></button><i data-notify="icon" class="material-icons">add_alert</i><span data-notify="title"></span> <span data-notify="message">Shiped Added <b>Successfully</b> - Done .</span><a href="#" target="_blank" data-notify="url"></a></div>';
             }
     }
      public function saveProduct(){

       if($this->input->post('submit') != NULL ){
      
      $data = array();
 
      // Count total files
     echo  $countfiles = count($_FILES['files']['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
          
          if(!empty($_FILES['files']['name'][$i])){

          // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path'] = 'img/';  
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size']    = '5000';  // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];
            
          //Load upload library
          $this->load->library('upload',$config);     
          
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
 

            // Initialize array
            $data['filenames'][] = $filename;
          }
        }
          
      }
     
 
     $response['value'] =  $this->admin_data_model->save_product($data);
    
    }else{

    echo "Please upload File Less than 20 MB";
              
 
    }
         

       
     }
    
       
   
     

    public function verify_user() {
        
        $result_user = $this->admin_data_model->doLogin();
        if ($result_user) {

         foreach ($result_user as $value) {
             $user_id = $value['user_id'];
             $user_name = $value['user_name'];
             $name = $value['name'];
             $email = $value['email'];
             $contact = $value['contact'];
             $address = $value['address'];
             
              
       }

            $session_data = array(
                'user_id' => $user_id,
                'user_name'    => $user_name,
                'email'   => $email,
                'name'   => $name,
                'contact' => $contact,
                'address' => $address,
             
                 
            );

          
            $this->session->set_userdata('admin_logged_in', $session_data);

       // redirect('Admin/index');
            echo "Success";
        } else {
            // $session_array = array('message' => " Error: You entered wrong username & password!");
            // $this->session->set_userdata('dashboard', $session_array);


            //  echo "<script>alert('Invalid Id and Password');</script>";
            // redirect('Admin/index', 'refresh');
          echo "Wrong User Name and Password...!";
        }

    }

    
    public function sendMessage() {
    $this->admin_data_model->send_message();
      
    }   
    public function logout() {

    $this->session->unset_userdata('admin_logged_in');

    session_unset();

    session_destroy();

    redirect('Admin/index');

    }   



   

    }