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
                    <span class="card-label text-center fw-bolder fs-3 mb-1">Laporan Bulanan Kegiatan Penemuan Penderita Tersangka DBD <br> Bulan Mei 2022</span>
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
                            <td rowspan="2">Minggu ke 3</td>
                            <td rowspan="2">17</td>
                            <td rowspan="2">Girito</td>
                            <td>1</td>
                            <td></td>
                            <td>Lowokwaru</td>
                            <td >08 Oktober 2022</td>
                            <td >08 Oktober 2023</td>
                            <td>08 Desember 2022</td>
                            <td rowspan="2">Isi dari keterangan saya tidak tahu apa saja. ini hanya keterangan dummy.</td>
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