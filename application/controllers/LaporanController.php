<?php

class LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan');
        $this->load->model('Pasien');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
            redirect('/');
        };
    }

	public function LaporanBulanan()
	{
        $tahun = $this->Laporan->getYear();        
        $list = $this->Laporan->getPenderita(date("m"),date("Y"));
        $bulan = date("m");
        $seltahun = date("Y");
        if(empty($tahun)){
            $tahun = date("Y");
        }
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO',
            'list' => $list,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'seltahun' => $seltahun
		);
		$this->template->admin('admin/VLaporanBulanan', $data);
	}

    public function filter()
	{
        $param = $_POST;
        $tahun = $this->Laporan->getYear();
        $list = $this->Laporan->getPenderita($param['mmonth'],$param['yyear']);
        $bulan = $param['mmonth'];
        if(empty($tahun)){
            $tahun = date("Y");
        }
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO',
            'list' => $list,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'seltahun' => $param['yyear']
		);
		$this->template->admin('admin/VLaporanBulanan', $data);
	}

    public function ajxGetKeterangan(){
        $datas = $this->Laporan->getPasien($_POST['id_px']);
        echo json_encode($datas);
    }
    
    public function editKet(){
        $param = $_POST;

        $store['ket'] = $param['ket'];
        $store['id_px'] = $param['id_px'];
        $this->Pasien->update($store);

        $tahun = $this->Laporan->getYear();
        $list = $this->Laporan->getPenderita($param['bln'],$param['thn']);
        $bulan = $param['bln'];
        if(empty($tahun)){
            $tahun = date("Y");
        }
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO',
            'list' => $list,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'seltahun' => $param['thn']
		);
		$this->template->admin('admin/VLaporanBulanan', $data);
    }

    public function downloadPdf($m, $y)
    {
        $this->load->library('Pdf');
        $this->load->library('table');
            
        $printed=date_create();
        $printed = date_format($printed,"d F Y");
		
		$pdf = new Pdf('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('wichtig');
		$pdf->SetTitle('Laporan Bulanan');
		$pdf->SetSubject('-');
		$pdf->SetKeywords('Laporan, Wichtig, PDF');

		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set font
		$pdf->SetFont('times', '', 12);
		
		// ---------------------------------------------------------
        $dataString = "";      
        $list = $this->Laporan->getPenderita($m,$y);
        $no = 1;
        foreach($list as $item){
            $week = ceil((date("d",strtotime($item->tgl_sakit)) - date("w",strtotime($item->tgl_sakit)) - 1) / 7) + 1; 

            $L = '';
            $P = '';
            $date = date_create($item->tgl_sakit);
            $sakit = date_format($date, "d F Y");
            $date = date_create($item->tgl_masuk_rumkit);
            $rumkit = date_format($date, "d F Y");
            $petgl = '';$fogging = '';$psn = '';
            if(!empty($item->tgl_pe)){
                $date = date_create($item->tgl_pe);
                $petgl = date_format($date, "d F Y");
            }
            if(!empty($item->penularan)){
                if($item->penularan == 'Ya'){
                    $date = date_create($item->tgl_penanganan);
                    $fogging = date_format($date, "d F Y");
                }else if($item->penularan == 'Tidak'){
                    $date = date_create($item->tgl_penanganan);
                    $psn = date_format($date, "d F Y");
                }                                    
            }
            if ($item->gender_px == 'Laki-laki') {
                $L = $item->umur_px;
            } else if ($item->gender_px == 'Perempuan') {
                $P = $item->umur_px;
            }

            $dataString = $dataString."
            <tr>
                <td style='text-align:center;'>$week</td>
                <td>$no</td>
                <td>$item->nama_px</td>
                <td>$L</td>
                <td>$P</td>
                <td>$item->nama_kelurahan</td>
                <td>$sakit</td>
                <td>$rumkit</td>
                <td>$petgl</td>
                <td>$fogging</td>
                <td>$psn</td>
                <td>$item->ket</td>
            </tr>";            
            $no++;
        };
		
        $html = <<<EOD
            <style>
                table {
                    width: 925px;
                }
                th, td {
                    border: 1px solid grey;
                    border-collapse: collapse;
                    padding: 5px;
                }
            </style>
            <h1>Laporan Bulanan</h1>
            <b>Bulan : $m, Tahun : $y</b><br>
            <i>di cetak pada: $printed</i><br><br>
            <table cellspacing="0" cellpadding="5" style="widht:100%;">
                <tr class="fw-bolder align-middle text-center">
                    <th rowspan="2">Minggu Ke</th>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Penderita</th>
                    <th colspan="2">Umur</th>
                    <th rowspan="2">Kelurahan</th>
                    <th colspan="5">Tanggal</th>
                    <th rowspan="2">Ket</th>
                </tr>
                <tr class="fw-bolder align-middle text-center">
                    <th>L</th>
                    <th>P</th>
                    <th>Mulai Sakit</th>
                    <th>Masuk RS</th>
                    <th>PE</th>
                    <th>Fogging</th>
                    <th>PSN</th>
                </tr>
                $dataString
            </table>
            EOD;

		// add a page
		$pdf->AddPage('L');
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
		$pdf->Output('laporan_bulanan'.md5(time()) . '.pdf', 'I');
    }
}
