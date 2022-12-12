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
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelFeedback">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>Minggu Ke</th>
                                <th>No</th>
                                <th>Nama Penderita</th>
                                <th colspan="2">Umur</th>
                                <th colspan="2">Alamat</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>L</th>
                                <th>P</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>
<script>
    $('#tabelFeedback').dataTable({
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