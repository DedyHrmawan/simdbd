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
                                <th>ID PE</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Kelurahan</th>
                                <th>Tanggal PE</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list as $item) {
                                $date = date_create($item->tgl_pe);
                                $tglpe = date_format($date, "d F Y");
                                $periksa = explode(";", $item->total_periksa);
                                $pos = explode(";", $item->total_pos);
                                echo '
                                    <tr>
                                        <td class="text-dark fw-bolder">' . $no . '</td>
                                        <td class="text-dark fw-bolder">PE0' . $item->id_pe . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nik_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nama_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nama_kelurahan . '</td>
                                        <td class="text-dark fw-bolder">' . $tglpe . '</td>
                                        <td class="">
                                            <a href="" title="Detail PE" data-bs-toggle="modal" data-bs-target="#mdl_detPE" data-id="' . $item->id_pe . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detPE me-1">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                    </svg></span>
                                            </a>
                                            <a href="" title="Edit PE" data-bs-toggle="modal" data-bs-target="#mdl_editPE" data-id="' . $item->id_pe . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editPE m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" title="Hapus PE" data-bs-toggle="modal" data-bs-target="#mdl_delPE" data-id="' . $item->id_pe . '" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delPE btn-sm m-1">
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
            <a href="#" class="fw-bolder link-primary"></a>
            <div class="modal-body">
                <form action="<?= site_url('epidemiologis/tambah') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal PE</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Pilih Tanggal Pemeriksaan" id="add_tglPE" name="tgl_pe" required autocomplete="off" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">NIK / ID Penderita</span>
                                </label>
                                <select class="form-select form-select-solid" data-control="select2" id="mdlAdd_select" data-dropdown-parent="#mdl_addPE" name="id_px" data-placeholder="Pilih NIK" data-allow-clear="true" required>
                                    <option></option>
                                    <?php
                                    foreach ($nik as $item) {
                                        echo '<option value="' . $item->id_px . '">' . $item->nik_px . '</option>';
                                    }
                                    ?>
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
                                <input type="text" class="form-control form-control-solid" id="tambahNama" readonly name="" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jenis Kelamin</span>
                                </label>
                                <select class="form-control form-control-solid" readonly name="" id="tambahGender" disabled>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Lahir</span>
                                </label>
                                <input class="form-control form-control-solid" id="tambahDob" id="add_tglLahir" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Masukan Umur</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-solid" id="tambahUmur" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Orang Tua</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahOrtu" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahKelurahan" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Latitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahLatitude" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Longitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahLongitude" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Mulai Sakit</span>
                                </label>
                                <input class="form-control form-control-solid" id="tambahSakit" id="" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Puskesmas</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahPuskesmas" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Rumah Sakit</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="tambahRumkit" name="" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Dirawat</span>
                                </label>
                                <input class="form-control form-control-solid" id="tambahMasuk" name="" readonly required />
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
                                <input type="text" class="form-control form-control-solid" id="tambahAlamat" name="" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <h6 class="">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bepergian" id="ya_berpergian" value="Ya" onclick="radius_show();" checked>
                                <label class="form-check-label" for="ya_berpergian">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bepergian" id="tidak_berpergian" value="Tidak" onclick="radius_hide();">
                                <label class="form-check-label" for="tidak_berpergian">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="pergi_hide_add col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Sebutkan Pergi ke Mana</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Wilayah" name="riw_perjalanan"/>
                            </div>
                        </div>
                        <div class="tgl_hide_add col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Pada Tanggal</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Masukan Tanggal" id="add_tglWilayah" name="tgl_perjalanan" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="riw_tamu" id="ya_tamu" value="Ya" checked>
                                <label class="form-check-label" for="ya_tamu">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="riw_tamu" id="tidak_tamu" value="Tidak">
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
                                <input class="form-check-input" type="radio" name="tetangga" id="ya_penderita" value="Ya" checked>
                                <label class="form-check-label" for="ya_penderita">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tetangga" id="tidak" value="Tidak">
                                <label class="form-check-label" for="tidak">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <p class="fw-bolder mt-6">Sebutkan ID Penderita / Suspek Lain tersebut :</p>
                        <div class="section row fieldGroup">
                        </div>
                        <div class="form-group mt-4 text-center">
                            <a href="javascript:void(0)" class="btn btn-light-primary addMore">
                                <i class="la la-plus"></i>Tambah Penderita / Suspek Lain
                            </a>
                        </div>
                        <h6 class="mt-6">Pemeriksaan Jentik KK</h6>
                        <div class="section row fieldGroup2">
                        </div>
                        <div class="form-group mt-4 text-center">
                            <a href="javascript:void(0)" data-repeater-create class="btn btn-light-primary addMore2">
                                <i class="la la-plus"></i>Tambah Kepala Keluarga
                            </a>
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
            <a href="#" class="fw-bolder link-primary"></a>
            <div class="modal-body">
                <form action="<?= site_url('epidemiologis/edit') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal PE</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Pilih Tanggal Pemeriksaan" id="edit_tglPE" name="tgl_pe" required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">NIK / ID Penderita</span>
                                </label>
                                <input class="form-control form-control-solid" placeholder="Pilih NIK" id="editNik" required disabled />
                                <input type="hidden" id="editIdPasien" name="id_px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Penderita</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editNama" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Jenis Kelamin</span>
                                </label>
                                <select class="form-control form-control-solid" id="editGender" disabled>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Lahir</span>
                                </label>
                                <input class="form-control form-control-solid" id="editDob" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Masukan Umur</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-solid" id="editUmur" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Orang Tua</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editOrtu" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Kelurahan</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editKelurahan" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Latitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editLatitude" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Longitude</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editLongitude" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Mulai Sakit</span>
                                </label>
                                <input class="form-control form-control-solid" id="editSakit" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Puskesmas</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editPuskesmas" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Rumah Sakit</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" id="editRumkit" readonly required />
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Tanggal Dirawat</span>
                                </label>
                                <input class="form-control form-control-solid" id="editMasuk" readonly required />
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
                                <input type="text" class="form-control form-control-solid" value="Alamat Palsu " id="editAlamat" readonly required />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <h6 class="">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input editBepergian" type="radio" name="bepergian" id="ya_berpergian" value="Ya" onclick="edit_show();" checked>
                                <label class="form-check-label" for="ya_berpergian">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input editBepergian" type="radio" name="bepergian" id="tidak_berpergian" onclick="edit_hide();" value="Tidak">
                                <label class="form-check-label" for="tidak_berpergian">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="pergi_hide_edit col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Sebutkan Pergi ke Mana</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Wilayah" id="editKemana" name="riw_perjalanan" />
                            </div>
                        </div>
                        <div class="tgl_hide_edit col-sm-4">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Pada Tanggal</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan Tanggal" id="edit_tglWilayah" name="tgl_perjalanan"/>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6"></div>
                    <h6 class="">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ? </h6>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input editTamu" type="radio" name="riw_tamu" id="ya_tamu" value="Ya" checked>
                                <label class="form-check-label" for="ya_tamu">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input editTamu" type="radio" name="riw_tamu" id="tidak_tamu" value="Tidak">
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
                                <input class="form-check-input editTetangga" type="radio" name="tetangga" id="ya_penderita" value="Ya" checked>
                                <label class="form-check-label" for="ya_penderita">
                                    Ya
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input editTetangga" type="radio" name="tetangga" id="tidak" value="Tidak">
                                <label class="form-check-label" for="tidak">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <p class="fw-bolder mt-6">Sebutkan ID Penderita / Suspek Lain tersebut :</p>
                        <div class="section row fieldGroup3">
                        </div>
                        <div class="form-group mt-4 text-center">
                            <a href="javascript:void(0)" class="btn btn-light-primary addMore3">
                                <i class="la la-plus"></i>Tambah Penderita / Suspek Lain
                            </a>
                        </div>
                        <h6 class="mt-6">Pemeriksaan Jentik KK</h6>
                        <div class="section row fieldGroup4">
                        </div>
                        <div class="form-group mt-4 text-center">
                            <a href="javascript:void(0)" data-repeater-create class="btn btn-light-primary addMore4">
                                <i class="la la-plus"></i>Tambah Kepala Keluarga
                            </a>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editId" name="id_pe">
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
            <form action="<?= site_url('epidemiologis/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Data Penyelidikan Epidemiologis tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusId" name="id_pe" />
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
                            <label class="fw-bold ">Tanggal PE</label>
                        </div>
                        <div class="col">
                            <p id="detTglPE"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">NIK</label>
                        </div>
                        <div class="col">
                            <p id="detNik"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <p id="detNama"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <p id="detGender"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Lahir</label>
                        </div>
                        <div class="col">
                            <p id="detDob"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Orang Tua</label>
                        </div>
                        <div class="col">
                            <p id="detOrtu"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Alamat</label>
                        </div>
                        <div class="col">
                            <p id="detAlamat"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Kelurahan</label>
                        </div>
                        <div class="col">
                            <p id="detKelurahan"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Latitude</label>
                        </div>
                        <div class="col">
                            <p id="detLatitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Longitude</label>
                        </div>
                        <div class="col">
                            <p id="detLongitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Puskesmas</label>
                        </div>
                        <div class="col">
                            <p id="detPuskesmas"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Nama Rumah Sakit</label>
                        </div>
                        <div class="col">
                            <p id="detRumkit"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Mulai Sakit</label>
                        </div>
                        <div class="col">
                            <p id="detSakit"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Tanggal Dirawat</label>
                        </div>
                        <div class="col">
                            <p id="detMasuk"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah dalam dua minggu terakhir (sebelum sakit) Penderita berpergian ke luar wilayah ?</label>
                        </div>
                        <div class="col">
                            <p id="detBepergian"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Pergi Ke</label>
                        </div>
                        <div class="col">
                            <p id="detKemana"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Pada Tanggal</label>
                        </div>
                        <div class="col">
                            <p id="detKapan"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah terdapat tamu dari luar wilayah yang menginap dalam dua minggu terakhir (sebelum sakit) ?</label>
                        </div>
                        <div class="col">
                            <p id="detTamu"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-6">
                            <label class="fw-bold ">Apakah terdapat Penderita DBD yang tinggal satu Rumah atau tetangga rumah ?</label>
                        </div>
                        <div class="col">
                            <p id="detTetangga"></p>
                        </div>
                    </div>
                    <div class="detSuspek">
                        <h6 class="mt-4 mb-4">Sebutkan ID Penderita / Suspek Lain tersebut :</h6>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Nama</label>
                            </div>
                            <div class="col">
                                <p id="detNamaSuspek">-</p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Jenis Kelamin</label>
                            </div>
                            <div class="col">
                                <p id="detJenkelSuspek">-</p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Umur</label>
                            </div>
                            <div class="col">
                                <p id="detUmurSuspek">-</p>
                            </div>
                        </div>
                    </div>
                    <div class="detKK">
                        <h6 class="mt-4 mb-4">Pemeriksaan Jentik KK</h6>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Nama Kartu Keluarga</label>
                            </div>
                            <div class="col">
                                <p id="detNamaKK"></p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Latitude</label>
                            </div>
                            <div class="col">
                                <p id="detLatitudeKK"></p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Longitude</label>
                            </div>
                            <div class="col">
                                <p id="detLongitudeKK"></p>
                            </div>
                        </div>                    
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
                                <p id="detTandonPeriksa"></p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Jumlah Positif Jentik</label>
                            </div>
                            <div class="col">
                                <p id="detPosJentik"></p>
                            </div>
                        </div>       
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
                                <p id="detTandonPeriksaLuar"></p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Jumlah Positif Jentik</label>
                            </div>
                            <div class="col">
                                <p id="detPosJentikLuar"></p>
                            </div>
                        </div>  
                        <div class="separator mb-2"></div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Total Periksa</label>
                            </div>
                            <div class="col">
                                <p id="detTotalPeriksa"></p>
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-6">
                                <label class="fw-bold ">Total Positif Jentik</label>
                            </div>
                            <div class="col">
                                <p id="detTotalPos"></p>
                            </div>
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
        allowInput: true,
        onOpen: function(selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', true);
        },
        onClose: function(selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', false);
            $(instance.altInput).blur();
        },
        dateFormat: "Y-m-d",
    });

    $("#edit_tglWilayah").flatpickr({
        dateFormat: "Y-m-d",
    });

    $("#add_tglPE").flatpickr({
        allowInput: true,
        onOpen: function(selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', true);
        },
        onClose: function(selectedDates, dateStr, instance) {
            $(instance.altInput).prop('readonly', false);
            $(instance.altInput).blur();
        },
        dateFormat: "Y-m-d",
    });

    $("#edit_tglPE").flatpickr({
        dateFormat: "Y-m-d",
    });

    function radius_hide() {
        document.getElementsByClassName('pergi_hide_add')[0].style.visibility = 'hidden';
        document.getElementsByClassName('tgl_hide_add')[0].style.visibility = 'hidden';
    }

    function radius_show() {
        document.getElementsByClassName('pergi_hide_add')[0].style.visibility = 'visible';
        document.getElementsByClassName('tgl_hide_add')[0].style.visibility = 'visible';
    }

    function edit_hide() {
        document.getElementsByClassName('pergi_hide_edit')[0].style.visibility = 'hidden';
        document.getElementsByClassName('tgl_hide_edit')[0].style.visibility = 'hidden';
    }

    function edit_show() {
        document.getElementsByClassName('pergi_hide_edit')[0].style.visibility = 'visible';
        document.getElementsByClassName('tgl_hide_edit')[0].style.visibility = 'visible';
    }

    $('#add_suspek_repeater').repeater({
        initEmpty: true,

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

    $(".addMore").click(function() {
        if ($('body').find('.fieldGroup').length < 4) {
            var fieldHTML =
                '<div class="section row fieldGroup" id="spy1">' +
                '<div class="col-5">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Nama</span>' +
                ' </label>' +
                '<input type="text" class="form-control form-control-solid" name="nama_suspek[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-3">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">L/P</span>' +
                '</label>' +
                '<select class="form-control form-control-solid" name="gender_suspek[]" required>' +
                '<option></option>' +
                '<option value="Laki-laki">Laki-laki</option>' +
                ' <option value="Perempuan">Perempuan</option>' +
                '</select>' +
                ' </div>' +
                '</div>' +
                '<div class="col-2">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Umur</span>' +
                '</label>' +
                '<input type="number" min="0" class="form-control form-control-solid" name="umur_suspek[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-2">' +
                '<a href="javascript:void(0)" class="btn btn-light-danger mt-3 mt-md-8 remove">' +
                '<i class="la la-trash-o"></i>Hapus' +
                '</a>' +
                '</div>' +
                '</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        } else {
            alert('Hanya dapat menambahkan maksimal 3 suspek!');
        }
    });

    $("body").on("click", ".remove", function() {
        $(this).parents(".fieldGroup").remove();
    });

    $(".addMore2").click(function() {
        if ($('body').find('.fieldGroup2').length < 4) {
            var fieldHTML =
                '<div class="section row fieldGroup2">' +
                '<div class="row">' +
                '<div class="col">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Nama KK</span>' +
                '</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" name="namakk[]" required />' +
                '</div>' +
                ' </div>' +
                '<div class="col">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Latitude</span>' +
                ' </label>' +
                ' <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="latitude[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col">' +
                ' <div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Longitude</span>' +
                '</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="longitude[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="row">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>' +
                '</label>' +
                '<div class="row">' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="tandondlmperiksa[]" required />' +
                '</div>' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="tandondlmpos[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="row">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Pemeriksaan Tandon Air Luar Rumah</span>' +
                '</label>' +
                '<div class="row">' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="tandonluarperiksa[]" required />' +
                '</div>' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="tandonluarpos[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="text-end">' +
                '<a href="javascript:void(0)" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8 remove2">' +
                '<i class="la la-trash-o"></i>Hapus' +
                '</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('body').find('.fieldGroup2:last').after(fieldHTML);
        } else {
            alert('Hanya dapat menambahkan maksimal 3!');
        }
    });

    $("body").on("click", ".remove2", function() {
        $(this).parents(".fieldGroup2").remove();
    });

    $(".addMore3").click(function() {
        if ($('body').find('.fieldGroup3').length < 4) {
            var fieldHTML =
                '<div class="section row fieldGroup3">' +
                '<div class="col-5">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Nama</span>' +
                ' </label>' +
                '<input type="text" class="form-control form-control-solid" name="nama_suspek[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-3">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">L/P</span>' +
                '</label>' +
                '<select class="form-control form-control-solid" name="gender_suspek[]" required>' +
                '<option></option>' +
                '<option value="Laki-laki">Laki-laki</option>' +
                ' <option value="Perempuan">Perempuan</option>' +
                '</select>' +
                ' </div>' +
                '</div>' +
                '<div class="col-2">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Umur</span>' +
                '</label>' +
                '<input type="number" min="0" class="form-control form-control-solid" name="umur_suspek[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-2">' +
                '<a href="javascript:void(0)" class="btn btn-light-danger mt-3 mt-md-8 remove3">' +
                '<i class="la la-trash-o"></i>Hapus' +
                '</a>' +
                '</div>' +
                '</div>';
            $('body').find('.fieldGroup3:last').after(fieldHTML);
        } else {
            alert('Hanya dapat menambahkan maksimal 3 suspek!');
        }
    });

    $("body").on("click", ".remove3", function() {
        $(this).parents(".fieldGroup3").remove();
    });

    $(".addMore4").click(function() {
        if ($('body').find('.fieldGroup4').length < 4) {
            var fieldHTML =
                '<div class="section row fieldGroup4">' +
                '<div class="row">' +
                '<div class="col">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Nama KK</span>' +
                '</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" name="namakk[]" required />' +
                '</div>' +
                ' </div>' +
                '<div class="col">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Latitude</span>' +
                ' </label>' +
                ' <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="latitude[]" required />' +
                '</div>' +
                '</div>' +
                '<div class="col">' +
                ' <div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                ' <span class="required">Longitude</span>' +
                '</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="longitude[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="row">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>' +
                '</label>' +
                '<div class="row">' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="tandondlmperiksa[]" required />' +
                '</div>' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="tandondlmpos[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="row">' +
                '<div class="d-flex flex-column mb-8 fv-row">' +
                '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                '<span class="required">Pemeriksaan Tandon Air Luar Rumah</span>' +
                '</label>' +
                '<div class="row">' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" name="tandonluarperiksa[]" required />' +
                '</div>' +
                '<div class="col">' +
                '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" name="tandonluarpos[]" required />' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="text-end">' +
                '<a href="javascript:void(0)" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8 remove4">' +
                '<i class="la la-trash-o"></i>Hapus' +
                '</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('body').find('.fieldGroup4:last').after(fieldHTML);
        } else {
            alert('Hanya dapat menambahkan maksimal 3!');
        }
    });

    $("body").on("click", ".remove4", function() {
        $(this).parents(".fieldGroup4").remove();
    });
</script>
<script>
    $("#mdlAdd_select").change(function(e) {
        var nik = $("#mdlAdd_select").val();
        $.ajax({
            url: "<?= site_url('epidemiologis/ajxGetPasien') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_px: nik
            },
            success: res => {
                $('#tambahNama').val(res[0].nama_px)
                $('#tambahGender').val(res[0].gender_px).change()
                $('#tambahDob').val(res[0].dob_px)
                $('#tambahUmur').val(res[0].umur_px)
                $('#tambahOrtu').val(res[0].namaortu_px)
                $('#tambahAlamat').val(res[0].alamat_px)
                $('#tambahKelurahan').val(res[0].nama_kelurahan)
                $('#tambahLatitude').val(res[0].latitude)
                $('#tambahLongitude').val(res[0].longitude)
                $('#tambahPuskesmas').val(res[0].namapuskesmas_px)
                $('#tambahRumkit').val(res[0].namarumkit_px)
                $('#tambahSakit').val(res[0].tgl_sakit)
                $('#tambahMasuk').val(res[0].tgl_masuk_rumkit)
            }
        })
    });

    $('#tabelPE tbody').on('click', '.mdl_detPE', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('epidemiologis/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pe: id
            },
            success: res => {
                $('#detTglPE').html(res[0].tgl_pe)
                $('#detNik').html(res[0].nik_px)
                $('#detNama').html(res[0].nama_px)
                $('#detGender').html(res[0].gender_px)
                $('#detDob').html(res[0].dob_px)
                $('#detUmur').html(res[0].umur_px)
                $('#detOrtu').html(res[0].namaortu_px)
                $('#detAlamat').html(res[0].alamat_px)
                $('#detKelurahan').html(res[0].nama_kelurahan)
                $('#detLatitude').html(res[0].latitude)
                $('#detLongitude').html(res[0].longitude)
                $('#detPuskesmas').html(res[0].namapuskesmas_px)
                $('#detRumkit').html(res[0].namarumkit_px)
                $('#detSakit').html(res[0].tgl_sakit)
                $('#detMasuk').html(res[0].tgl_masuk_rumkit)
                $('#detBepergian').html(res[0].bepergian)
                $('#detTamu').html(res[0].riw_tamu)
                $('#detTetangga').html(res[0].tetangga)

                var resss = $('body').find('.detSuspek');
                for (var i = 1; i < resss.length; i++) {
                    resss[i].remove();
                }
                var reskk = $('body').find('.detKK');
                for (var i = 1; i < reskk.length; i++) {
                    reskk[i].remove();
                }

                if(res[0].listnama != ''){
                    $('#detNamaSuspek').html(res[0].listnama[0])
                    $('#detJenkelSuspek').html(res[0].listgender[0])
                    $('#detUmurSuspek').html(res[0].listumur[0])

                    for (var i = 1; i < res[0].listnama.length; i++) {
                        var fieldHTML =
                        '<div class="detSuspek"><hr><div class="row justify-content-start">'+
                            '<div class="col-6">'+
                                '<label class="fw-bold ">Nama</label>'+
                            '</div>'+
                            '<div class="col">'+
                                '<p>'+res[0].listnama[i]+'</p>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-start">'+
                            '<div class="col-6">'+
                                '<label class="fw-bold ">Jenis Kelamin</label>'+
                            '</div>'+
                            '<div class="col">'+
                                '<p>'+res[0].listgender[i]+'</p>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row justify-content-start">'+
                            '<div class="col-6">'+
                                '<label class="fw-bold ">Umur</label>'+
                            '</div>'+
                            '<div class="col">'+
                                '<p>'+res[0].listumur[i]+'</p>'+
                            '</div>'+
                        '</div></div>';
                        $('body').find('.detSuspek:last').after(fieldHTML);
                    }
                }else{
                    $('#detNamaSuspek').html('-')
                    $('#detJenkelSuspek').html('-')
                    $('#detUmurSuspek').html('-')
                }

                if(res[0].listkk != ''){
                    $('#detNamaKK').html(res[0].listkk[0])
                    $('#detLatitudeKK').html(res[0].listlat[0])
                    $('#detLongitudeKK').html(res[0].listlong[0])
                    $('#detTandonPeriksa').html(res[0].listdlmper[0])
                    $('#detPosJentik').html(res[0].listdlmpos[0])
                    $('#detTandonPeriksaLuar').html(res[0].listluarper[0])
                    $('#detPosJentikLuar').html(res[0].listluarpos[0])
                    $('#detTotalPeriksa').html(res[0].listtotalper[0])
                    $('#detTotalPos').html(res[0].listtotalpos[0])

                    for (var i = 1; i < res[0].listkk.length; i++) {
                        var fieldHTML =
                        '<div class="detKK"><hr>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Nama Kartu Keluarga</label>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<p>'+res[0].listkk[i]+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Latitude</label>'+
                                '</div>'+
                                '<div class="col">'+
                                   ' <p>'+res[0].listlat[i]+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                               ' <div class="col-6">'+
                                    '<label class="fw-bold ">Longitude</label>'+
                                '</div>'+
                                '<div class="col">'+
                                   ' <p>'+res[0].listlong[i]+'</p>'+
                                '</div>'+
                            '</div>'+                            
                            '<div class="text-center mb-2">'+
                                '<div class="row">'+
                                    '<div class="col">'+
                                        '<label class="fw-bold text-center">Pemeriksaan Tandon Air Dalam Rumah</label>'+
                                    '</div>'+
                            ' </div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Jumlah Tandon Periksa</label>'+
                                '</div>'+
                                '<div class="col">'+
                                ' <p>'+res[0].listdlmper[i]+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Jumlah Positif Jentik</label>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<p>'+res[0].listdlmpos[i]+'</p>'+
                                '</div>'+
                            '</div>   '    +
                            '<div class="text-center mb-2">'+
                            '<div class="row">'+
                                '<div class="col">'+
                                        '<label class="fw-bold text-center">Pemeriksaan Tandon Air Luar Rumah</label>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Jumlah Tandon Periksa</label>'+
                                '</div>'+
                                '<div class="col">'+
                                ' <p>'+res[0].listluarper[i]+'</p>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Jumlah Positif Jentik</label>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<p>'+res[0].listluarpos[i]+'</p>'+
                                '</div>'+
                            '</div>  ' +
                            '<div class="separator mb-2"></div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                    '<label class="fw-bold ">Total Periksa</label>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<p>'+res[0].listtotalper[i]+'</p>'+
                               ' </div>'+
                            '</div>'+
                            '<div class="row justify-content-start">'+
                                '<div class="col-6">'+
                                   ' <label class="fw-bold ">Total Positif Jentik</label>'+
                                '</div>'+
                                '<div class="col">'+
                                    '<p>'+res[0].listtotalpos[i]+'</p>'+
                                '</div>'+
                            '</div>'  +
                       ' </div>';
                        $('body').find('.detKK:last').after(fieldHTML);
                    }
                }else{
                    $('#detNamaKK').html('-')
                    $('#detLatitudeKK').html('-')
                    $('#detLongitudeKK').html('-')
                    $('#detTandonPeriksa').html('-')
                    $('#detPosJentik').html('-')
                    $('#detTandonPeriksaLuar').html('-')
                    $('#detPosJentikLuar').html('-')
                    $('#detTotalPeriksa').html('-')
                    $('#detTotalPos').html('-')
                }

                if (res[0].bepergian == "Ya") {                     
                    $('#detKemana').html(res[0].riw_perjalanan)
                    $('#detKapan').html(res[0].tgl_perjalanan)                   
                }
            }
        })
    })

    $('#tabelPE tbody').on('click', '.mdl_editPE', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('epidemiologis/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pe: id
            },
            success: res => {
                $('#editNik').val(res[0].nik_px)
                $('#editIdPasien').val(res[0].id_px)
                $('#edit_tglPE').val(res[0].tgl_pe)
                $('#editNama').val(res[0].nama_px)
                $('#editGender').val(res[0].gender_px).change()
                $('#editDob').val(res[0].dob_px)
                $('#editUmur').val(res[0].umur_px)
                $('#editOrtu').val(res[0].namaortu_px)
                $('#editAlamat').val(res[0].alamat_px)
                $('#editKelurahan').val(res[0].nama_kelurahan)
                $('#editLatitude').val(res[0].latitude)
                $('#editLongitude').val(res[0].longitude)
                $('#editPuskesmas').val(res[0].namapuskesmas_px)
                $('#editRumkit').val(res[0].namarumkit_px)
                $('#editSakit').val(res[0].tgl_sakit)
                $('#editMasuk').val(res[0].tgl_masuk_rumkit)
                $('.editBepergian[value="' + res[0].bepergian + '"]').prop('checked', true);
                $('.editTetangga[value="' + res[0].tetangga + '"]').prop('checked', true);
                $('.editTamu[value="' + res[0].riw_tamu + '"]').prop('checked', true);
                $('#editKemana').val(res[0].riw_perjalanan)
                $('#edit_tglWilayah').val(res[0].tgl_perjalanan)
                $('#editId').val(res[0].id_pe)

                if (res[0].bepergian == "Tidak") {                    
                    document.getElementsByClassName('pergi_hide_edit')[0].style.visibility = 'hidden';
                    document.getElementsByClassName('tgl_hide_edit')[0].style.visibility = 'hidden';
                }else if(res[0].bepergian == "Ya"){                    
                    document.getElementsByClassName('pergi_hide_edit')[0].style.visibility = 'visible';
                    document.getElementsByClassName('tgl_hide_edit')[0].style.visibility = 'visible';
                }

                var reset = $('body').find('.fieldGroup3');
                for (var i = 1; i < reset.length; i++) {
                    reset[i].remove();
                }

                if (res[0].listnama.length > 0 && res[0].listnama != null) {
                    for (var i = 0; i < res[0].listnama.length; i++) {
                        var c = i + 1;
                        var fieldHTML =
                            '<div class="section row fieldGroup3">' +
                            '<div class="col-5">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            '<span class="required">Nama</span>' +
                            ' </label>' +
                            '<input type="text" class="form-control form-control-solid" name="nama_suspek[]" value="' + res[0].listnama[i] + '" required />' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-3">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            '<span class="required">L/P</span>' +
                            '</label>' +
                            '<select class="form-control form-control-solid" id="editGender' + c + '" name="gender_suspek[]" required>' +
                            '<option></option>' +
                            '<option value="Laki-laki">Laki-laki</option>' +
                            '<option value="Perempuan">Perempuan</option>' +
                            '</select>' +
                            ' </div>' +
                            '</div>' +
                            '<div class="col-2">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            '<span class="required">Umur</span>' +
                            '</label>' +
                            '<input type="number" min="0" class="form-control form-control-solid" value="' + res[0].listumur[i] + '" name="umur_suspek[]" required />' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-2">' +
                            '<a href="javascript:void(0)" class="btn btn-light-danger mt-3 mt-md-8 remove3">' +
                            '<i class="la la-trash-o"></i>Hapus' +
                            '</a>' +
                            '</div>' +
                            '</div>';
                        $('body').find('.fieldGroup3:last').after(fieldHTML);

                        $('#editGender' + c).val(res[0].listgender[i])
                    }
                }

                var resetkk = $('body').find('.fieldGroup4');
                for (var i = 1; i < resetkk.length; i++) {
                    resetkk[i].remove();
                }

                if (res[0].listkk.length > 0 && res[0].listkk != null) {
                    for (var i = 0; i < res[0].listkk.length; i++) {
                        var c = i + 1;
                        var fieldHTML =
                            '<div class="section row fieldGroup4">' +
                            '<div class="row">' +
                            '<div class="col">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            ' <span class="required">Nama KK</span>' +
                            '</label>' +
                            '<input type="text" class="form-control form-control-solid" placeholder="Masukan Nama KK" value="' + res[0].listkk[i] + '" name="namakk[]" required />' +
                            '</div>' +
                            ' </div>' +
                            '<div class="col">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            ' <span class="required">Latitude</span>' +
                            ' </label>' +
                            ' <input type="text" class="form-control form-control-solid" placeholder="Masukan Latitude" name="latitude[]" value="' + res[0].listlat[i] + '" required />' +
                            '</div>' +
                            '</div>' +
                            '<div class="col">' +
                            ' <div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            ' <span class="required">Longitude</span>' +
                            '</label>' +
                            '<input type="text" class="form-control form-control-solid" placeholder="Masukan Longitude" name="longitude[]" value="' + res[0].listlong[i] + '" required />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            '<span class="required">Pemeriksaan Tandon Air Dalam Rumah</span>' +
                            '</label>' +
                            '<div class="row">' +
                            '<div class="col">' +
                            '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" value="' + res[0].listdlmper[i] + '" name="tandondlmperiksa[]" required />' +
                            '</div>' +
                            '<div class="col">' +
                            '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" value="' + res[0].listdlmpos[i] + '" name="tandondlmpos[]" required />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row">' +
                            '<div class="d-flex flex-column mb-8 fv-row">' +
                            '<label class="d-flex align-items-center fs-6 fw-bold mb-2">' +
                            '<span class="required">Pemeriksaan Tandon Air Luar Rumah</span>' +
                            '</label>' +
                            '<div class="row">' +
                            '<div class="col">' +
                            '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Tandon Periksa" value="' + res[0].listluarper[i] + '" name="tandonluarperiksa[]" required />' +
                            '</div>' +
                            '<div class="col">' +
                            '<input type="number" min="0" class="form-control form-control-solid" placeholder="Jumlah Positif Jentik" value="' + res[0].listluarpos[i] + '" name="tandonluarpos[]" required />' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="text-end">' +
                            '<a href="javascript:void(0)" data-repeater-delete class="btn btn-light-danger mt-3 mt-md-8 remove4">' +
                            '<i class="la la-trash-o"></i>Hapus' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $('body').find('.fieldGroup4:last').after(fieldHTML);
                    }
                }
            }
        })
    })

    $('#tabelPE tbody').on('click', '.mdl_delPE', function() {
        const id = $(this).data("id")
        $('#hapusId').val(id)
    })
</script>