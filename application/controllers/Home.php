<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!($this->session->userdata('logged_in'))){
        /* If user is not logged in, redirect to login */
            redirect(base_url('login'));
        }  

        $this->load->model('user_model');
        $this->load->model('application_model');
    }

	public function index($title = 'UCSD Applicant Portal')	{

        if ( ! file_exists(APPPATH.'views/home.php')) {
            show_404();
        }

        $data['title'] = $title;
        $data['user'] = $this->user_model->get_user(1);
        $data['applications'] = $this->application_model->get_user_applications(1);

		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}
