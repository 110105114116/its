<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Employee_model');
    }

	public function index() {
        if($this->session->userdata['emp_id']) {
			$result['data'] = $this->Employee_model->getAllEmp();
            $this->load->view('employee', $result);
        } else redirect('', 'refresh');
	}

	public function add() {
        if($this->session->userdata['emp_id']) {
			$result['department'] = $this->Employee_model->getDept();
			$result['position'] = $this->Employee_model->getPosi();
            $this->load->view('add_employee', $result);
        } else redirect('', 'refresh');
	}

	public function addEmp() {
		$insertData['empId'] = $this->input->get()['emp_id'];
		$insertData['fNameTh'] = $this->input->get()['first_name_th'];
		$insertData['lNameTh'] = $this->input->get()['last_name_th'];
		$insertData['fNameEn'] = $this->input->get()['first_name_en'];
		$insertData['lNameEn'] = $this->input->get()['last_name_en'];
		$insertData['gender'] = $this->input->get()['gender'];
		$insertData['sDate'] = $this->input->get()['start_date'];
		$insertData['deptEmp'] = $this->input->get()['dept_emp'];
		$insertData['posiEmp'] = $this->input->get()['posi_emp'];
		$insertData['typeEmp'] = $this->input->get()['type_emp'];

		
		if($this->Employee_model->addEmployee($insertData) == 1) {
			redirect('employee/add', 'refresh');
		} else {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เนื่องจากมีข้อมูลพนักงานในระบบอยู่แล้ว</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('employee/add', 'refresh');
		}
	}

	public function get_Full_data() {
		$id = $this->input->post("id");
        
		$data['fullData'] = $this
			->Employee_model
			->getDatainModal($id);
			
		$this->load->view('employee', $data);
	}

	public function getEmpData() {
        $id = $this->input->post("id");

        $result['fullData'] = $this->Employee_model->getDatainModal($id);
		$result['department'] = $this->Employee_model->getDept();
		$result['position'] = $this->Employee_model->getPosi();

        $this->load->view('employee_detail', $result);
	}

	public function updateInfo(){
        $updateData['empId'] = $this->input->post("empId");

		$nameTH = (explode(" ", strval($this->input->post("nameTh"))));
		$updateData['f_name_th'] = $nameTH[0];
		$updateData['l_name_th'] = $nameTH[1];

		$nameEN = (explode(" ", strval($this->input->post("nameEn"))));
		$updateData['f_name_en'] = $nameEN[0];
		$updateData['l_name_en'] = $nameEN[1];

        $updateData['email'] = $this->input->post("email");
        $updateData['phone'] = $this->input->post("phone");
        $updateData['deptId'] = $this->input->post("deptId");
        $updateData['pId'] = $this->input->post("pId");
        $updateData['type'] = $this->input->post("workType");

		if($this->Employee_model->updateEmployee($updateData) == 1) {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-check checked"></i>
						<div class="message">
						<span class="text text-1">สำเร็จ</span>
						<span class="text text-2">อัพเดทข้อมูลพนักงานเรียบร้อยแล้ว</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('employee', 'refresh');
		} else {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เนื่องจากมีข้อมูลพนักงานในระบบอยู่แล้ว</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('employee', 'refresh');
		}
	}

	public function chgStatus() {
        $empId = $this->input->post("empId");
        $sId = $this->input->post("status");

		if($this->Employee_model->changeStatus($empId, $sId) == 1) {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-check checked"></i>
						<div class="message">
						<span class="text text-1">สำเร็จ</span>
						<span class="text text-2">เปลี่ยนสถานะของพนักงานเรียบร้อยแล้ว</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
		} else {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เกิดข้อผิดพลาด โปรดลองอีกครั้ง</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
		}
	}
}
