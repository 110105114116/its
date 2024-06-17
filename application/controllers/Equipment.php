<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Equipment_model');
    }

	public function index() {
        if(isset($this->session->userdata['emp_id'])) {
            $result['data'] = $this->Equipment_model->get_all();
            $this->load->view('equipment', $result);
        } else $this->load->view('login');
	}

    public function add() {
        if(isset($this->session->userdata['emp_id'])) {
            $result['type'] = $this->Equipment_model->get_equip_type();
            $result['manuf'] = $this->Equipment_model->get_manufactorer();
            $result['emp'] = $this->Equipment_model->get_employee();
            $result['model'] = $this->Equipment_model->get_model();
            
            $this->load->view('add-equipment', $result);
        } else $this->load->view('login');
    }

    public function new() {
        // $insData['code'] = $this->input->post('code');
        $insData['equip_name'] = $this->input->post('equip_name');
        $insData['equip_type'] = $this->input->post('equip_type');
        $insData['location'] = $this->input->post('location');
        $insData['manufac'] = $this->input->post('manufac');
        $insData['factory'] = $this->input->post('factory');
        $insData['emp_id'] = $this->input->post('emp_id');
        $insData['recive'] = $this->input->post('recive');

        
        $insData['ip'] = $this->input->post('ip');
        $insData['model'] = $this->input->post('model');
        $insData['mem_type'] = $this->input->post('mem_type');
        $insData['mem'] = $this->input->post('mem');
        $insData['ram'] = $this->input->post('ram');
        $insData['price'] = $this->input->post('price');

        $result = $this->Equipment_model->addEquipment($insData);

        if($result['statusIS'] == 1) {
            $this->Equipment_model->addPlan($result['id']);

            $this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-check checked"></i>
						<div class="message">
						<span class="text text-1">สำเร็จ</span>
						<span class="text text-2">เพิ่มอุปกรณ์เรียบร้อย</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('equipment', 'refresh');
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
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('equipment/add', 'refresh');
		}
    }

    public function getPlanManage() {
        $id = $this->input->post('id');

        $result['data'] = $this->Equipment_model->get_plan($id);

        $this->load->view('plan-manage', $result);
    }
}
