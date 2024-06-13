<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rfid_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getDataEmp($empId) {
        $this->db->select('*')
        ->from('employees e')
        ->join('department d', 'd.id = e.dept_id')
        ->where('emp_id', $empId);

        $query = $this->db->get();

        return $query->result();
    }

    public function checkEmp($empId){
        $this->db->select('*')
        ->from('employees')
        ->where('emp_id', $empId);

        return $this->db->count_all_results();
    }

    public function verifyRfid($key, $empId) {
        $this->db->set('rfid', $key);
        $this->db->where('emp_id', $empId);
        return $this->db->update('employees');
    }
}