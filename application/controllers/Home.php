<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('application_model');
    }

	public function index($title = 'UCSD Applicant Portal')	{

        if ( ! file_exists(APPPATH.'views/home.php')) {
            show_404();
        }

        $data['title'] = $title;
        $data['user'] = $this->user_model->get_user($this->session->user_record->id);
        $data['applications'] = $this->application_model->get_user_applications($this->session->user_record->id);

		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}
