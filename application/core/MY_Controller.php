<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Libraries and methods for global use */
    class MY_Controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct(); 
            if (!($this->session->userdata('logged_in'))){
                /* If user is not logged in, redirect to login */
                redirect(base_url('login'));
            }        
        } 

    }
?>