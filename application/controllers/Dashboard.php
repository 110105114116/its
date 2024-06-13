<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        // $this->load->model('Dashboard_model');
    }

	public function index() {
        if(isset($this->session->userdata['emp_id'])) {
            $this->load->view('dashboard');
        } else $this->load->view('login');
	}
}
