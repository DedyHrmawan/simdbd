<?php
class DepanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Depan');
    }    

	public function Beranda()
	{
        $carousel = $this->Depan->getCarousel();
        $informasi = $this->Depan->getInformasi();
        $chart = $this->Depan->getChart();
        $mapsdata = $this->Depan->getMapsData(date("m"),date("Y"));
        $dataChart = array();
        $dataStr = '';

        for($i = 0; $i < 12; $i++){
            $dataChart[$i] = 0;
        }
        foreach($chart as $item){
            $dataChart[$item->bulan-1] = $item->total;
        }
        foreach($dataChart as $item){
            $dataStr = $dataStr.$item.',';
        }

        $totalKasus = array(0,0,0,0,0,0);
        foreach($mapsdata as $item){
            if($item->nama_kelurahan == 'Ketawanggede'){
                $totalKasus[0] = $item->total;
            }else if($item->nama_kelurahan == 'Dinoyo'){
                $totalKasus[1] = $item->total;
            }else if($item->nama_kelurahan == 'Merjosari'){
                $totalKasus[2] = $item->total;
            }else if($item->nama_kelurahan == 'Tlogomas'){
                $totalKasus[3] = $item->total;
            }else if($item->nama_kelurahan == 'Sumbersari'){
                $totalKasus[4] = $item->total;
            }else if($item->nama_kelurahan == 'Tunggulwulung'){
                $totalKasus[5] = $item->total;
            }
        }

		$data = array(
			'title' => 'Beranda - SIM DBD PUSKESMAS DINOYO',
            'carousel' => $carousel,
            'informasi' => $informasi,
            'dataChart' => $dataStr,
            'kasus' => $totalKasus
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

	public function Informasi($param)
	{
        $data['filter'] = 'id_info = '.$param;
        $informasi = $this->Depan->getOtherInfo($data);	
        $list = $this->Depan->getListInfo();	
		$data = array(
			'title' => 'Informasi - SIM DBD PUSKESMAS DINOYO',
            'informasi' => $informasi,
            'list' => $list
		);
		$this->template->depan('depan/VInformasi', $data);
	}

    public function kirimfeedback()
    {
        $param = $_POST;

        $this->Depan->insert($param);
        $this->session->set_flashdata('success_feedback','Berhasil mengirim feedback. Terima kasih!');
        redirect('/#feedback');
    }

    public function InfoDepan()
    {
        redirect('/#informasi');
    }

    public function chartChange(){
        $chart = $this->Depan->getChartChange($_POST['kel']);
        $dataChart = array();

        for($i = 0; $i < 12; $i++){
            $dataChart[$i] = 0;
        }
        foreach($chart as $item){
            $dataChart[$item->bulan-1] = $item->total;
        }

        echo json_encode($dataChart);
    }
}
