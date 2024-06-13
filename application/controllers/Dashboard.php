<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

	public function index() {
        if($this->session->userdata['emp_id']) {
            redirect('record');
            // $this->load->view('dashboard');
        } else redirect('', 'refresh');
	}
}