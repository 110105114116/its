<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipaddress extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Equipment_model');
    }

	public function index() {
        if(isset($this->session->userdata['emp_id'])) {
            $result['data'] = $this->Equipment_model->getIP();

            $this->load->view('ipaddress', $result);
        } else $this->load->view('login');
	}
}
