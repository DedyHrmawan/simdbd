<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengamatan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("id_pjb", "asc");
        $res = $this->db->get('pjb')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pjb', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('pjb', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_pjb', $param['id_pjb'])->update('pjb', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('pjb');
        return true;
    }
}