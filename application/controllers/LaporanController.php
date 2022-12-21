<?php

class LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
            redirect('/');
        };
    }

	public function LaporanBulanan()
	{
        $list = $this->Laporan->getAll();
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO',
            'list' => $list
		);
		$this->template->admin('admin/VLaporanBulanan', $data);
	}
}
