<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("id_px", "asc");
        $res = $this->db->get('penderita')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('penderita', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('penderita', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_px', $param['id_px'])->update('penderita', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('penderita');
        return true;
    }
}