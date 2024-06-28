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
            $result['data'] = $this
                ->Equipment_model
                ->get_all();

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

            $this->Equipment_model->updateIP($result['id'], $insData['ip']);

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

    public function getInfo() {
        $id = $this->input->post('id');

        $result['data'] = $this->Equipment_model->get_equipment_info($id);
        $result['type'] = $this->Equipment_model->get_equip_type();
        $result['emp'] = $this->Equipment_model->get_employee();
        $result['manufactorer'] = $this->Equipment_model->get_manufactorer();
        $result['os'] = $this->Equipment_model->get_os();

        $this->load->view('equipment_info', $result);
    }

    public function delEquipment() {
        $id = $this->input->post('equip_id');

        $eq = $this->Equipment_model->get_by_id($id);

        $ip = strtolower($eq->ip_address);

        if($this->Equipment_model->delEquip($id) == 1) {
            if($ip != 'dhcp') {
                $this->Equipment_model->ipReset($ip);
            }

            $this->session->set_flashdata(
                array(
                    'msgerr' => '<div class="toast active">
                    <div class="toast-content">
                        <i class="fa fa-solid fa-check checked"></i>
                        <div class="message">
                        <span class="text text-1">สำเร็จ</span>
                        <span class="text text-2">ลบข้อมูลอุปกรณ์เรียบร้อยแล้ว</span>
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

    public function update() {
        $dateUpdate['eqId'] = $this->input->post('eqId');
        $dateUpdate['eqIp'] = $this->input->post('eqIp');
        $dateUpdate['eqName'] = $this->input->post('eqName');
        $dateUpdate['eqType'] = $this->input->post('eqType');
        $dateUpdate['emp_id'] = $this->input->post('emp_id');
        $dateUpdate['eqLocation'] = $this->input->post('eqLocation');
        $dateUpdate['eqOs'] = $this->input->post('eqOs');
        $dateUpdate['eqModel'] = $this->input->post('eqModel');
        $dateUpdate['eqRam'] = $this->input->post('eqRam');
        $dateUpdate['eqMemType'] = $this->input->post('eqMemType');
        $dateUpdate['eqStorage'] = $this->input->post('eqStorage');
        $dateUpdate['eqManufac'] = $this->input->post('eqManufac');

        if($this->Equipment_model->update_equipment_info($dateUpdate) == 1) {
			$this->session->set_flashdata(
				array(
					'msgerr' => '<div class="toast active">
					<div class="toast-content">
						<i class="fa fa-solid fa-check checked"></i>
						<div class="message">
						<span class="text text-1">สำเร็จ</span>
						<span class="text text-2">เปลี่ยนข้อมูลอุปกรณ์เรียบร้อยแล้ว</span>
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
						<span class="text text-2">เกิดข้อผิดพลาด โปรดลองอีกครั้ง</span>
						</div>
					</div>
					<i class="fa fa-solid fa-close close"></i>
					<div class="progress active"></div>
				</div>'
				)
			);
			redirect('equipment', 'refresh');
		}
    }
}
