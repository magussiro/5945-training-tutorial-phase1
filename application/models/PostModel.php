<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

class PostModel extends CI_Model {  
    function __construct()  
    {  
        parent::__construct();  
    }  

    public function find_all(){
    	$this->db->select("*");
    	$query = $this->db->get("5945Post");
    	return $query->result();
    }

    public function insert($userName,$userEmail,$content){
    	$this->db->insert("5945Post",Array(
    		"UserName" => $userName,
    		"UserEmail" => $userEmail,
    		"Content" => $content,
    		"ModifyDate" => date("Y-m-d H:i:s")
    	));

    	return $this->db->insert_id();
    }

} 