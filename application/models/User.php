<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('pengguna')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pengguna', $filter)->result();
        return $res;
    }
    public function update($param){
        $this->db->where('id_pengguna', $param['id_pengguna'])->update('pengguna', $param);
        return true;
    }
    public function insert($param){
        $this->db->insert('pengguna', $param);
        return $this->db->insert_id();
    }
}