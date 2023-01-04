<?php

class LaporanHarianController extends CI_Controller
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
    
	public function LaporanGolongan()
	{
        $tahun = $this->Laporan->getYear();
        $bulan = date("m");
        $seltahun = date("Y");
        if(empty($tahun)){
            $tahun = date("Y");
        }        

        $list = $this->Laporan->getData(date("m"),date("Y"));
        $kelurahan = $this->Laporan->getKelurahan(date("m"),date("Y"));

		$data = array(
			'title' => 'Laporan Golongan Umur dan Jenis Kelamin - SIM DBD PUSKESMAS DINOYO',
            'bulan' => $bulan,
            'seltahun' => $seltahun,
            'tahun' => $tahun,
            'kelurahan' => $kelurahan,
            'list' => $list
		);
		$this->template->admin('admin/VLaporanGolongan', $data);
	}

    public function filter()
	{
        $param = $_POST;
        $tahun = $this->Laporan->getYear();
        $list = $this->Laporan->getData($param['mmonth'],$param['yyear']);
        $kelurahan = $this->Laporan->getKelurahan($param['mmonth'],$param['yyear']);
        $bulan = $param['mmonth'];
        if(empty($tahun)){
            $tahun = date("Y");
        }
		$data = array(
			'title' => 'Laporan Bulanan - SIM DBD PUSKESMAS DINOYO',
            'bulan' => $bulan,
            'seltahun' => $param['yyear'],
            'tahun' => $tahun,
            'kelurahan' => $kelurahan,
            'list' => $list
		);
		$this->template->admin('admin/VLaporanGolongan', $data);
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
        $list = $this->Laporan->getData($m,$y);
        $kelurahan = $this->Laporan->getKelurahan($m,$y);
        $no = 1;
        $at = array();$at[0]=0;$at[1]=0;
        $bt = array();$bt[0]=0;$bt[1]=0;
        $ct = array();$ct[0]=0;$ct[1]=0;
        $dt = array();$dt[0]=0;$dt[1]=0;
        $et = array();$et[0]=0;$et[1]=0;
        $ft = array();$ft[0]=0;$ft[1]=0;
        $totalt = 0;
        $lt = 0; $pt = 0;
        foreach($kelurahan as $item){
            $a = array();$a[0]=0;$a[1]=0;
            $b = array();$b[0]=0;$b[1]=0;
            $c = array();$c[0]=0;$c[1]=0;
            $d = array();$d[0]=0;$d[1]=0;
            $e = array();$e[0]=0;$e[1]=0;
            $f = array();$f[0]=0;$f[1]=0;
            $total = 0;
            $l = 0; $p = 0;
            foreach($list as $key){
                if($item->kelurahan == $key->nama_kelurahan){
                    if($key->umur_px <= 1){
                        if($key->gender_px == 'Laki-laki'){
                            $a[0]++; $l++; $at[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $a[1]++; $p++; $at[1]++; $pt++; 
                        }
                    }else if($key->umur_px > 1 && $key->umur_px <= 4){
                        if($key->gender_px == 'Laki-laki'){
                            $b[0]++; $l++; $bt[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $b[1]++; $p++; $bt[1]++; $pt++;
                        }
                    }else if($key->umur_px > 4 && $key->umur_px <= 14){
                        if($key->gender_px == 'Laki-laki'){
                            $c[0]++; $l++; $ct[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $c[1]++; $p++; $ct[1]++; $pt++;
                        }
                    }else if($key->umur_px > 14 && $key->umur_px <= 24){
                        if($key->gender_px == 'Laki-laki'){
                            $d[0]++; $l++; $dt[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $d[1]++; $p++; $dt[1]++; $pt++;
                        }
                    }else if($key->umur_px > 24 && $key->umur_px <= 44){
                        if($key->gender_px == 'Laki-laki'){
                            $e[0]++; $l++; $et[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $e[1]++; $p++; $et[1]++; $pt++;
                        }
                    }else if($key->umur_px > 45){
                        if($key->gender_px == 'Laki-laki'){
                            $f[0]++; $l++; $ft[0]++; $lt++;
                        }else if($key->gender_px == 'Perempuan'){
                            $f[1]++; $p++; $ft[1]++; $pt++;
                        }
                    }
                }
            }
            $total = $l + $p;

            $dataString = $dataString."
            <tr>
                <td>$no</td>
                <td>$item->kelurahan</td>
                <td>$a[0]</td>
                <td>$a[1]</td>
                <td>$b[0]</td>
                <td>$b[1]</td>                                
                <td>$c[0]</td>
                <td>$c[1]</td>                                
                <td>$d[0]</td>
                <td>$d[1]</td>
                <td>$e[0]</td>
                <td>$e[1]</td>
                <td>$f[0]</td>
                <td>$f[1]</td>
                <td>$l</td>
                <td>$p</td>
                <td>$total</td>
            </tr>";            
            $no++;
        };
		$totalt = $lt+$pt;

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
                <th rowspan="3" style="width:5%">No</th>
                <th rowspan="3" style="width:10%">Kelurahan</th>
                <th colspan="12">Umur dan Jenis Kelamin</th>
                <th rowspan="2" colspan="3">Jumlah</th>
            </tr>
            <tr class="fw-bolder align-middle text-center">
                <th colspan="2">
                    < 1 Tahun</th>
                <th colspan="2">1 - 4 Tahun</th>
                <th colspan="2">5 - 14 Tahun</th>
                <th colspan="2">15 - 24 Tahun</th>
                <th colspan="2">25 - 44 Tahun</th>
                <th colspan="2">> 45 Tahun</th>
            </tr>
            <tr class="fw-bolder align-middle text-center">
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
                <th>Total</th>
            </tr>
                $dataString
            <tr>
                <th colspan="2">Jumlah</th>
                <th>$at[0]</th>
                <th>$at[1]</th>
                <th>$bt[0]</th>
                <th>$bt[1]</th>
                <th>$ct[0]</th>
                <th>$ct[1]</th>
                <th>$dt[0]</th>
                <th>$dt[1]</th>
                <th>$et[0]</th>
                <th>$et[1]</th>
                <th>$ft[0]</th>
                <th>$ft[1]</th>
                <th>$lt</th>
                <th>$pt</th>
                <th>$totalt</th>
            </tr>
            </table>
            EOD;

		// add a page
		$pdf->AddPage('L');
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
        ob_end_clean();
		$pdf->Output('laporan_bulanan'.md5(time()) . '.pdf', 'D');
    }
}
