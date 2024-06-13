<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Vehicle_model');
    }

	public function index() {
        if($this->session->userdata['emp_id']) {
            $result['data'] = $this->Vehicle_model->getVehicles();
            $this->load->view('vehicle', $result);
        } else redirect('', 'refresh');
	}

    public function add() {
        if($this->session->userdata['emp_id']) {
            $this->load->view('add_vehicle');
        } else redirect('', 'refresh');
    }

    public function addVehicle() {
        $insertData['empId'] = $this->input->get()['emp_id'];
		$insertData['category'] = $this->input->get()['licenseCat'];
		$insertData['no'] = $this->input->get()['licenseNo'];
		$insertData['type'] = $this->input->get()['licenseType'];

		
		if($this->Vehicle_model->addVehicle($insertData) == 1) {
			redirect('vehicle/add', 'refresh');
		} else {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เนื่องจากมีข้อมูลยานพาหนะในระบบอยู่แล้ว</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('vehicle/add', 'refresh');
		}
    }
}

