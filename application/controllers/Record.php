<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Record_model');
    }

	public function index() {
        if($this->session->userdata['emp_id']) {
            if(isset($this->input->get()['start_date'])
            && isset($this->input->get()['end_date'])) {
                $start = $this->input->get()['start_date'];
                $start = date_format(date_create($start),"Y-m-d 00:00:00");
                $data['sDate'] = $start;
                $end = $this->input->get()['end_date'];
                $end = date_format(date_create($end),"Y-m-d 23:59:59");
                $data['eDate'] = $end;

                $data['cal'] = $this->selectByDate($start, $end);
                $this->load->view('record', $data);
            } else $this->load->view('record');
        } else redirect('', 'refresh');
	}

    public function selectByDate($start, $end) {
        return $this->Record_model->getVehicleLog($start, $end);
    }

    public function get_Full_data(){
        $id = $this->input->post("id");
        $sDate = $this->input->post("sDate");
        $eDate = $this->input->post("eDate");

        // echo $id."<br>".$sDate."<br>".$eDate;

        $result['fullData'] = $this->Record_model->getDatainModal($id, $sDate, $eDate);

        $this->load->view('record_detail', $result);
    }
}

