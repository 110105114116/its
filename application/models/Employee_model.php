<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAllEmp() {
        $this->db->select('e.emp_id as empId,
        CONCAT(e.f_name_th," ",e.l_name_th) as fullname,
        CONCAT(e.f_name_en," ",e.l_name_en) as fullnameen,
        d.name as department,
        p.name as position,
        e.type as type,
        e.gender as gender,
        e.begin_date as sDate,
        s_id as status,
        d.location as location')
        ->from('employees e')
        ->join('department d', 'd.id = e.dept_id')
        ->join('position p', 'p.id = e.p_id')
        ->where('e.s_id <= ', 1);

        $query = $this->db->get();

        return $query->result();
    }

    public function addEmployee($data) {
        $this->db->select('*')
        ->from('employees')
        ->where('emp_id', $data['empId']);

        $countEmp = $this->db->count_all_results();

        if($countEmp >= 1) {
            return "ไม่สามารถเพิ่มรายชื่อได้ เนื่องจากมีข้อมูลอยู่แล้ว";
        } else {
            $data = array(
                    'emp_id' => $data['empId'],
                    'f_name_th' => $data['fNameTh'],
                    'l_name_th' => $data['lNameTh'],
                    'f_name_en' => $data['fNameEn'],
                    'l_name_en' => $data['lNameEn'],
                    'begin_date' => $data['sDate'],
                    'dept_id' => $data['deptEmp'],
                    'p_id' => $data['posiEmp'],
                    'type' => $data['typeEmp'],
                    'gender' => $data['gender'],
            );
            
            return $this->db->insert('employees', $data);
        }
    }

    public function getDept() {
        $this->db->select('*');
        $query = $this->db->get('department');
        return $query->result();
    }

    public function getPosi() {
        $this->db->select('*');
        $query = $this->db->get('position');
        return $query->result();
    }

    public function getDatainModal($id){
        $this->db->select('e.emp_id as empId,
            CONCAT(e.f_name_th," ",e.l_name_th) as fullname,
            CONCAT(e.f_name_en," ",e.l_name_en) as fullnameen,
            e.phone as phone,
            e.email as email,
            d.name as department,
            p.name as position,
            e.type as type,
            e.gender as gender,
            e.begin_date as sDate,
            s_id as status,
            d.id as deptId,
            p.id as pId'
        )
        ->from('employees e')
        ->join('department d', 'd.id = e.dept_id')
        ->join('position p', 'p.id = e.p_id')
        ->where('e.emp_id', $id)
        ->where('e.s_id <= ', 1);

        $query = $this->db->get();

        return $query->row();
    }

    public function updateEmployee($data) {
        $dataUpdate = array(
                'f_name_th' => $data['f_name_th'],
                'l_name_th' => $data['l_name_th'],
                'f_name_en' => $data['f_name_en'],
                'l_name_en' => $data['l_name_en'],
                'dept_id' => $data['deptId'],
                'p_id' => $data['pId'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'type' => $data['type']
        );
        
        $this->db->where('emp_id', $data['empId']);
        return $this->db->update('employees', $dataUpdate);
    }

    public function changeStatus($empId, $sId) {
        $status = ($sId == 1) ? 0 : 1;

        $dataUpdate = array(
            's_id' => $status,
        );
    
        $this->db->where('emp_id', $empId);
        return $this->db->update('employees', $dataUpdate);
    }
}