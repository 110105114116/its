<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('
            eq.id as id,
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
        ->join('employees e', 'e.emp_id = eq.emp_id', 'left')
        ->join('equipment_type t', 't.id = eq.type_id', 'left')
        ->where('e.s_id = ', 1);
        // ->join('ip_address i', 'i.eq_id = eq.id', 'left');

        $query = $this->db->get();

        return $query->result();
    }

    public function get_equip_type(){
        $this->db->select('*')
        ->from('equipment_type')
        ->where('status', 1);

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

    public function get_model(){
        $this->db->select('model')
        ->from('equipment')
        ->group_by('model'); 

        $query = $this->db->get();

        return $query->result();
    }

    public function addEquipment($insData) {
        $data = array(
            // 'code' => $insData['code'],
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

        $result['statusIS'] = $this->db->insert('equipment', $data);
        $result['id'] = $this->db->insert_id();

        return $result;
    }

    public function addPlan($id) {
        for($i = 1 ; $i <= 7 ; $i++) {
            $data = array(
                'topic' => $i,
                'equip_id' => $id
            );
            $this->db->insert('plan_maintenance', $data);
        }
    }

    public function get_plan($id) {
        $this->db->select('*')
        ->from('plan_maintenance')
        ->where('equip_id', $id);

        $query = $this->db->get();

        return $query->result();
    }

    public function updateIP($eq_id, $ip) {
        $data = array(
            'eq_id' => $eq_id,
            'status' => 2
        );
        
        $this->db->where('ip', $ip);
        $this->db->update('ip_address', $data);
    }

    public function getIP($ip) {
        $sql = 'select 
            i.id as no,
            i.ip as ip,
            e.name as name,
            t.name as type,
            em.emp_id as emp_id,
            CONCAT(em.f_name_th," ",em.l_name_th) as fullname,
            e.location as location,
            e.factory as fac,
            i.status as status,
            i.internet as internet
        from ip_address i
        left join equipment e on i.eq_id = e.id
        left join equipment_type t on t.id = e.type_id
        left join employees em on em.emp_id = e.emp_id
        where i.ip like "10.112.'.$ip.'%"
        group by i.ip';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function get_count_equip() {
        $this->db->select('
            SUM(case when status = 1 then 1 else 0 end) as active,
            SUM(case when status != 1 then 1 else 0 end) as inactive,
            count(*) as count
        ')
        ->from('equipment');

        $query = $this->db->get();

        return $query->row();
    }

    public function delEquip($id) {
        return $this->db->delete('equipment', array('id' => $id));
    }

    public function get_by_id($id) {
        $this->db->select('ip_address')
        ->from('equipment')
        ->where('id = ', $id);

        $query = $this->db->get();

        return $query->row();
    }

    public function ipReset($ip) {
        $data = array(
            'eq_id' => '',
            'status' => 1
        );
        
        $this->db->where('ip', $ip);
        $this->db->update('ip_address', $data);
    }
}