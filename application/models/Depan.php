<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Depan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getCarousel(){
        $sql = "SELECT * FROM carousel WHERE status = 1 ORDER BY id_carousel DESC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getInformasi(){
        $sql = "SELECT * FROM informasi WHERE status = 1 ORDER BY id_info DESC LIMIT 3";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getChart(){
        $sql = "SELECT COUNT(id_px) as total,MONTH(tgl_sakit) as bulan FROM penderita GROUP BY MONTH(tgl_sakit)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getChartChange($param){
        $sql = "SELECT COUNT(id_px) as total,MONTH(tgl_sakit) as bulan FROM penderita WHERE nama_kelurahan = '$param'  GROUP BY MONTH(tgl_sakit)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('feedback', $param);
        return $this->db->insert_id();
    }
    public function getOtherInfo($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('informasi', $filter)->result();
        return $res;
    }
    public function getListInfo(){
        $sql = "SELECT id_info,judul_info FROM informasi WHERE status=1 ORDER BY id_info ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
}