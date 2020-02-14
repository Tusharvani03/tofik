<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_data_model extends CI_Model {



 
    public function doLogin() {

     
        $username = $this->input->post('Admin_id');
        $password = $this->input->post('password');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 'admin');
        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
        }

        public function edit_profile() {

     
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
        }

    public function save_customer(){
           
        $username                =    $this->input->post('username');
        $password               =    $this->input->post('password');
        $company_name               =    $this->input->post('company_name');
        $address      =    $this->input->post('address');
        $city    =    $this->input->post('city');
        $state    =    $this->input->post('state');
        $country    =    $this->input->post('country');
        $zip_code    =    $this->input->post('zipcode');
        $email    =    $this->input->post('email');
        $phone    =    $this->input->post('contact');
        $added_by    =    $this->input->post('added_by');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(

                'username'      => $username,
                'password'     => $password,
                'company_name'     => $company_name,
                'address' => $address,
                 'city' => $city,
                'state' => $state,
                'country' => $country,
                'zip_code'      => $zip_code,
                'email'      =>$email,
                'phone'    =>$phone,
                'date'   =>$date,
                'time'   =>$time,
                'added_by'   =>$added_by,
                'status'    =>1,
            );



        
              if ($result = $this->db->insert('customer' ,$data)) {
                  return $result;
              }
    } 

      public function update_profile($data){
   
 foreach ($data as  $value) {
        $files = implode(', ', $value);
        }


        $adminName                =    $this->input->post('adminName');
        $companyName               =    $this->input->post('companyName');
        $email               =    $this->input->post('email');
        $password      =    $this->input->post('password');
        $address    =    $this->input->post('address');
        $contact    =    $this->input->post('contact');
       

            $data = array(

                'username'      => $adminName,
                'name'     => $companyName,
                'email'     => $email,
                'password' => $password,
                 'address' => $address,
                'contact' => $contact,
                'file'  =>$files
           
            );



            $this->db->where('user_id',1);
              if ($result = $this->db->update('user',$data)) {
              redirect('Admin/editProfile','refresh');
              }
    } 

        public function update_customer(){
        $c_id                =    $this->input->post('c_id');
        $username                =    $this->input->post('username');
        $password               =    $this->input->post('password');
        $address      =    $this->input->post('address');
        $city    =    $this->input->post('city');
        $state    =    $this->input->post('state');
        $country    =    $this->input->post('country');
        $zip_code    =    $this->input->post('zipcode');
        $email    =    $this->input->post('email');
        $phone    =    $this->input->post('contact');
        // $added_by    =    $this->input->post('added_by');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(

                'username'      => $username,
                'password'     => $password,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'country' => $country,
                'zip_code'      => $zip_code,
                'email'      =>$email,
                'phone'    =>$phone,
                'date'   =>$date,
                'time'   =>$time,
                'status'    =>1,
            );

              $this->db->where('c_id', $c_id);
              if ($result = $this->db->update('customer',$data)) {
                  return $result;
              }
    } 
         public function delete_customer($id){
   

            $data = array(             
                'status'    =>0
            );

              $this->db->where('c_id', $id);
              if ($result = $this->db->update('customer',$data)){
                 redirect('Admin/listCustomer');
              }
    } 
      public function delete_product($id){
   

            $data = array(             
                'status'    =>0
            );

              $this->db->where('product_id', $id);
              if ($result = $this->db->update('product',$data)){
                 redirect('Admin/listProduct');
              }
    } 

    public function list_user(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status',1);
        $this->db->order_by('user_id','desc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 

    public function list_active_user(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status',1);
        $this->db->where('active_status','active');
        $this->db->order_by('user_id','desc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 
      public function list_panding_user(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status',1);
        $this->db->where('active_status','panding');
        $this->db->order_by('user_id','desc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 

 
        public function save_vehicle(){
        $vehicle_name                =    $this->input->post('vehicle_name');
        $vehicle_make               =    $this->input->post('vehicle_make');
        $vehicle_description      =    $this->input->post('vehicle_description');
        $added_by    =    $this->input->post('added_by');
        $user_id    =    $this->input->post('user_id');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(

                'vehicle_name'   =>$vehicle_name,
                'vehicle_make'   =>$vehicle_make,
                'vehicle_description'   =>$vehicle_description,
                'added_by'   =>$added_by,
                'user_id'   =>$user_id,
                'date'      =>$date,
                'time'      =>$time,
                'status'    =>1,
            );
    if ($result = $this->db->insert('vehicle' ,$data)) {
                  return $result;
              }
    }

     public function save_shiped(){
        $shiped_name           =    $this->input->post('shiped_name');
        $shiped_description    =    $this->input->post('shiped_description');
        $added_by  =    $this->input->post('added_by');
        $user_id   =    $this->input->post('user_id');
        $date      = date("Y-m-d");
        $time      = date("h:i:s A");

            $data = array(

                'shiped_name'   =>$shiped_name,
                'shiped_description'   =>$shiped_description,
                'added_by'   =>$added_by,     
                'user_id'   =>$user_id,
                'shiped_date'      =>$date,
                'shiped_time'      =>$time,
                'status'    =>1,
            );
    if ($result = $this->db->insert('shiped' ,$data)) {
                  return $result;
              }
    }  


     public function update_shiped(){

    $shiped_id                =    $this->input->post('shiped_id');
    $shiped_name           =    $this->input->post('shiped_name');
    $shiped_description    =    $this->input->post('shiped_description');
            $data = array(
                'shiped_name'   =>$shiped_name,
                'shiped_description'   =>$shiped_description,
             );

         $this->db->where('shiped_id', $shiped_id);
         if ($result = $this->db->update('shiped' ,$data)) {
         return $result;
         }
    }   

     public function update_category(){

        $category_id                =    $this->input->post('category_id');
        $category_name                =    $this->input->post('category_name');
        $category_type               =    $this->input->post('category_type');
        $category_description      =    $this->input->post('category_description');
         
            $data = array(
                            'category_name'   =>$category_name,
                            'category_type'   =>$category_type,
                            'category_description'   =>$category_description
             );

         $this->db->where('category_id', $category_id);
         if ($result = $this->db->update('category' ,$data)) {
         return $result;
         }
    }   

     public function list_vehicle(){
        $this->db->select('*');
        $this->db->from('vehicle');
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 
        public function list_shiped(){
        $this->db->select('*');
        $this->db->from('shiped');
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 
        public function edit_shiped($id){
        $this->db->select('*');
        $this->db->from('shiped');
        $this->db->where('status',1);
        $this->db->where('shiped_id',$id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    } 
    public function done_invoice(){
      
        $due_date                =    $this->input->post('due_date');
        $invoice_date                =    $this->input->post('invoice_date');
        $invoice_id               =    $this->input->post('invoice_id');
        $invoice_status      =    $this->input->post('invoice_status');
        $invoice_description      =    $this->input->post('invoice_description');
         
            $data = array(
                            'due_date'   =>$due_date,
                            'invoice_date'   =>$invoice_date,
                            'invoice_id'   =>$invoice_id,
                            'invoice_status'   =>$invoice_status,
                            'invoice_description'   =>$invoice_description
             );

         $this->db->where('product_id', $invoice_id);
         if ($result = $this->db->update('product' ,$data)) {
         return $result;
         }
    } 

     public function update_user_status(){
      
        $user_id                =    $this->input->post('user_id');
        $check_status                =    $this->input->post('check_status');
 
       
            $data = array(
                            
                            'active_status'   =>$check_status,
                   
             );

         $this->db->where('user_id', $user_id);
         if ($result = $this->db->update('user' ,$data)) {
        redirect('Admin/allUsers');
         }
    }   

       public function done_customer_invoice(){
       
        
        $due_date                =    $this->input->post('due_date');
        $invoice_date            =    $this->input->post('invoice_date');
        $date              =    $this->input->post('date');
        $invoice_description     =    $this->input->post('invoice_description');
        $c_id     =    $this->input->post('c_id');
        
            $data = array(
                            'cr_due_date'   =>$due_date,
                            'cr_invoice_date'   =>$invoice_date,
                            'cr_date'   =>$date,
                            'c_id'   =>$c_id,
                            'cr_invoice_description'   =>$invoice_description,
                            'cr_status'  => 1

             );
 
         if ($result = $this->db->insert('customer_invoice' ,$data)) {
            redirect('Admin/customerPayment', 'refresh');
         }
    }  

      public function customer_invoice(){
        $c_id                =    $this->input->post('c_id');
        $date                =    $this->input->post('date');    
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = vehicle.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = shiped.shiped_id');
        $this->db->group_by('product.product_id');
        $this->db->where('product.date',$date);
        $this->db->where('product.c_id',$c_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
         }
    
    

    public function delete_vehicle($id){
   
               $data = array(             
                'status'    =>0
            );

              $this->db->where('vehicle_id', $id);
              if ($result = $this->db->update('vehicle',$data)){
                 redirect('Admin/listVehicle');
              }
    } 

     public function delete_shiped($id){
       
       $this->db->where('shiped_id', $id);
       if ($result = $this->db->delete('shiped')){
       redirect('Admin/listShiped');
       }
       } 

       public function save_product($data){
        foreach ($data as  $value) {
        $files = implode(', ', $value);
        }

        $c_id                =    $this->input->post('c_id');
        $vehicle_id               =    $this->input->post('vehicle_id');
        $vehicle_made      =    $this->input->post('vehicle_made');
        $vin_number    =    $this->input->post('vin_number');
        $color    =    $this->input->post('color');
        $year    =    $this->input->post('year');
        $location_in_usa    =    $this->input->post('location_in_usa');
        $model    =    $this->input->post('model');
        $date_of_purches    =    $this->input->post('date_of_purches');
        $date_of_arivel    =    $this->input->post('date_of_arivel');
        $shiping_cost    =    $this->input->post('shiping_cost');
        $container_number    =    $this->input->post('container_number');
        $product_price    =    $this->input->post('product_price');
        $recive_price    =    $this->input->post('recive_price');
        $remaining_price    =    $this->input->post('remaining_price');
        $shiped_id    =    $this->input->post('shiped_id');
        $user_id    =    $this->input->post('user_id');
        $added_by    =    $this->input->post('added_by');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(

                'c_id'      => $c_id,
                'vehicle_id'     => $vehicle_id,
                'vehicle_made'     => $vehicle_made,
                'vin_number'     => $vin_number,
                'color'     => $color,
                'year'     => $year,
                'location_in_usa'     => $location_in_usa,
                'model'     => $model,
                'date_of_purches'     => $date_of_purches,
                'date_of_arivel'     => $date_of_arivel,
                'shiping_cost'     => $shiping_cost,
                'container_number'     => $container_number,
                'product_price' => $product_price,
                'recive_price' => $recive_price,
                'remaining_price'      => $remaining_price,
                'shiped_id'      => $shiped_id,
                'user_id'      =>$user_id,
                'added_by'    =>$added_by,
                'file'        =>$files,
                'date'   =>$date,
                'time'   =>$time,
                 'status'    =>1,
            );

              if ($result = $this->db->insert('product' ,$data)){
                 redirect('Admin/addProduct');
              }
    } 
        public function send_message(){
        $customers_id                =    $this->input->post('c_id');
        

       $c_id =  implode(',',$customers_id);

       
 
        $title               =    $this->input->post('title');
        $message      =    $this->input->post('message');
        $signature    =    $this->input->post('signature');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(
                'c_id'      => $c_id,
                'title'     => $title,
                'message' => $message,
                'signature' => $signature,
                'm_date'   =>$date,
                'm_time'   =>$time,
                'status'    =>1,
            );

              if ($result = $this->db->insert('messsage' ,$data)){
                 redirect('Admin/message');
              }
    } 

       public function update_product(){
      $c_id                =    $this->input->post('c_id');
        $product_id               =    $this->input->post('product_id');
        $vehicle_id               =    $this->input->post('vehicle_id');
        $vehicle_made      =    $this->input->post('vehicle_made');
        $vin_number    =    $this->input->post('vin_number');
        $color    =    $this->input->post('color');
        $year    =    $this->input->post('year');
        $location_in_usa    =    $this->input->post('location_in_usa');
        $model    =    $this->input->post('model');
        $date_of_purches    =    $this->input->post('date_of_purches');
        $date_of_arivel    =    $this->input->post('date_of_arivel');
        $shiping_cost    =    $this->input->post('shiping_cost');
        $container_number    =    $this->input->post('container_number');
        $product_price    =    $this->input->post('product_price');
        $recive_price    =    $this->input->post('recive_price');
        $remaining_price    =    $this->input->post('remaining_price');
        $shipped_from    =    $this->input->post('shipped_from');
        $user_id    =    $this->input->post('user_id');
        $added_by    =    $this->input->post('added_by');
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");
            $data = array(

               'c_id'      => $c_id,
                'vehicle_id'     => $vehicle_id,
                'vehicle_made'     => $vehicle_made,
                'vin_number'     => $vin_number,
                'color'     => $color,
                'year'     => $year,
                'location_in_usa'     => $location_in_usa,
                'model'     => $model,
                'date_of_purches'     => $date_of_purches,
                'date_of_arivel'     => $date_of_arivel,
                'shiping_cost'     => $shiping_cost,
                'container_number'     => $container_number,
                'product_price' => $product_price,
                'recive_price' => $recive_price,
                'remaining_price'      => $remaining_price,
                'shipped_from'      => $shipped_from,
                'user_id'      =>$user_id,
                'added_by'    =>$added_by,
                'status'    =>1,
            );

              $this->db->where('product_id', $product_id);
              if ($result = $this->db->update('product',$data)) {
           
                   redirect('Admin/productDetails/'.$product_id.'','refresh');
              }
    } 

        public function update_payment(){
        $product_id                =    $this->input->post('product_id');
        $product_price                =    $this->input->post('product_price');
        $recive_price               =    $this->input->post('recive_price');
        $remaining_price      =    $this->input->post('remaining_price');
        $updatePrice    =    $this->input->post('updatePrice');
                    
                $update_recive_price      = $updatePrice+$recive_price;
                $update_remaining_price      = $remaining_price-$updatePrice;

            $data = array(
                'recive_price' => $update_recive_price,
                'remaining_price'      => $update_remaining_price,
                       );

              $this->db->where('product_id', $product_id);
              if ($result = $this->db->update('product',$data)) {
                  return $result;
              }
    } 
    public function list_product($c_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
        $this->db->where('product.c_id',$c_id);
        $this->db->order_by('product_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }
    public function list_product_new(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
        $this->db->order_by('product_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }

    public function list_customer_product(){
        $this->db->select('SUM(product.product_price),SUM(product.recive_price),SUM(product.remaining_price),SUM(product.shiping_cost),product.date,customer.c_id,customer.username,customer.company_name,customer.c_id,customer.c_id,customer.date,customer.added_by,');
        $this->db->from('customer');     
        $this->db->join('product', 'product.c_id = customer.c_id');
        $this->db->where('customer.status',1);
        $this->db->group_by('customer.c_id');
        $this->db->order_by('customer.c_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }

       public function list_customer_invoice(){
        $this->db->select('SUM(product.product_price),SUM(product.recive_price),SUM(product.remaining_price),SUM(product.shiping_cost),product.date,customer.c_id,customer.username,customer.company_name,customer.c_id,customer.c_id,customer.date,customer.added_by,');
        $this->db->from('customer_invoice');     
        $this->db->join('product', 'product.c_id = customer.c_id');
        $this->db->where('customer.status',1);
        $this->db->group_by('customer.c_id');
        $this->db->order_by('customer.c_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }


    public function payment_date(){
        $this->db->select('date');
        $this->db->distinct();
        $this->db->from('product');     
        $this->db->where('product.status',1);
        $this->db->order_by('product.product_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }


      public function product_details($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
         $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
        $this->db->where('product.product_id',$id);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }
      public function invoice_list(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
        $this->db->where('product.invoice_status',1);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }
    public function customer_details(){
        $id      =    $this->input->post('id');
        $this->db->select('product_id,product_name,c_id');
        $this->db->from('product');
        $this->db->where('c_id',$id);
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }
     public function payment_details(){
      $id                =    $this->input->post('id');
        $this->db->select('*');
        $this->db->from('product'); 
        $this->db->where('product_id',$id);
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }  
     public function edit_customer($id){
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('c_id',$id);
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }  
     public function create_invoice($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.product_id',$id);
        $this->db->where('product.status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }   
      public function edit_category($id){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id',$id);
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }   
     public function edit_product($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.product_id',$id);
        $this->db->where('product.status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }   
    public function total_amount(){
        $this->db->select('SUM(product_price),SUM(recive_price),SUM(remaining_price),SUM(shiping_cost)');
        $this->db->from('product');
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
     public function recived_amount(){
          $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->where('product.status',1);
         $this->db->where('remaining_price',0);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }


}