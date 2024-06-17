<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Login_model');
    }

	public function index() {
        if(isset($this->session->userdata['emp_id'])) {
			redirect('dashboard#');
        } else $this->load->view('login');
	}

	public function validLogin() {
        $userN = $this->input->post()['username'];
        $passW =  $this->input->post()['password'];

		if($this->input->server('REQUEST_METHOD') == TRUE) {
			if($this->Login_model->recordCount($userN, $passW) == 1) {
				$result = $this->Login_model->fetch_user_login($userN, $passW);
				$this->session->set_userdata(
					array (
						'emp_id' => $result->emp_id,
						'username' => $result->username,
						'display_name' => $result->display
					)
				);
				redirect('dashboard#');
			} else {
				$this->session->set_flashdata(
					array(
						'msgerr' => '<p class="text-center login-box-msg mb-3" style="color:red;">Username or password is incorrect.</p>'
					)
				);
				redirect('login', 'refresh');
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}
}
