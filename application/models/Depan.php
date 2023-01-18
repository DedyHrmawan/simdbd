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
    public function getYear(){
        $sql = "SELECT YEAR(tgl_sakit) as tahun FROM PENDERITA GROUP BY YEAR(tgl_sakit) ORDER BY YEAR(tgl_sakit) DESC";
        $res = $this->db->query($sql)->result_array();
        return $res;
    }
    public function getChart($y){
        $sql = "SELECT COUNT(id_px) as total,MONTH(tgl_sakit) as bulan FROM penderita WHERE nama_kelurahan = 'Dinoyo' AND YEAR(tgl_sakit) = $y GROUP BY MONTH(tgl_sakit)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getChartChange($k, $y){
        $sql = "SELECT COUNT(id_px) as total,MONTH(tgl_sakit) as bulan FROM penderita WHERE nama_kelurahan = '$k' AND YEAR(tgl_sakit) = $y GROUP BY MONTH(tgl_sakit)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getMapsData($m, $y){
        $sql = "SELECT nama_kelurahan,COUNT(id_px) as total FROM penderita WHERE MONTH(tgl_sakit)='$m' AND YEAR(tgl_sakit)='$y' GROUP BY nama_kelurahan";
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