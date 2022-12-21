<style>
    table,
    th,
    td {
        border: 3px solid black !important;
        border-collapse: collapse !important;
    }
</style>
<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header d-flex justify-content-center border-0 pt-5">
                <h3 class="card-title ">
                    <span class="card-label text-center fw-bolder fs-3 mb-1">Laporan Bulanan Kegiatan Penemuan Penderita Tersangka DBD <br> 2022</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <p>PUSKESMAS DINOYO</p>
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-3" id="tabelBulanan">
                        <thead>
                            <tr class="fw-bolder align-middle text-center">
                                <th rowspan="2">Minggu Ke</th>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama Penderita</th>
                                <th colspan="2">Umur</th>
                                <th>Alamat</th>
                                <th colspan="2">Tanggal</th>
                                <th>Tanggal</th>
                                <th rowspan="2">Ket</th>
                            </tr>
                            <tr class="fw-bolder align-middle text-center">
                                <th>L</th>
                                <th>P</th>
                                <th>Kelurahan</th>
                                <th>Mulai Sakit</th>
                                <th>Masuk RS</th>
                                <th>PE</th>
                            </tr>
                        </thead>
                        <tbody class="text-left">
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $firstOfMonth = date("Y-m-01", strtotime($item->tgl_pe));
                                    $week = intval(date("W", strtotime($item->tgl_pe))) - intval(date("W", strtotime($firstOfMonth)))+1;
                                    $L = '';$P = '';
                                    $date = date_create($item->tgl_sakit);
                                    $sakit = date_format($date,"d F Y");
                                    $date = date_create($item->tgl_masuk_rumkit);
                                    $rumkit = date_format($date,"d F Y");
                                    $date = date_create($item->tgl_pe);
                                    $petgl = date_format($date,"d F Y");
                                    if($item->gender_px == 'Laki-laki'){
                                        $L = $item->umur_px;
                                    }else if($item->gender_px == 'Perempuan'){
                                        $P = $item->umur_px;
                                    }
                                    echo '
                                        <tr>
                                        <td style="text-align:center;">'.$week.'</td>
                                        <td>'.$no.'</td>
                                        <td>'.$item->nama_px.'</td>
                                        <td >'.$L.'</td>
                                        <td>'.$P.'</td>
                                        <td>'.$item->nama_kelurahan.'</td>
                                        <td >'.$sakit.'</td>
                                        <td >'.$rumkit.'</td>
                                        <td>'.$petgl.'</td>
                                        <td></td>   
                                        </tr>     
                                    ';    
                                    $no++;                                
                                }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>
<script>
    $('#tabelBulanan').dataTable({
        paging: false,
        ordering: false,
        info: false,
    });

    $("#add_tglPJB").flatpickr({
        dateFormat: "d F Y",
    });

    $("#edit_tglPJB").flatpickr({
        dateFormat: "d F Y",
    });
</script>