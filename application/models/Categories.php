<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function check_slug($data){
        $sql = "SELECT * FROM be_category WHERE slug='$data' LIMIT 1";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function make_order($data){
        $this->db->insert('orders',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function SubmitMainTest($data){
        $this->db->insert('online_test_mains_submission',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function SubmitOptionalTest($data){
        $this->db->insert('online_test_optional_submission',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
}