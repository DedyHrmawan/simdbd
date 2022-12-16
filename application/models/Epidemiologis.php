<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Epidemiologis extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT * FROM epidemiologi e, penderita p WHERE e.id_px = p.id_px";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getNik(){
        $this->db->select('nik_px,id_px');
        $this->db->order_by("id_px", "asc");
        $res = $this->db->get('penderita')->result();
        return $res;
    }
    public function getPasien($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('penderita', $filter)->result();
        return $res;
    }
    public function getAmped($param){
        $sql = "SELECT e.*, p.*, e.latitude as lt, e.longitude as ld FROM epidemiologi e, penderita p WHERE e.id_px = p.id_px AND e.id_pe = '$param'";
        $res = $this->db->query($sql)->result();
        return $res;        
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('penderita', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('epidemiologi', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_pe', $param['id_pe'])->update('epidemiologi', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('epidemiologi');
        return true;
    }
}