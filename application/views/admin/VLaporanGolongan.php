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
                    <span class="card-label text-center fw-bolder fs-3 mb-1">DATA BULANAN KASUS DEMAM BERDARAH DENGUE (DBD) <br>PER GOLONGAN UMUR DAN JENIS KELAMIN</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="row">
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-3">
                                <p>Propinsi</p>
                            </div>
                            <div class="col">
                                <p>: Jawa Timur</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Kota</p>
                            </div>
                            <div class="col">
                                <p>: Malang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Puskesmas</p>
                            </div>
                            <div class="col">
                                <p>: Dinoyo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-10">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <select class="form-select " data-control="select2">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2 mt-10">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <select class="form-select" data-control="select2">
                                <option value="3">2021</option>
                                <option value="4">2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2 mt-10">
                        <div>
                            <a class="btn btn-md btn-primary"><i class="fas fa-file-download"></i>Download</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-3" id="tabelBulanan">
                        <thead>
                            <tr class="fw-bolder align-middle text-center">
                                <th rowspan="3">No</th>
                                <th rowspan="3">Kelurahan</th>
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
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Lowokwaru</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                        <tfoot class="text-center">
                            <th colspan="2">Jumlah</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>0</th>
                            <th>1</th>
                            <th>1</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="mdl_editKet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Keterangan</h5>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Keterangan</span>
                    </label>
                    <textarea class="form-control form-control-solid" placeholder="Masukan Keterangan" name="" id="" cols="10" rows="5"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
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