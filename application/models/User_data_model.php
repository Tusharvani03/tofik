<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User_data_model extends CI_Model {



    // registration
  public function save_user(){

           
        $username                =    $this->input->post('user_name');
        $name               =    $this->input->post('name');
        $project_name               =    $this->input->post('project_name');
        $contact      =    $this->input->post('contact');
        $city    =    $this->input->post('city');
        $state    =    $this->input->post('state');
        $address    =    $this->input->post('address');
        $email    =    $this->input->post('email');
        $password    =    str_shuffle(648521);
        $date     = date("Y-m-d");
        $time     = date("h:i:s A");

            $data = array(

                'user_name'      => $username,
                'name'     => $name,
                'project_name'     => $project_name,
                'address' => $address,
                 'city' => $city,
                'state' => $state,
                'contact'      => $contact,
                'email'      =>$email,
                'date'   =>$date,
                'active_status' => 'panding',
                'password'   =>$password,
                'time'   =>$time,
                'status'    =>1,
            );



        
              if ($result = $this->db->insert('user' ,$data)) {
                   return $result;
              }
               
    } 
 

    public function doLogin() {

        $username = $this->input->post('username');

        $password = $this->input->post('password');
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->or_where('username', $username);
        $this->db->or_where('email', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }


     public function check_user_name() {

        $user_name = $this->input->post('user_name');
    
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name', $user_name);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }
       public function check_email() {

        $email = $this->input->post('email');
    
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }

   
       public function list_product($c_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.c_id', $c_id);
        $this->db->where('product.status',1);
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
      public function invoice_list($c_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
          $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
         $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
        $this->db->where('product.invoice_status',1);
          $this->db->where('product.c_id', $c_id);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }
         public function create_invoice($id,$c_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.product_id',$id);
        $this->db->where('product.c_id', $c_id);
        $this->db->where('product.status',1);
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

     public function total_amount($c_id){
        $this->db->select('SUM(product_price),SUM(recive_price),SUM(remaining_price),SUM(shiping_cost)');
        $this->db->from('product');
        $this->db->where('status',1);
         $this->db->where('product.c_id', $c_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
      public function list_product_new($c_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->join('vehicle', 'vehicle.vehicle_id = product.vehicle_id');
        $this->db->join('shiped', 'shiped.shiped_id = product.shiped_id');
        $this->db->where('product.status',1);
           $this->db->where('product.c_id', $c_id);
        $this->db->order_by('product_id','desc');
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }
       public function recived_amount($c_id){
          $this->db->select('*');
        $this->db->from('product');
        $this->db->join('customer', 'customer.c_id = product.c_id');
        $this->db->where('product.status',1);
         $this->db->where('remaining_price',0);
          $this->db->where('product.c_id', $c_id);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }

       public function message($c_id){
          $this->db->select('*');
        $this->db->from('messsage');
        $this->db->where('status',1);
         $this->db->where('c_id', $c_id);
        $query = $this->db->get();            
        $result = $query->result_array();
        return $result;
    }


     


}