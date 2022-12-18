<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Penanganan Kasus</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelKasus">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>ID PE</th>
                                <th>Tanggal PE</th>
                                <th>Kelurahan</th>
                                <th>Penularan Kasus</th>
                                <th>Radius Penularan</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark fw-bolder">1</td>
                                <td class="text-dark fw-bolder">PE081022001</td>
                                <td class="text-dark fw-bolder">08 Desember 2022</td>
                                <td class="text-dark fw-bolder">Lowokwaru</td>
                                <td><span class="badge badge-warning">Ya</span></td>
                                <td><span class="badge badge-warning">> 400 M</span></td>
                                <td class="">
                                    <a href="" title="Detail Penanganan Kasus" data-bs-toggle="modal" data-bs-target="#mdl_detKasus" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detKasus me-1">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                            </svg></span>
                                    </a>
                                    <a href="" title="Penanganan Kasus" data-bs-toggle="modal" data-bs-target="#mdl_kasus" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_kasus m-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
                                                <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#" title="Hapus Penanganan Kasus" data-bs-toggle="modal" data-bs-target="#mdl_delKasus" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delKasus btn-sm m-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Penanganan Kasus-->
<div class="modal fade" tabindex="-1" id="mdl_kasus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Penanganan Kasus</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">ID PE</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="" name="" value="PE081022001" readonly required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal PE</span>
                        </label>
                        <input class="form-control form-control-solid" id="" name="" value="08 Desember 2020" readonly required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">ID Pasien</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="" name="" value="3505120810990001" required />
                    </div>
                    <h6 class="">Penularan Kasus </h6>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penularan_kasus" id="ya_kasus" value="option1" onclick="radius_show();" checked>
                                <label class="form-check-label" for="ya_kasus">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penularan_kasus" id="tidak_kasus" value="option2" onclick="radius_hide();">
                                <label class="form-check-label" for="tidak_kasus">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="penularan_hide">
                        <h6 class="mt-10">Radius Penularan</h6>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radius" id="ya_menular" value="option1" checked>
                                    <label class="form-check-label" for="ya_menular">
                                        > 400 M </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radius" id="tidak_menular" value="option2">
                                    <label class="form-check-label" for="tidak_menular">
                                        < 400 M </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mb-3 mt-10">Penanganan Kasus</h3>
                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                        <li class="nav-item" id="btn_fogging">
                            <a class="nav-link active fw-bolder text-dark" data-bs-toggle="tab" href="#tab_fogging">Fogging</a>
                        </li>
                        <li class="nav-item" id="btn_psn">
                            <a class="nav-link fw-bolder text-dark" data-bs-toggle="tab" href="#tab_psn">PSN</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab_fogging" role="tabpanel">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Fogging</span>
                                </label>
                                <input class="form-control form-control-solid" id="tglPsn" placeholder="Masukan Tanggal Fogging" name="" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="" name="" placeholder="Masukan Kelurahan" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jumlah Rumah</span>
                                </label>
                                <input type="number" class="form-control form-control-solid" id="" name="" placeholder="Masukan Jumlah Rumah" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Keterangan</span>
                                </label>
                                <textarea class="form-control form-control-solid" placeholder="Masukan Keterangan" name="" id="" cols="10" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_psn" role="tabpanel">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal PSN</span>
                                </label>
                                <input class="form-control form-control-solid" id="tglPsn" placeholder="Masukan Tanggal PSN" name="" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="" name="" placeholder="Masukan Kelurahan" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jumlah Rumah</span>
                                </label>
                                <input type="number" class="form-control form-control-solid" id="" name="" placeholder="Masukan Jumlah Rumah" required />
                            </div>
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Keterangan</span>
                                </label>
                                <textarea class="form-control form-control-solid" placeholder="Masukan Keterangan" name="" id="" cols="10" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="" name="">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Penanganan Kasus-->
<div class="modal fade" tabindex="-1" id="mdl_delKasus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Penanganan Kasus</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <form action="<?= site_url('datapasien/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Penanganan Kasus tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="" name="">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail penanganan kasus-->
<div class="modal fade" tabindex="-1" id="mdl_detKasus">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Penanganan Kasus</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">ID PE</label>
                        </div>
                        <div class="col">
                            <p id="">PE081022001</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal PE</label>
                        </div>
                        <div class="col">
                            <p id="">08 December 2019</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">ID Pasien</label>
                        </div>
                        <div class="col">
                            <p id="">3505120810990001</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Penularan Kasus</label>
                        </div>
                        <div class="col">
                            <p id=""><span class="badge badge-warning">Ya</span></p>
                            <!-- <p id=""><span class="badge badge-success">Tidak</span></p> -->
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Radius Penularan</label>
                        </div>
                        <div class="col">
                            <p id=""><span class="badge badge-warning">
                                    > 400 M</span>
                            </p>
                            <!-- <p id=""><span class="badge badge-success">< 400 M</span></p> -->
                        </div>
                    </div>
                    <!-- noted piih salah satu psn / fogging gir yang muncul  -->
                    <h6 class="mt-4 mb-4">Penanganan Kasus PSN / Fogging</h6>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal PSN / Fogging</label>
                        </div>
                        <div class="col">
                            <p>08 December 2019</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Kelurahan</label>
                        </div>
                        <div class="col">
                            <p>Lowokwaru</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jumlah Rumah</label>
                        </div>
                        <div class="col">
                            <p>19</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Keterangan</label>
                        </div>
                        <div class="col">
                            <p>Ini adalah keterangan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>
<script>
    $('#tabelKasus').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    $("#tglKasus").flatpickr({
        dateFormat: "d F Y",
    });

    $("#tglPsn").flatpickr({
        dateFormat: "d F Y",
    });

    $("#tglFogging").flatpickr({
        dateFormat: "d F Y",
    });

    function radius_hide() {
        document.getElementById('penularan_hide').style.display = 'none';
    }

    function radius_show() {
        document.getElementById('penularan_hide').style.display = 'block';
        // document.getElementById('btn_psn').style.display = 'block';
        // document.getElementById('tab_fog').style.display = 'block';
    }

    $(document).ready(function() {
        $("#ya_kasus").click(function() {
            $("#btn_psn").hide();
            $("#tab_psn").hide();
            $("#btn_fogging").show();
            $("#tab_fogging").show().addClass("show active");
        });
        $("#tidak_kasus").click(function() {
            $("#btn_fogging").hide();
            $("#tab_fogging").hide();
            $("#btn_psn").show().addClass("show");
            $("#tab_psn").show().addClass("show active");
        });

    });

    $(document).ready(function() {
    $("#btn_psn").hide();
});
</script>