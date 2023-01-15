<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Pasien</span>
                </h3>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#mdl_addPasien">Tambah Pasien</a>
                </div>
            </div>
            <?php
            if ($this->session->flashdata('failed_store')) {
                echo '   
                    <div class="card">
                        <div class="card-body card-rounded py-3">
                            <div class="alert alert-danger d-flex align-items-center p-5">
                                <div class="d-flex flex-column">
                                    <span>' . $this->session->flashdata('failed_store') . '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
            }
            ?>
            <div class="card-body py-3">
                <div class="">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelPasien">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Kelurahan</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list as $item) {
                                echo '
                                    <tr>
                                        <td class="text-dark fw-bolder">' . $no . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nik_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nama_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->gender_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->umur_px . '</td>
                                        <td class="text-dark fw-bolder">' . $item->nama_kelurahan . '</td>
                                        <td class="">
                                            <a href="" title="Detail Penyakit" data-bs-toggle="modal" data-bs-target="#mdl_detPasien" data-id="' . $item->id_px . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detPasien me-1">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                    </svg></span>
                                            </a>
                                            <a href="" title="Edit Penyakit" data-bs-toggle="modal" data-bs-target="#mdl_editPasien" data-id="' . $item->id_px . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editPasien m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" title="Hapus Pasien" data-bs-toggle="modal" data-bs-target="#mdl_delPasien" data-id="' . $item->id_px . '" data-nama="' . $item->nama_px . '" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delPasien btn-sm m-1">
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

<!-- Modal Tambah Pasien-->
<div class="modal fade" tabindex="-1" id="mdl_addPasien">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Pasien </h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('datapasien/tambah') ?>" id="form_addPasien" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">NIK</span>
                        </label>
                        <div class="fv-row row">
                            <div class="col">
                                <input type="text" class="form-control form-control-solid" placeholder="Masukan NIK" name="nik_px" required />

                            </div>
                            <div class="col-3">
                                <button href="#" id="btn_cek" class="btn btn-warning ">
                                    <span class="indicator-label">
                                    Cek !
                                    </span>
                                    <span class="indicator-progress">
                                        Tunggu... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Lengkap</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Lengkap" name="nama_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Jenis Kelamin</span>
                        </label>
                        <select class="form-control form-control-solid" name="gender_px" id="">
                            <option value="Laki-laki">Pilih Jenis Kelamin !</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Lahir</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Lahir" id="add_tglLahir" name="dob_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Umur</span>
                        </label>
                        <input type="number" class="form-control form-control-solid" placeholder="Masukan Umur" name="umur_px" min="0" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Orang Tua</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Orang Tua" name="namaortu_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Puskesmas</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Puskesmas" name="namapuskesmas_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Rumah Sakit</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Rumah Sakit" name="namarumkit_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Alamat</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Alamat" name="alamat_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kelurahan</span>
                        </label>
                        <select class="form-control form-control-solid" name="nama_kelurahan" id="" required>
                            <option value="Ketawanggede">Pilih Kelurahan !</option>
                            <option value="Ketawanggede">Ketawanggede</option>
                            <option value="Dinoyo">Dinoyo</option>
                            <option value="Tlogomas">Tlogomas</option>
                            <option value="Sumbersari">Sumbersari</option>
                            <option value="Tunggulwulung">Tunggulwulung</option>
                            <option value="Merjosari">Merjosari</option>
                        </select>
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
                            <span class="required">Tanggal Mulai Sakit</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Mulai Sakit" id="add_tglSakit" name="tgl_sakit" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Masuk Rumah Sakit</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Masuk Rumah Sakit" id="add_tglMasuk" name="tgl_masuk_rumkit" required />
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

<!-- Modal Edit Pasien-->
<div class="modal fade" tabindex="-1" id="mdl_editPasien">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Pasien</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('datapasien/edit') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">NIK</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editNik" name="nik_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Lengkap</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editNama" name="nama_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Jenis Kelamin</span>
                        </label>
                        <select class="form-control form-control-solid" name="gender_px" id="editGender">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Lahir</span>
                        </label>
                        <input class="form-control form-control-solid" id="edit_tglLahir" name="dob_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Umur</span>
                        </label>
                        <input type="number" class="form-control form-control-solid" id="editUmur" name="umur_px" min="0" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Orang Tua</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editOrtu" name="namaortu_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Puskesmas</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editPuskesmas" name="namapuskesmas_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Rumah Sakit</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editRumkit" name="namarumkit_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Alamat</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editAlamat" name="alamat_px" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kelurahan</span>
                        </label>
                        <select class="form-control form-control-solid" name="nama_kelurahan" id="editKelurahan" required>
                            <option value="Ketawanggede">Ketawanggede</option>
                            <option value="Dinoyo">Dinoyo</option>
                            <option value="Tlogomas">Tlogomas</option>
                            <option value="Sumbersari">Sumbersari</option>
                            <option value="Tunggulwulung">Tunggulwulung</option>
                            <option value="Merjosari">Merjosari</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Latitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editLatitude" name="latitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Longitude</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editLongitude" name="longitude" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Mulai Sakit</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Mulai Sakit" id="edit_tglSakit" name="tgl_sakit" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Masuk Rumah Sakit</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Pilih Tanggal Masuk Rumah Sakit" id="edit_tglMasuk" name="tgl_masuk_rumkit" required />
                    </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editId" name="id_px">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Pasien-->
<div class="modal fade" tabindex="-1" id="mdl_delPasien">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Pasien</h3>

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
                    <p>Apakah anda yakin ingin menghapus Pasien dengan Nama <b><span id="hapusNama"></b> ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusPasien" name="id_px">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail Pasien-->
<div class="modal fade" tabindex="-1" id="mdl_detPasien">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Pasien</h3>

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
                        <div class="col-4">
                            <label class="fw-bold ">NIK</label>
                        </div>
                        <div class="col">
                            <p id="detNik"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <p id="detNama"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <p id="detGender"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Tanggal Lahir</label>
                        </div>
                        <div class="col">
                            <p id="detDob"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Umur</label>
                        </div>
                        <div class="col">
                            <p id="detUmur"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Nama Orang Tua</label>
                        </div>
                        <div class="col">
                            <p id="detOrtu"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Alamat</label>
                        </div>
                        <div class="col">
                            <p id="detAlamat"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Kelurahan</label>
                        </div>
                        <div class="col">
                            <p id="detKelurahan"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Latitude</label>
                        </div>
                        <div class="col">
                            <p id="detLatitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Longitude</label>
                        </div>
                        <div class="col">
                            <p id="detLongitude"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Nama Puskesmas</label>
                        </div>
                        <div class="col">
                            <p id="detPuskesmas"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Nama Rumah Sakit</label>
                        </div>
                        <div class="col">
                            <p id="detRumkit"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Tanggal Mulai Sakit</label>
                        </div>
                        <div class="col">
                            <p id="detSakit"></p>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <label class="fw-bold ">Tanggal Masuk Rumah Sakit</label>
                        </div>
                        <div class="col">
                            <p id="detMasuk"></p>
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
    $('#tabelPasien').dataTable({
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

    $("#add_tglLahir").flatpickr({
        dateFormat: "d F Y",
    });
    $("#edit_tglLahir").flatpickr({
        dateFormat: "d F Y",
    });

    $("#add_tglSakit").flatpickr({
        dateFormat: "d F Y",
    });
    $("#edit_tglSakit").flatpickr({
        dateFormat: "d F Y",
    });

    $("#add_tglMasuk").flatpickr({
        dateFormat: "d F Y",
    });
    $("#edit_tglMasuk").flatpickr({
        dateFormat: "d F Y",
    });
</script>
<script>
    $('#tabelPasien tbody').on('click', '.mdl_detPasien', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('datapasien/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_px: id
            },
            success: res => {
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
            }
        })
    })

    $('#tabelPasien tbody').on('click', '.mdl_editPasien', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('datapasien/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_px: id
            },
            success: res => {
                $('#editNik').val(res[0].nik_px)
                $('#editNama').val(res[0].nama_px)
                $('#editGender').val(res[0].gender_px)
                $('#edit_tglLahir').val(res[0].dob_px)
                $('#editUmur').val(res[0].umur_px)
                $('#editOrtu').val(res[0].namaortu_px)
                $('#editAlamat').val(res[0].alamat_px)
                $('#editKelurahan').val(res[0].nama_kelurahan)
                $('#editLatitude').val(res[0].latitude)
                $('#editLongitude').val(res[0].longitude)
                $('#editPuskesmas').val(res[0].namapuskesmas_px)
                $('#editRumkit').val(res[0].namarumkit_px)
                $('#edit_tglSakit').val(res[0].tgl_sakit)
                $('#edit_tglMasuk').val(res[0].tgl_masuk_rumkit)
                $('#editId').val(res[0].id_px)
            }
        })
    })

    $('#tabelPasien tbody').on('click', '.mdl_delPasien', function() {
        const id = $(this).data("id")
        const nama = $(this).data("nama")
        $('#hapusPasien').val(id)
        $('#hapusNama').html(nama)
    })

    // Define form element
    const form = document.getElementById('form_addPasien');

    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(
        form, {
            fields: {
                'nik_px': {
                    validators: {
                        integer: {
                            message: 'Masukan NIK yang valid !'
                        },
                        notEmpty: {
                            message: 'NIK Diperlukan !'
                        },
                        stringLength: {
                            message: 'NIK Harus 16 Digit !',
                            min: 16,
                            max: 16,
                        }
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: '.fv-row',
                    eleInvalidClass: '',
                    eleValidClass: ''
                })
            }
        }
    );

    // Submit button handler
    const submitButton = document.getElementById('btn_cek');
    submitButton.addEventListener('click', function(e) {
        e.preventDefault();
        if (validator) {
            validator.validate().then(function(status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;
                    setTimeout(function() {
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;

                        // Sukses POPUP 
                        Swal.fire({
                            text: "NIK Berhasi Ditemukan",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, Mengerti !",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        // Gak Sukses POP UP 
                        // Swal.fire({
                        //     text: "NIK Tidak Ditemukan",
                        //     icon: "error",
                        //     buttonsStyling: false,
                        //     confirmButtonText: "Ok, Mengerti !",
                        //     customClass: {
                        //         confirmButton: "btn btn-danger"
                        //     }
                        // });

                        //form.submit(); // Submit form
                    }, 2000);
                }
            });
        }
    });
</script>