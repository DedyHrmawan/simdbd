<?php
class PasienController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
			redirect('/');
		};
        $this->load->model('Pasien');
    }

	public function DataPasien()
	{
        $list = $this->Pasien->getAll();
		$data = array(
			'title' => 'Data Pasien - SIM DBD PUSKESMAS DINOYO',
            'list' => $list
		);
		$this->template->admin('admin/VDataPasien', $data);
	}

    public function store()
    {
        $param = $_POST;

        $pasien = $this->Pasien->get(['filter' => ['nik_px' => $param['nik_px']]]);
        if($pasien != NULL){
            $this->session->set_flashdata('failed_store','NIK telah terdaftar!');
            redirect('datapasien');
        }

        $date=date_create($param['dob_px']);
        $param['dob_px'] = date_format($date,"Y-m-d");
        
        $date=date_create($param['tgl_sakit']);
        $param['tgl_sakit'] = date_format($date,"Y-m-d");
        
        $date=date_create($param['tgl_masuk_rumkit']);
        $param['tgl_masuk_rumkit'] = date_format($date,"Y-m-d");

        $this->Pasien->insert($param);
        redirect('datapasien');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_px = '.$_POST['id_px'];

        $datas = $this->Pasien->get($data);
        
        $date=date_create($datas[0]->dob_px);
        $datas[0]->dob_px = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_sakit);
        $datas[0]->tgl_sakit = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_masuk_rumkit);
        $datas[0]->tgl_masuk_rumkit = date_format($date,"d F Y");

        echo json_encode($datas);
    }

    public function ajxGetTambah(){
        $data['filter'] = 'nik_px = '.$_POST['nik_px'];

        $datas = $this->Pasien->get($data);
        
        if(!empty($datas)){            
            $date=date_create($datas[0]->dob_px);
            $datas[0]->dob_px = date_format($date,"d F Y");
        }

        echo json_encode($datas);
    }

    public function edit(){
        $param = $_POST;

        
        $date=date_create($param['dob_px']);
        $param['dob_px'] = date_format($date,"Y-m-d");
        
        $date=date_create($param['tgl_sakit']);
        $param['tgl_sakit'] = date_format($date,"Y-m-d");
        
        $date=date_create($param['tgl_masuk_rumkit']);
        $param['tgl_masuk_rumkit'] = date_format($date,"Y-m-d");

        $this->Pasien->update($param);

        redirect('datapasien');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pasien->delete($dataDelete);
        redirect('datapasien');
    }
}
