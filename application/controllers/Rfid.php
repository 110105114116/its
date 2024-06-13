<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rfid extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Rfid_model');
    }

	public function index() {
        if($this->session->userdata['emp_id']) {
            $this->load->view('rfid');
        } else redirect('', 'refresh');
	}

    public function getEmp() {
        $empId = $this->input->get()['emp_id'];
        $count = $this->Rfid_model->checkEmp($empId);

        if ($count > 0) {
            $result['data'] = $this->Rfid_model->getDataEmp($empId);
            $this->load->view('rfid', $result);
        } else {
            $this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เนื่องจากไม่มีข้อมูลรหัสพนักงานในระบบ</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
            redirect('rfid', 'refresh');
        }
    }

    public function verify() {
        $key = $this->input->get()['rfid_no'];
        $empId = $this->input->get()['emp_id'];

        $result = $this->Rfid_model->verifyRfid($key, $empId);
        
        if($result){
            $this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-check checked"></i>
						<div class="message">
						<span class="text text-1">สำเร็จ</span>
						<span class="text text-2">จับคู่รหัสพนักงานกับบัตร เรียบร้อย</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress checked active"></div>
				</div>'
				)
			);
            redirect('rfid/getEmp?emp_id='.$empId, 'refresh');
        } else {
            $this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-close check"></i>
						<div class="message">
						<span class="text text-1">ไม่สำเร็จ</span>
						<span class="text text-2">เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress close active"></div>
				</div>'
				)
			);
            redirect('rfid/getEmp?emp_id='.$empId, 'refresh');
        }
    }
}
