<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class FeedbackController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
            redirect('/');
        };
    }

    public function Feedback()
    {
        $list = $this->Feedback->getAll();
        $data = array(
            'title' => 'Feedback - SIM DBD PUSKESMAS DINOYO',
            'list' => $list
        );
        $this->template->admin('admin/VFeedback', $data);
    }

    public function ajxGet()
    {
        $data['filter'] = 'id_feedback = ' . $_POST['id_feedback'];

        $datas = $this->Feedback->get($data);

        $date = date_create($datas[0]->tgl_feedback);
        $datas[0]->tgl_feedback = date_format($date, "d F Y");

        echo json_encode($datas);
    }

    public function delete()
    {
        $dataDelete = $_POST;
        $this->Feedback->delete($dataDelete);
        redirect('feedback');
    }

    public function email()
    {
        $param = $_POST;

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
        
        $mail->ClearAddresses();
        $mail->ClearAllRecipients();        
        $mail->addAddress($param['email']);
        //Content
        $mail->isHTML(true);
        $mail->Subject = $param['subjek'];
        $mail->Body    = $param['pesan'];
        
        if (!$mail->send()) {
            echo 'Email tidak dapat terkirim !';
            echo 'Email Error: ' . $mail->ErrorInfo;
            echo $param['email']; echo $param['subjek'];
        } else {
            redirect('feedback');
        }
    }

}
