<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function fetch_user_login($userN, $passW) {
        $this->db->where('username', $userN);
        $this->db->where('password', $passW);
        $query = $this->db->get('user');

        return $query->row();
    }

    public function recordCount($userN, $passW) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $userN);
        $this->db->where('password', $passW);
        
        return $this->db->count_all_results();
    }

    public function getVehicleLog($start, $end) {
        $sql = 'select 
            vl.emp_id,
            concat(e.f_name_th," ",e.l_name_th) as fullname,
            d.name as department,
            p.name as position,
            count(*) as day,
            SUM(CASE WHEN vl.type = "moto" THEN 1 ELSE 0 end) as motocycle,
            SUM(CASE WHEN vl.type = "car" THEN 1 ELSE 0 end) as car,
            d.location as location
        from vehicle_log vl 
        join employees e on e.emp_id = vl.emp_id 
        join department d on d.id = e.dept_id 
        join position p on p.id = e.p_id 
        where vl.ve_in >= "'.$start.' 00:00:00"
        and vl.ve_in <= "'.$end.' 23:59:59"
        and e.s_id = 1
        group by emp_id';

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function getDatainModal($id, $sDate, $eDate){
        $this->db->select('*')
        ->from('vehicle_log')
        ->where('emp_id', $id)
        ->where('ve_in >= ', $sDate)
        ->where('ve_in <= ', $eDate)
        ->order_by('ve_in', 'DESC');

        $query = $this->db->get();

        return $query->result();
    }
}