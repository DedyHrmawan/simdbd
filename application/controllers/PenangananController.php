<?php

class PenangananController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penanganan');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
            redirect('/');
        };
    }

	public function PenangananKasus()
	{
        $pelist = $this->Penanganan->getPE();
        $list = $this->Penanganan->getAll();
		$data = array(
			'title' => 'Penanganan Kasus - SIM DBD PUSKESMAS DINOYO',
            'listpe' => $pelist,
            'list' => $list
		);
		$this->template->admin('admin/VPenangananKasus', $data);
	}

    public function ajxGet(){
        $datas = $this->Penanganan->get($_POST['id_penanganan']);
        $date=date_create($datas[0]->tgl_pe);
        $datas[0]->tgl_pe = date_format($date,"d F Y");

        $date=date_create($datas[0]->tgl_penanganan);
        $datas[0]->tgl_penanganan = date_format($date,"d F Y");
        echo json_encode($datas);
    }

    public function store()
    {
        $param = $_POST;    
        $store = array();

        if($param['penularan'] == 'Tidak'){
            $store['id_pe'] = $param['id_pe'];
            $store['nik'] = $param['nik'];
            $store['jumlah_rumah'] = $param['jumlah_rumah_psn'];
            $store['kelurahan'] = $param['kelurahan_psn'];
            $store['keterangan'] = $param['keterangan_psn'];
            $store['penularan'] = $param['penularan'];
            $store['radius'] = '-';
            $date=date_create($param['tgl_pe']);
            $store['tgl_pe'] = date_format($date,"Y-m-d");
            
            $date=date_create($param['tgl_penanganan_psn']);
            $store['tgl_penanganan'] = date_format($date,"Y-m-d");
        }else if($param['penularan'] == 'Ya'){
            $store['id_pe'] = $param['id_pe'];
            $store['nik'] = $param['nik'];
            $store['jumlah_rumah'] = $param['jumlah_rumah'];
            $store['kelurahan'] = $param['kelurahan'];
            $store['keterangan'] = $param['keterangan'];
            $store['penularan'] = $param['penularan'];
            $store['radius'] = $param['radius'];
            $date=date_create($param['tgl_pe']);
            $store['tgl_pe'] = date_format($date,"Y-m-d");
            
            $date=date_create($param['tgl_penanganan']);
            $store['tgl_penanganan'] = date_format($date,"Y-m-d");
        }   
        
        $this->Penanganan->insert($store);
        redirect('kasus'); 
    }    

    public function edit()
    {
        $param = $_POST;    
        $store = array();

        if($param['penularan'] == 'Tidak'){
            $store['id_pe'] = $param['id_pe'];
            $store['id_penanganan'] = $param['id_penanganan'];
            $store['nik'] = $param['nik'];
            $store['jumlah_rumah'] = $param['jumlah_rumah_psn'];
            $store['kelurahan'] = $param['kelurahan_psn'];
            $store['keterangan'] = $param['keterangan_psn'];
            $store['penularan'] = $param['penularan'];
            $store['radius'] = '-';
            $date=date_create($param['tgl_pe']);
            $store['tgl_pe'] = date_format($date,"Y-m-d");
            
            $date=date_create($param['tgl_penanganan_psn']);
            $store['tgl_penanganan'] = date_format($date,"Y-m-d");
        }else if($param['penularan'] == 'Ya'){
            $store['id_penanganan'] = $param['id_penanganan'];
            $store['id_pe'] = $param['id_pe'];
            $store['nik'] = $param['nik'];
            $store['jumlah_rumah'] = $param['jumlah_rumah'];
            $store['kelurahan'] = $param['kelurahan'];
            $store['keterangan'] = $param['keterangan'];
            $store['penularan'] = $param['penularan'];
            $store['radius'] = $param['radius'];
            $date=date_create($param['tgl_pe']);
            $store['tgl_pe'] = date_format($date,"Y-m-d");
            
            $date=date_create($param['tgl_penanganan']);
            $store['tgl_penanganan'] = date_format($date,"Y-m-d");
        }   
        
        $this->Penanganan->update($store);
        redirect('kasus'); 
    }  

    public function ajxGetPE()
    {
        $datas = $this->Penanganan->getNama($_POST['id_pe']);

        $date=date_create($datas[0]->tgl_pe);
        $datas[0]->tgl_pe = date_format($date,"d F Y");

        echo json_encode($datas);
    }

    public function delete()
    {
        $dataDelete = $_POST;
        $this->Penanganan->delete($dataDelete);
        redirect('kasus');
    }
	
}
