<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class app_data_model extends CI_Model {


 

 
        public function doLogin(){
        $username = $this->input->post('User_id');
        $password = $this->input->post('password');
        $this->db->select('*'); 
        $this->db->from('user');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $this->db->where('active_status', 'active');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
        } 
        }