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
}