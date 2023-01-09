<?php
class EpidemiologisController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
			redirect('/');
		};
        $this->load->model('Epidemiologis');
    }

	public function Epidemiologis()
	{
        $list = $this->Epidemiologis->getAll();
        $nik = $this->Epidemiologis->getNik();
		$data = array(
			'title' => 'Penyelidikan Epidemiologis - SIM DBD PUSKESMAS DINOYO',
            'list' => $list,
            'nik' => $nik
		);
		$this->template->admin('admin/VEpidemiologis', $data);
	}

    public function store()
    {
        $param = $_POST;

        if(!empty($param['nama_suspek'])){            
            $arr = array();
            for ($i = 0; $i < count($param['nama_suspek']); $i++) {
                array_push($arr, $param['nama_suspek'][$i]);
            }
            unset($param['nama_suspek']);
            $param['nama_suspek'] = implode(';', $arr);
        }

        if(!empty($param['gender_suspek'])){
            for ($i = 0; $i < count($param['gender_suspek']); $i++) {
                array_push($arr, $param['gender_suspek'][$i]);
            }
            unset($param['gender_suspek']);
            $param['gender_suspek'] = implode(';', $arr);
        }
        $arr = array();

        if(!empty($param['umur_suspek'])){            
            $arr = array();
            for ($i = 0; $i < count($param['umur_suspek']); $i++) {
                array_push($arr, $param['umur_suspek'][$i]);
            }
            unset($param['umur_suspek']);
            $param['umur_suspek'] = implode(';', $arr);
        }

        if(!empty($param['namakk'])){            
            $arr = array();
            for ($i = 0; $i < count($param['namakk']); $i++) {
                array_push($arr, $param['namakk'][$i]);
            }
            unset($param['namakk']);
            $param['nama_kk'] = implode(';', $arr);
        }
      
        if(!empty($param['latitude'])){$arr = array();
            for ($i = 0; $i < count($param['latitude']); $i++) {
                array_push($arr, $param['latitude'][$i]);
            }
            unset($param['latitude']);
            $param['latitude'] = implode(';', $arr);
        }        

        if(!empty($param['longitude'])){
            $arr = array();
            for ($i = 0; $i < count($param['longitude']); $i++) {
                array_push($arr, $param['longitude'][$i]);
            }
            unset($param['longitude']);
            $param['longitude'] = implode(';', $arr);
        }
        

        $totalperiksa = array();
        $totalpos = array();

        if(!empty($param['tandondlmperiksa'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandondlmperiksa']); $i++) {
                array_push($arr, $param['tandondlmperiksa'][$i]);
                array_push($totalperiksa, $param['tandondlmperiksa'][$i]);
            }
            unset($param['tandondlmperiksa']);
            $param['tandon_dlm_periksa'] = implode(';', $arr);
        }
        

        if(!empty($param['tandondlmpos'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandondlmpos']); $i++) {
                array_push($arr, $param['tandondlmpos'][$i]);
                array_push($totalpos, $param['tandondlmpos'][$i]);
            }
            unset($param['tandondlmpos']);
            $param['tandon_dlm_pos'] = implode(';', $arr);
        }
        

        if(!empty($param['tandonluarperiksa'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandonluarperiksa']); $i++) {
                array_push($arr, $param['tandonluarperiksa'][$i]);
                $totalperiksa[$i] += $param['tandonluarperiksa'][$i];
            }
            unset($param['tandonluarperiksa']);
            $param['tandon_luar_periksa'] = implode(';', $arr);
        }        

        if(!empty($param['tandonluarpos'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandonluarpos']); $i++) {
                array_push($arr, $param['tandonluarpos'][$i]);
                $totalpos[$i] += $param['tandonluarpos'][$i];
            }
            unset($param['tandonluarpos']);
        }        

        $param['tandon_luar_pos'] = implode(';', $arr);
        $param['total_periksa'] = implode(';', $totalperiksa);
        $param['total_pos'] = implode(';', $totalpos);

        $this->Epidemiologis->insert($param);
        redirect('epidemiologis');
    }    

    public function ajxGet(){
        $datas = $this->Epidemiologis->getAmped($_POST['id_pe']);

        $date=date_create($datas[0]->dob_px);
        $datas[0]->dob_px = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_sakit);
        $datas[0]->tgl_sakit = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_masuk_rumkit);
        $datas[0]->tgl_masuk_rumkit = date_format($date,"d F Y");

        $namalist = explode(";", $datas[0]->nama_suspek);
        $listgender = explode(";", $datas[0]->gender_suspek);
        $listumur = explode(";", $datas[0]->umur_suspek);
        $listkk = explode(";", $datas[0]->nama_kk);
        $listlat = explode(";", $datas[0]->lt);
        $listlong = explode(";", $datas[0]->ld);
        $listdlmper = explode(";", $datas[0]->tandon_dlm_periksa);
        $listdlmpos = explode(";", $datas[0]->tandon_dlm_pos);
        $listluarper = explode(";", $datas[0]->tandon_luar_periksa);
        $listluarpos = explode(";", $datas[0]->tandon_luar_pos);

        $datas[0]->listnama = $namalist;
        $datas[0]->listgender = $listgender;
        $datas[0]->listumur = $listumur;
        $datas[0]->listkk = $listkk;
        $datas[0]->listlat = $listlat;
        $datas[0]->listlong = $listlong;
        $datas[0]->listdlmper = $listdlmper;
        $datas[0]->listdlmpos = $listdlmpos;
        $datas[0]->listluarper = $listluarper;
        $datas[0]->listluarpos = $listluarpos;

        echo json_encode($datas);
    }

    public function ajxGetPasien(){
        $data['filter'] = 'id_px = '.$_POST['id_px'];

        $datas = $this->Epidemiologis->getPasien($data);

        $date=date_create($datas[0]->dob_px);
        $datas[0]->dob_px = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_sakit);
        $datas[0]->tgl_sakit = date_format($date,"d F Y");
        
        $date=date_create($datas[0]->tgl_masuk_rumkit);
        $datas[0]->tgl_masuk_rumkit = date_format($date,"d F Y");

        echo json_encode($datas);
    }

    public function edit(){
        $param = $_POST;

        if(!empty($param['nama_suspek'])){            
            $arr = array();
            for ($i = 0; $i < count($param['nama_suspek']); $i++) {
                array_push($arr, $param['nama_suspek'][$i]);
            }
            unset($param['nama_suspek']);
            $param['nama_suspek'] = implode(';', $arr);
        }

        if(!empty($param['gender_suspek'])){
            for ($i = 0; $i < count($param['gender_suspek']); $i++) {
                array_push($arr, $param['gender_suspek'][$i]);
            }
            unset($param['gender_suspek']);
            $param['gender_suspek'] = implode(';', $arr);
        }
        $arr = array();

        if(!empty($param['umur_suspek'])){            
            $arr = array();
            for ($i = 0; $i < count($param['umur_suspek']); $i++) {
                array_push($arr, $param['umur_suspek'][$i]);
            }
            unset($param['umur_suspek']);
            $param['umur_suspek'] = implode(';', $arr);
        }

        if(!empty($param['namakk'])){            
            $arr = array();
            for ($i = 0; $i < count($param['namakk']); $i++) {
                array_push($arr, $param['namakk'][$i]);
            }
            unset($param['namakk']);
            $param['nama_kk'] = implode(';', $arr);
        }
      
        if(!empty($param['latitude'])){$arr = array();
            for ($i = 0; $i < count($param['latitude']); $i++) {
                array_push($arr, $param['latitude'][$i]);
            }
            unset($param['latitude']);
            $param['latitude'] = implode(';', $arr);
        }        

        if(!empty($param['longitude'])){
            $arr = array();
            for ($i = 0; $i < count($param['longitude']); $i++) {
                array_push($arr, $param['longitude'][$i]);
            }
            unset($param['longitude']);
            $param['longitude'] = implode(';', $arr);
        }

        $totalperiksa = array();
        $totalpos = array();

        if(!empty($param['tandondlmperiksa'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandondlmperiksa']); $i++) {
                array_push($arr, $param['tandondlmperiksa'][$i]);
                array_push($totalperiksa, $param['tandondlmperiksa'][$i]);
            }
            unset($param['tandondlmperiksa']);
            $param['tandon_dlm_periksa'] = implode(';', $arr);
        }
        

        if(!empty($param['tandondlmpos'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandondlmpos']); $i++) {
                array_push($arr, $param['tandondlmpos'][$i]);
                array_push($totalpos, $param['tandondlmpos'][$i]);
            }
            unset($param['tandondlmpos']);
            $param['tandon_dlm_pos'] = implode(';', $arr);
        }
        

        if(!empty($param['tandonluarperiksa'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandonluarperiksa']); $i++) {
                array_push($arr, $param['tandonluarperiksa'][$i]);
                $totalperiksa[$i] += $param['tandonluarperiksa'][$i];
            }
            unset($param['tandonluarperiksa']);
            $param['tandon_luar_periksa'] = implode(';', $arr);
        }        

        if(!empty($param['tandonluarpos'])){
            $arr = array();
            for ($i = 0; $i < count($param['tandonluarpos']); $i++) {
                array_push($arr, $param['tandonluarpos'][$i]);
                $totalpos[$i] += $param['tandonluarpos'][$i];
            }
            unset($param['tandonluarpos']);
        }        
        $param['tandon_luar_pos'] = implode(';', $arr);
        $param['total_periksa'] = implode(';', $totalperiksa);
        $param['total_pos'] = implode(';', $totalpos);

        $this->Epidemiologis->update($param);

        redirect('epidemiologis');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Epidemiologis->delete($dataDelete);
        redirect('epidemiologis');
    }
}
