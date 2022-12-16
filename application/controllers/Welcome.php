<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	//admin
	public function Home()
	{
		if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
			redirect('/');
		};
		$data = array(
			'title' => 'Home - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VBeranda', $data);
	}
	public function LaporanHarian()
	{
		$data = array(
			'title' => 'Laporan Harian - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VLaporanHarian', $data);
	}
	public function LaporanBulanan()
	{
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VLaporanBulanan', $data);
	}
}
