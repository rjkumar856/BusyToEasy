<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_form extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($data){
        $sql = "SELECT * FROM user WHERE userid='$data' OR email='$data' OR phone='$data' ";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function get_login_details($data){
        $sql = "SELECT * FROM user WHERE userid='$data' OR email='$data' OR phone='$data' ";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function get_login_details_by_id($data){
        $sql = "SELECT * FROM user WHERE id='$data' ";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function post_forgot_password($data){
        $this->db->insert('forgot_password_request',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function check_mobile($id,$mobile){
        $sql = "SELECT * FROM user WHERE id!='$id' AND phone='$mobile' ";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function check_email($id,$email){
        $sql = "SELECT * FROM user WHERE id!='$id' AND email='$email' ";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    public function update_userDetails($id,$data){
        $sql = "UPDATE user SET full_name='$data[full_name]',email='$data[email]',phone='$data[phone]',city='$data[city]',address='$data[address]',ip='$data[ip]' WHERE id='$id'";
        return $this->db->query($sql);
    }
    
    public function update_password($id,$password){
        $sql = "UPDATE user SET password='$password' WHERE id='$id'";
        return $this->db->query($sql);
    }
    
    public function Reset_Password($data){
        $password = md5($data['password']);
        $sql = "UPDATE user SET password='$password' WHERE id='$data[id]'";
        return $this->db->query($sql);
    }
    
    public function submit_signup($data){
        $this->db->insert('user',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function get_ongoing_order($data,$start=0,$limit=9){
        $sql = "SELECT *,od.status as orderStatus,od.id as orderID FROM orders od LEFT JOIN be_category bc ON bc.id=od.cat_id WHERE od.user_id='$data' AND (od.status='Progress' OR od.status='Not Allocated') GROUP BY od.id ORDER BY od.id DESC LIMIT ".$start.",".$limit;        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function get_order_history($data,$start=0,$limit=9){
        $sql = "SELECT *,od.status as orderStatus,od.id as orderID FROM orders od LEFT JOIN be_category bc ON bc.id=od.cat_id WHERE od.user_id='$data' GROUP BY od.id ORDER BY od.id DESC LIMIT ".$start.",".$limit;        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
}