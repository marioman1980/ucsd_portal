<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index($title = 'UCSD Applicant Portal')	{

        if ( ! file_exists(APPPATH.'views/login.php')) {
            show_404();
        }

        $data['title'] = $title;

		$this->load->view('templates/header', $data);
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}

    public function login(){

        $user_record = $this->user_model->validate_user(); 
        $user_id = $user_record->id;

        if(($user_record->password) == $this->input->post('password')) {
            $this->session->set_userdata('logged_in', true);
            $response['success'] = true;
        }




        $response['name'] = $this->input->post('username');

        //Either you can print value or you can send value to database
        echo json_encode($response);
    }
    
}
