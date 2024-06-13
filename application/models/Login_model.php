<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function signIn($userN, $passW) {
        $this->db->select('*')
        ->from('user')
        ->where('username', $userN)
        ->where('password', $passW);

        $query = $this->db->get();

        return $query->result();
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
}