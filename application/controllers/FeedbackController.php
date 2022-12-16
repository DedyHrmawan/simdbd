<?php
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

    public function ajxGet(){
        $data['filter'] = 'id_feedback = '.$_POST['id_feedback'];

        $datas = $this->Feedback->get($data);

        $date=date_create($datas[0]->tgl_feedback);
        $datas[0]->tgl_feedback = date_format($date,"d F Y");

        echo json_encode($datas);
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Feedback->delete($dataDelete);
        redirect('feedback');
    }
}
