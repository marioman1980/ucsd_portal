<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application_model extends CI_Model {

    public function __construct() {
		parent::__construct();   
    }

    public function get_user_applications($user_id) {
    	$this->db->select('*');
    	$this->db->from('applications');
        $this->db->join('users', 'users.id = applications.user_id');
        $this->db->join('courses', 'courses.id = applications.course_id');
    	$this->db->where('users.id', $user_id);
    	$query = $this->db->get();

    	return $query->result();

    }

    //public function 
}

?>