<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('
            eq.code as code,
            eq.name as equip_name,
            eq.model as model,
            eq.ip_address as ip_address,
            t.name as type,
            e.emp_id as emp_id,
            CONCAT(e.f_name_th," ",e.l_name_th) as fullname,
            eq.status as status,
            eq.ram as ram,
            eq.memory_type as mem_t,
            eq.memory as mem,
            eq.location as location,
            eq.factory as fac
        ')
        ->from('equipment eq')
        ->join('employees e', 'e.emp_id = eq.emp_id')
        ->join('equipment_type t', 't.id = eq.type_id');

        $query = $this->db->get();

        return $query->result();
    }

    public function get_equip_type(){
        $this->db->select('*')
        ->from('equipment_type');

        $query = $this->db->get();

        return $query->result();
    }

    public function get_manufactorer(){
        $this->db->select('*')
        ->from('manufacturer');

        $query = $this->db->get();

        return $query->result();
    }

    public function get_employee(){
        $this->db->select('emp_id, CONCAT(f_name_th," ",l_name_th) as name')
        ->from('employees');

        $query = $this->db->get();

        return $query->result();
    }

    public function addEquipment($insData) {
        $data = array(
            'code' => $insData['code'],
            'name' => $insData['equip_name'],
            'type_id' => $insData['equip_type'],
            'location' => $insData['location'],
            'ma_id' => $insData['manufac'],
            'factory' => $insData['factory'],
            'emp_id' => $insData['emp_id'],
            'purchase' => $insData['recive'],
            'ip_address' => $insData['ip'],
            'model' => $insData['model'],
            'memory_type' => $insData['mem_type'],
            'memory' => $insData['mem'],
            'ram' => $insData['ram'],
            'price' => $insData['price']
        );
        
        return $this->db->insert('equipment', $data);
    }
}