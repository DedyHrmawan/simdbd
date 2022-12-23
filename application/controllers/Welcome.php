<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Welcome extends CI_Controller
{
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
	public function LaporanGolongan()
	{
		$data = array(
			'title' => 'Laporan Golongan Umur dan Jenis Kelamin - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VLaporanGolongan', $data);
	}

	public function PenangananKasus()
	{
		$data = array(
			'title' => 'Penanganan Kasus - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VPenangananKasus', $data);
	}
}
