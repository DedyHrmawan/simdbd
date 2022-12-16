<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('feedback')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('feedback', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('feedback', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_feedback', $param['id_feedback'])->update('feedback', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('feedback');
        return true;
    }
}