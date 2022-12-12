<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Penyelidikan Epidemiologis</span>
                </h3>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#mdl_addPE">Tambah Penyelidikan Epidemiologis</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelPE">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>NIK</th>
                                <th>Kelurahan</th>
                                <th>Tanggal Periksa</th>
                                <th>Total Periksa</th>
                                <th>Total Positif Jentik</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark fw-bolder">1</td>
                                <td class="text-dark fw-bolder">3505120810990001</td>
                                <td class="text-dark fw-bolder">Lowokwaru</td>
                                <td class="text-dark fw-bolder">08 Desember 2020</td>
                                <!-- NOTED : Untuk Total Periksa dan Total Positif Jentik ini dijumlahkan dari jumlah periksa dan jumlah total positif jentik  -->
                                <td class="text-dark fw-bolder">10</td>
                                <td class="text-dark fw-bolder">100</td>
                                <td class="">
                                    <a href="" title="Detail PE" data-bs-toggle="modal" data-bs-target="#mdl_detPE" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detPE me-1">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                            </svg></span>
                                    </a>
                                    <a href="" title="Edit PE" data-bs-toggle="modal" data-bs-target="#mdl_editPE" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editPE m-1">
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#" title="Hapus PE" data-bs-toggle="modal" data-bs-target="#mdl_delPE" data-id="" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delPE btn-sm m-1">
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

<!-- Modal Tambah PE-->
<div class="modal fade" tabindex="-1" id="mdl_addPE">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Penyelidikan Epidemiologis </h3>
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
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal PE</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Pilih Tanggal Pemeriksaan" id="add_tglPE" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">NIK / ID Penderita</span>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#mdl_addPE" data-placeholder="Pilih NIK" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">3505120810990001</option>
                                    <option value="2">3505120810990002</option>
                                    <option value="2">3505120810990003</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Penderita</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Lowokwaru" readonly name="" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jenis Kelamin</span>
                                </label>
                                <select class="form-control form-control-solid" readonly name="" id="">
                                    <option value="">Laki-Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Lahir</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Oktober 1999" id="add_tglLahir" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Masukan Umur</span>
                                </label>
                                <input type="number" class="form-control form-control-solid" value="17" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Orang Tua</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Sukidi" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Lowokwaru" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Latitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="-7.983908" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Longitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="112.621391" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Mulai Sakit</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Oktober 1999" id="" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Puskesmas</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Puskesmas Dinoyo" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Rumah Sakit</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Rumah Sakit Dinoyo" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Dirawat</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Okt 2022 - 08 Nov 2022" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Alamat</span>
                                </label>
                                <!-- <textarea class="form-control form-control-solid" name="" id="" cols="10" rows="5" readonly>Alamat Palsu</textarea> -->
                                <input type="text" class="form-control form-control-solid" value="Alamat Palsu " name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <h6 class="">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="berpergian" id="ya_berpergian" value="option1" checked>
                                <label class="form-check-label" for="ya_berpergian">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="berpergian" id="tidak_berpergian" value="option2">
                                <label class="form-check-label" for="tidak_berpergian">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Sebutkan Pergi ke Mana</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Wilayah" name="" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Pada Tanggal</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Tanggal" id="add_tglWilayah" name="" required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tamu_menginap" id="ya_tamu" value="option1" checked>
                                <label class="form-check-label" for="ya_tamu">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tamu_menginap" id="tidak_tamu" value="option2">
                                <label class="form-check-label" for="tidak_tamu">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat Penderita DBD yang tinggal satu Rumah atau tetangga rumah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penderita_dbd" id="ya_penderita" value="option1" checked>
                                <label class="form-check-label" for="ya_penderita">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penderita_dbd" id="tidak" value="option2">
                                <label class="form-check-label" for="tidak">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <p class="fw-bolder mt-6">Sebutkan ID Penderita / Suspek Lain tersebut :</p>
                        <div id="add_suspek_repeater">
                            <div class="form-group">
                                <div data-repeater-list="add_suspek_repeater">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Nama</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">L/P</span>
                                                        </label>
                                                        <select class="form-control form-control-solid" name="" id="">
                                                            <option></option>
                                                            <option value="">L</option>
                                                            <option value="">P</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Umur</span>
                                                        </label>
                                                        <input type="number" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Dirawat di</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i>Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 text-center">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="la la-plus"></i>Tambah Penderita / Suspek Lain
                                </a>
                            </div>
                        </div>
                        <h6 class="mt-6">Pemeriksaan Jentik KK</h6>
                        <div id="add_pjb">
                            <div class="form-group">
                                <div data-repeater-list="add_pjb">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Nama KK</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Latitude</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Longitude</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="" required />
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Pemeriksaan Tandon Air Luar Rumah</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="" required />
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i>Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 text-center">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="la la-plus"></i>Tambah Kepala Keluarga
                                </a>
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

<!-- Modal Edit PE-->
<div class="modal fade" tabindex="-1" id="mdl_editPE">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Penyelidikan Epidemiologis </h3>

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
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal PE</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Pilih Tanggal Pemeriksaan" id="add_tglPE" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">NIK / ID Penderita</span>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#mdl_addPE" data-placeholder="Pilih NIK" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">3505120810990001</option>
                                    <option value="2">3505120810990002</option>
                                    <option value="2">3505120810990003</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Penderita</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Lowokwaru" readonly name="" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jenis Kelamin</span>
                                </label>
                                <select class="form-control form-control-solid" readonly name="" id="">
                                    <option value="">Laki-Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Lahir</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Oktober 1999" id="add_tglLahir" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Masukan Umur</span>
                                </label>
                                <input type="number" class="form-control form-control-solid" value="17" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Orang Tua</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Sukidi" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Lowokwaru" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Latitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="-7.983908" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Longitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="112.621391" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Mulai Sakit</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Oktober 1999" id="" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Puskesmas</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Puskesmas Dinoyo" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Rumah Sakit</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" value="Rumah Sakit Dinoyo" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Dirawat</span>
                                </label>
                                <input class="form-control form-control-solid" value="08 Okt 2022 - 08 Nov 2022" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Alamat</span>
                                </label>
                                <!-- <textarea class="form-control form-control-solid" name="" id="" cols="10" rows="5" readonly>Alamat Palsu</textarea> -->
                                <input type="text" class="form-control form-control-solid" value="Alamat Palsu " name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <h6 class="">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="berpergian" id="ya_berpergian" value="option1" checked>
                                <label class="form-check-label" for="ya_berpergian">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="berpergian" id="tidak_berpergian" value="option2">
                                <label class="form-check-label" for="tidak_berpergian">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Sebutkan Pergi ke Mana</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Wilayah" name="" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Pada Tanggal</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Tanggal" id="add_tglWilayah" name="" required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tamu_menginap" id="ya_tamu" value="option1" checked>
                                <label class="form-check-label" for="ya_tamu">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tamu_menginap" id="tidak_tamu" value="option2">
                                <label class="form-check-label" for="tidak_tamu">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat Penderita DBD yang tinggal satu Rumah atau tetangga rumah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penderita_dbd" id="ya_penderita" value="option1" checked>
                                <label class="form-check-label" for="ya_penderita">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="penderita_dbd" id="tidak" value="option2">
                                <label class="form-check-label" for="tidak">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <p class="fw-bolder mt-6">Sebutkan ID Penderita / Suspek Lain tersebut :</p>
                        <div id="edit_suspek_repeater">
                            <div class="form-group">
                                <div data-repeater-list="edit_suspek_repeater">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Nama</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">L/P</span>
                                                        </label>
                                                        <select class="form-control form-control-solid" name="" id="">
                                                            <option></option>
                                                            <option value="">L</option>
                                                            <option value="">P</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Umur</span>
                                                        </label>
                                                        <input type="number" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Dirawat di</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i>Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 text-center">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="la la-plus"></i>Tambah Penderita / Suspek Lain
                                </a>
                            </div>
                        </div>
                        <h6 class="mt-6">Pemeriksaan Jentik KK</h6>
                        <div id="edit_pjb">
                            <div class="form-group">
                                <div data-repeater-list="edit_pjb">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Nama KK</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Latitude</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="" required />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-8 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span class="required">Longitude</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="" required />
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Pemeriksaan Tandon Air Luar Rumah</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="" required />
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i>Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 text-center">
                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                    <i class="la la-plus"></i>Tambah Kepala Keluarga
                                </a>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus PE-->
<div class="modal fade" tabindex="-1" id="mdl_delPE">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Penyelidikan Epidemiologis</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <form action="<?= site_url('') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Data Penyelidikan Epidemiologis tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail PE-->
<div class="modal fade" tabindex="-1" id="mdl_detPE">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Penyelidikan Epidemiologis</h3>

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
                            <label class="fw-bold ">NIK</label>
                        </div>
                        <div class="col">
                            <p>3505120810990001</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <p>Dedy Hermawan</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <p>Laki-Laki</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Lahir</label>
                        </div>
                        <div class="col">
                            <p>08 Oktober 1999</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Orang Tua</label>
                        </div>
                        <div class="col">
                            <p>Sukiman</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Alamat</label>
                        </div>
                        <div class="col">
                            <p>JL Permata Jingga no 29 B RT 01 Rw 04</p>
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
                            <label class="fw-bold ">Latitude</label>
                        </div>
                        <div class="col">
                            <p>-7.983908</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Longitude</label>
                        </div>
                        <div class="col">
                            <p>112.621391</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Puskesmas</label>
                        </div>
                        <div class="col">
                            <p>Puskesmas Dinoyo</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Rumah Sakit</label>
                        </div>
                        <div class="col">
                            <p>Rumah Sakit Dinoyo</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Mulai Sakit</label>
                        </div>
                        <div class="col">
                            <p>08 Oktober 1999</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Dirawat</label>
                        </div>
                        <div class="col">
                            <p>08 Oktober 1999 - 08 Oktober 2022</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ?</label>
                        </div>
                        <div class="col">
                            <p>Ya</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Pergi Ke</label>
                        </div>
                        <div class="col">
                            <p>Malang</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Pada Tanggal</label>
                        </div>
                        <div class="col">
                            <p>08 Oktober 2022</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ?</label>
                        </div>
                        <div class="col">
                            <p>Ya</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah terdapat Penderita DBD yang tinggal satu Rumah atau tetangga rumah ?</label>
                        </div>
                        <div class="col">
                            <p>Ya</p>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-4">Sebutkan ID Penderita / Suspek Lain tersebut :</h6>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama</label>
                        </div>
                        <div class="col">
                            <p>Dedy</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <p>Laki-Laki</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Umur</label>
                        </div>
                        <div class="col">
                            <p>18</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Dirawat di</label>
                        </div>
                        <div class="col">
                            <p>Malang RSUD Saiful Anwar</p>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-4">Pemeriksaan Jentik KK</h6>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Kartu Keluarga</label>
                        </div>
                        <div class="col">
                            <p>Dedy Hermawan</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Latitude</label>
                        </div>
                        <div class="col">
                            <p>-7.983908</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Longitude</label>
                        </div>
                        <div class="col">
                            <p>112.621391</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Pemeriksaan</label>
                        </div>
                        <div class="col">
                            <p>08 Oktober 2022</p>
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
                        <div class="col-6">
                            <label class="fw-bold ">Jumlah Tandon Periksa</label>
                        </div>
                        <div class="col">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jumlah Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p>8</p>
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
                        <div class="col-6">
                            <label class="fw-bold ">Jumlah Tandon Periksa</label>
                        </div>
                        <div class="col">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jumlah Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Total Periksa</label>
                        </div>
                        <div class="col">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Total Positif Jentik</label>
                        </div>
                        <div class="col">
                            <p>8</p>
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
<script src="<?= base_url('') ?>assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script>
    $('#tabelPE').dataTable({
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

    $("#add_tglWilayah").flatpickr({
        dateFormat: "d F Y",
    });

    $("#edit_tglWilayah").flatpickr({
        dateFormat: "d F Y",
    });

    $('#add_suspek_repeater').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });

    $('#add_pjb').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
    $('#edit_suspek_repeater').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });

    $('#edit_pjb').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
</script>