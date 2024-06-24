<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Equipment_model');
    }

	public function index() {
        if(isset($this->session->userdata['emp_id'])) {
            $result['data'] = $this->Equipment_model->get_count_equip();

            $this->load->view('dashboard', $result);
        } else $this->load->view('login');
	}
}
