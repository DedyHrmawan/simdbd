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
		$data = array(
			'title' => 'Penanganan Kasus - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VPenangananKasus', $data);
	}

    public function ajxGet()
    {
        $data['filter'] = 'id_penanganan = ' . $_POST['id_penanganan'];

        $datas = $this->Penanganan->get($data);

        echo json_encode($datas);
    }

    public function delete()
    {
        $dataDelete = $_POST;
        $this->Penanganan->delete($dataDelete);
        redirect('kasus');
    }
	
}
