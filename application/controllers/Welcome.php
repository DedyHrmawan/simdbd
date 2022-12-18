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

	public function PenangananKasus()
	{
		$data = array(
			'title' => 'Penanganan Kasus - SIM DBD PUSKESMAS DINOYO'
		);
		$this->template->admin('admin/VPenangananKasus', $data);
	}

	public function email()
    {
        $mail = new PHPMailer();

        //Server settings
        // $mail->SMTPDebug = 'smtp.googlemail.com';
        $mail->isSMTP();
        $mail->Host       = 'smtp.googlemail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'simsdbd@gmail.com';
        $mail->Password   = 'rtpvpjcratesonpg';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        
		$mail->Timeout = 60;
		$mail->SMTPKeepAlive = true;

        //Recipients
        $mail->setFrom('simsdbd@gmail.com', 'SIM DBD');
        $mail->addReplyTo('simsdbd@gmail.com', 'SIM DBD');
        $mail->addAddress('deblenk.dh@gmail.com');
       
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Subjek From Feedback';
        $mail->Body    = 'Pesan from input';
        
        if (!$mail->send()) {
            echo 'Email tidak dapat terkirim !';
            echo 'Email Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Email berhasil dikirim !';
        }
    }
	
}
