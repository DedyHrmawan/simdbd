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
		$data = array(
			'title' => 'Home - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VBeranda', $data);
	}
	public function DataPasien()
	{
		$data = array(
			'title' => 'Data Pasien - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VDataPasien', $data);
	}
	public function JentikBerkala()
	{
		$data = array(
			'title' => 'Pengamatan Jentik Berkala - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VJentikBerkala', $data);
	}
	public function Epidemiologis()
	{
		$data = array(
			'title' => 'Penyelidikan Epidemiologis - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VEpidemiologis', $data);
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
	public function Feedback()
	{
		$data = array(
			'title' => 'Feedback - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VFeedback', $data);
	}
	public function Info()
	{
		$data = array(
			'title' => 'Informasi - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VInfo', $data);
	}
	public function Carousel()
	{
		$data = array(
			'title' => 'Carousel - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VCarousel', $data);
	}

	//depan
	public function Beranda()
	{
		$data = array(
			'title' => 'Beranda - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->depan('depan/VBeranda', $data);
	}

	public function Login()
	{
		$data = array(
			'title' => 'Login - SIM DBD PUSKESMAS DINOYO'
		);
		$this->load->view('depan/VLogin', $data);
	}

	public function Informasi()
	{
		$data = array(
			'title' => 'Informasi - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->depan('depan/VInformasi', $data);
	}
}
