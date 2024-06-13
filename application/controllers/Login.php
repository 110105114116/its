<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Login_model');
    }

	public function index() {
        // if(isset($this->session->userdata['emp_id'])) {
            // $this->load->view('dashboard');
        // } else $this->load->view('login');
		$this->load->view('login');
	}

	public function validLogin() {
		
	}

	public function logout() {
		// $this->session->sess_destroy();
		// redirect('', 'refresh');
	}
}
