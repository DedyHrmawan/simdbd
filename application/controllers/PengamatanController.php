<?php
class PengamatanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
			redirect('/');
		};
        $this->load->model('Pengamatan');
    }

	public function JentikBerkala()
	{
        $list = $this->Pengamatan->getAll();
		$data = array(
			'title' => 'Pengamatan Jentik Berkala - SIM DBD PUSKESMAS DINOYO',
            'list' => $list
		);
		$this->template->admin('admin/VJentikBerkala', $data);
	}

    public function store()
    {
        $param = $_POST;
        $param['total_periksa'] = $param['jml_tandon_dlm_periksa']+$param['jml_tandon_luar_periksa'];
        $param['total_pos']     = $param['jml_tandon_dlm_jentik']+$param['jml_tandon_luar_jentik'];
        $date=date_create($param['tgl_pjb']);
        $param['tgl_pjb'] = date_format($date,"Y-m-d");

        $this->Pengamatan->insert($param);
        redirect('jentik');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_pjb = '.$_POST['id_pjb'];
        $datas = $this->Pengamatan->get($data);
        $date=date_create($datas[0]->tgl_pjb);
        $datas[0]->tgl_pjb = date_format($date,"d F Y");
        echo json_encode($datas);
    }

    public function edit(){
        $dataEdit = $_POST;
        
        $dataEdit['total_periksa'] = $dataEdit['jml_tandon_dlm_periksa']+$dataEdit['jml_tandon_luar_periksa'];
        $dataEdit['total_pos']     = $dataEdit['jml_tandon_dlm_jentik']+$dataEdit['jml_tandon_luar_jentik'];
        $date=date_create($dataEdit['tgl_pjb']);
        $dataEdit['tgl_pjb'] = date_format($date,"Y-m-d");

        $this->Pengamatan->update($dataEdit);

        redirect('jentik');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pengamatan->delete($dataDelete);
        redirect('jentik');
    }
}
