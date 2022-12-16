<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Pengamatan Jentik Berkala</span>
                </h3>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#mdl_addJentik">Tambah Pengamatan Jentik</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelJentik">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>Nama KK</th>
                                <th>Kelurahan</th>
                                <th>Tanggal Periksa</th>
                                <th>Total Periksa</th>
                                <th>Total Positif Jentik</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $date=date_create($item->tgl_pjb);        
                                    echo '
                                    <tr>
                                        <td class="text-dark fw-bolder">'.$no.'</td>
                                        <td class="text-dark fw-bolder">'.$item->nama_kk.'</td>
                                        <td class="text-dark fw-bolder">'.$item->nama_kelurahan.'</td>
                                        <td class="text-dark fw-bolder">'.date_format($date,"d F Y").'</td>
                                        <!-- NOTED : Untuk Total Periksa dan Total Positif Jentik ini dijumlahkan dari jumlah periksa dan jumlah total positif jentik  -->
                                        <td class="text-dark fw-bolder">'.$item->total_periksa.'</td>
                                        <td class="text-dark fw-bolder">'.$item->total_pos.'</td>
                                        <td class="">
                                            <a href="" title="Detail PJB" data-bs-toggle="modal" data-bs-target="#mdl_detJentik" data-id="'.$item->id_pjb.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detJentik me-1">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                    </svg></span>
                                            </a>
                                            <a href="" title="Edit PJB" data-bs-toggle="modal" data-bs-target="#mdl_editJentik" data-id="'.$item->id_pjb.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editJentik m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" title="Hapus PJB" data-bs-toggle="modal" data-bs-target="#mdl_delJentik" data-id="'.$item->id_pjb.'" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delJentik btn-sm m-1">
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

<!-- Modal Tambah Jentik Berkala-->
<div class="modal fade" tabindex="-1" id="mdl_addJentik">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Jentik Berkala </h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('jentik/tambah') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Kartu Keluarga</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" name="nama_kk" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kelurahan</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Kelurahan" name="nama_kelurahan" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Latitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="latitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Longitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="longitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Pemeriksaan</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Pemeriksaan" id="add_tglPJB" name="tgl_pjb" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="jml_tandon_dlm_periksa" required />
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="jml_tandon_dlm_jentik" required />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pemeriksaan Tandon Air Luar Rumah</span>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="jml_tandon_luar_periksa" required />
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="jml_tandon_luar_jentik" required />
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Jentik Berkala-->
<div class="modal fade" tabindex="-1" id="mdl_editJentik">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Pengamatan Jentik </h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('jentik/edit') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Kartu Keluarga</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editNama_pjb" name="nama_kk" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kelurahan</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editKelurahan_pjb" name="nama_kelurahan" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Latitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editLatitude_pjb" name="latitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Longitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editLongitude_pjb" name="longitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Pemeriksaan</span>
                        </label>
                        <input class="form-control form-control-solid" id="edit_tglPJB" name="tgl_pjb" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" id="editDlm_pjb" name="jml_tandon_dlm_periksa" required />
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" id="editPosDlm_pjb" name="jml_tandon_dlm_jentik" required />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pemeriksaan Tandon Air Luar Rumah</span>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" id="editLuar_pjb" name="jml_tandon_luar_periksa" required />
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-solid" id="editPosLuar_pjb" name="jml_tandon_luar_jentik" required />
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editId_pjb" name="id_pjb">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Pengamatan Jentik berkala-->
<div class="modal fade" tabindex="-1" id="mdl_delJentik">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Pengamatan Jentik</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <form action="<?= site_url('jentik/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Data Pengamatan Jentik tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusId_pjb" name="id_pjb">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail Jentik Berkala-->
<div class="modal fade" tabindex="-1" id="mdl_detJentik">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Pengamatan Jentik</h3>

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
                        <div class="col">
                            <label class="fw-bold ">Nama Kartu Keluarga</label>
                        </div>
                        <div class="col">
                            <p id="detNama"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Kelurahan</label>
                        </div>
                        <div class="col">
                            <p id="detKelurahan"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Latitude</label>
                        </div>
                        <div class="col">
                            <p id="detLatitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Longitude</label>
                        </div>
                        <div class="col">
                            <p id="detLongitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Tanggal Pemeriksaan</label>
                        </div>
                        <div class="col">
                            <p id="detTanggal"></p>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="text-center mb-2">
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold text-center">Pemeriksaan Tandon Air Dalam Rumah</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Jumlah Tandon Periksa</label>
                        </div>
                        <div class="col">
                            <p id="detDlm"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Jumlah Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p id="detDlmPos"></p>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="text-center mb-2">
                        <div class="row">
                            <div class="col">
                                <label class="fw-bold text-center">Pemeriksaan Tandon Air Luar Rumah</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Jumlah Tandon Periksa</label>
                        </div>
                        <div class="col">
                            <p id="detLuar"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Jumlah Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p id="detLuarPos"></p>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Total Periksa</label>
                        </div>
                        <div class="col">
                            <p id="detPeriksa"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <label class="fw-bold ">Total Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p id="detPos"></p>
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
    $('#tabelJentik').dataTable({
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

    $("#add_tglPJB").flatpickr({
        dateFormat: "d F Y",
    });

    $("#edit_tglPJB").flatpickr({
        dateFormat: "d F Y",
    });
</script>
<script>
    $('#tabelJentik tbody').on('click', '.mdl_detJentik', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('jentik/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pjb: id
            },
            success: res => {
                $('#detNama').html(res[0].nama_kk)
                $('#detKelurahan').html(res[0].nama_kelurahan)
                $('#detLatitude').html(res[0].latitude)
                $('#detLongitude').html(res[0].longitude)
                $('#detTanggal').html(res[0].tgl_pjb)
                $('#detDlm').html(res[0].jml_tandon_luar_periksa)
                $('#detDlmPos').html(res[0].jml_tandon_dlm_jentik)
                $('#detLuar').html(res[0].jml_tandon_luar_periksa)
                $('#detLuarPos').html(res[0].jml_tandon_luar_jentik)
                $('#detPeriksa').html(res[0].total_periksa)
                $('#detPos').html(res[0].total_pos)
            }
        })
    })

    $('#tabelJentik tbody').on('click', '.mdl_editJentik', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('jentik/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pjb: id
            },
            success: res => {
                $('#editNama_pjb').val(res[0].nama_kk)
                $('#editKelurahan_pjb').val(res[0].nama_kelurahan)
                $('#editLatitude_pjb').val(res[0].latitude)
                $('#editLongitude_pjb').val(res[0].longitude)
                $('#edit_tglPJB').val(res[0].tgl_pjb)
                $('#editDlm_pjb').val(res[0].jml_tandon_dlm_periksa)
                $('#editPosDlm_pjb').val(res[0].jml_tandon_dlm_jentik)
                $('#editLuar_pjb').val(res[0].jml_tandon_luar_periksa)
                $('#editPosLuar_pjb').val(res[0].jml_tandon_luar_jentik)
                $('#editId_pjb').val(res[0].id_pjb)
            }
        })
    })

    $('#tabelJentik tbody').on('click', '.mdl_delJentik', function() {
        const id = $(this).data("id")
        $('#hapusId_pjb').val(id)
    })
</script>