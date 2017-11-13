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
}
