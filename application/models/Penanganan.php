<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Penanganan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('penanganan')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('penanganan', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('penanganan', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_penanganan', $param['id_penanganan'])->update('penanganan', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('penanganan');
        return true;
    }
}