<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
		parent::__construct();   
    }

    public function get_all_users() {
    	$query = $this->db->get('users');
    }

    public function get_user($user_id) {
    	$this->db->select('*');
    	$this->db->from('users');
    	$this->db->where('id', $user_id);
    	$query = $this->db->get();

    	return $query->row();
    }

    public function validate_user(){
        $this->db->where('username', $this->input->post('username'));
        $query = $this->db->get('users');
        if ($query->num_rows() == 0){
            return false;/* If username doesn't exist */
        }
        else{
            $row = $query->row();
            return $row;      
        }
    }
}

?>