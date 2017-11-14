<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form')); 
        $this->load->library('form_validation');
    }

	public function index($title = 'UCSD Applicant Portal')	{

        if ( ! file_exists(APPPATH.'views/login.php')) {
            show_404();
        }
        if($this->session->logged_in == true) {
            header('Location: '.base_url('home'));
        }


        $data['title'] = $title;

		$this->load->view('templates/header', $data);
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}

    public function login(){

        $this->form_validation->set_rules('username', 'Username', array('required', 'trim'));
        $this->form_validation->set_rules('password', 'Password', array('required', 'trim'));

        /* If there are errors, add messages to response */
        if ($this->form_validation->run() == FALSE) { 
            $response['success'] = false;
            $response['error'] = validation_errors();
        }
        else {        

            $user_record = $this->user_model->validate_user(); 

            if(($user_record->password) == $this->input->post('password')) {
                $this->session->set_userdata('user_record', $user_record);
                $this->session->set_userdata('logged_in', true);
                $response['success'] = true;
            }
            else {
                $response['success'] = false;
                $this->session->set_userdata('logged_in', false);
            }

        }

        echo json_encode($response);
    }
    
}
