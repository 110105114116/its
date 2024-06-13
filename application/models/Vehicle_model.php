<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getVehicles() {
        $this->db->select('CONCAT(v.category," ",v.no) as license_plate,
        v.type,
        v.emp_id,
        CONCAT(e.f_name_th," ",e.l_name_th) as fullname,
        d.name as department,
        d.location as location
        ')
        ->from('vehicles v')
        ->join('employees e', 'e.emp_id = v.emp_id')
        ->join('department d', 'd.id = e.dept_id')
        ->where('e.s_id = 1');

        $query = $this->db->get();

        return $query->result();
    }

    public function addVehicle($data) {
        $this->db->select('*')
        ->from('vehicles')
        ->where('category', $data['category'])
        ->where('no', $data['no']);

        $countEmp = $this->db->count_all_results();

        if($countEmp >= 1) {
            return "ไม่สามารถเพิ่มยานพาหนะได้ เนื่องจากมีข้อมูลอยู่แล้ว";
        } else {
            $data = array(
                    'emp_id' => $data['empId'],
                    'category' => $data['category'],
                    'no' => $data['no'],
                    'type' => $data['type'],
            );
            
            return $this->db->insert('vehicles', $data);
        }
    }
}