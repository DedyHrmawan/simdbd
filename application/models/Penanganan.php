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
    public function getPE(){
        $sql = "SELECT * FROM epidemiologi e WHERE e.id_pe NOT IN (SELECT id_pe FROM penanganan)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getNama($param){
        $sql = "SELECT e.*,p.nik_px,p.id_px FROM epidemiologi e, penderita p WHERE e.id_px = p.id_px AND e.id_pe = '$param'";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function get($param){
        $sql = "SELECT * FROM penanganan WHERE id_penanganan = '$param'";
        $res = $this->db->query($sql)->result();
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