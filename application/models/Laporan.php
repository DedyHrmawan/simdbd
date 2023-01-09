<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT * FROM epidemiologi e, penderita p WHERE e.id_px = p.id_px ORDER BY e.tgl_pe";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function get($month,$year){
        $sql = "SELECT * FROM epidemiologi e, penderita p WHERE e.id_px = p.id_px AND MONTH(tgl_sakit) = '$month' AND YEAR(tgl_sakit) = '$year' ORDER BY e.tgl_pe";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getPenderita($month,$year){
        $sql = "SELECT p.*,e.tgl_pe,e.id_pe, a.penularan,a.tgl_penanganan FROM penderita p LEFT JOIN epidemiologi e ON p.id_px = e.id_px LEFT JOIN penanganan a ON e.id_pe = a.id_pe WHERE MONTH(tgl_sakit) = '$month' AND YEAR(tgl_sakit) = '$year' ORDER BY e.tgl_pe";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getPasien($param){
        $sql = "SELECT * FROM penderita WHERE id_px = '$param'";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getYear(){
        $sql = "SELECT YEAR(tgl_sakit) as thn FROM penderita GROUP BY YEAR(tgl_sakit)";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getKelurahan($m, $y){
        $sql = "SELECT nama_kelurahan as kelurahan FROM penderita WHERE MONTH(tgl_sakit) = '$m' AND YEAR(tgl_sakit) = '$y' group by kelurahan order by nama_kelurahan ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getData($m, $y){
        $sql = "SELECT gender_px,umur_px,nama_kelurahan FROM penderita WHERE MONTH(tgl_sakit) = '$m' AND YEAR(tgl_sakit) = '$y' order by nama_kelurahan ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
}