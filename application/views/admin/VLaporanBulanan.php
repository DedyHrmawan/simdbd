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
                    <span class="card-label text-center fw-bolder fs-3 mb-1">Laporan Bulanan Kegiatan Penemuan Penderita Tersangka DBD</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="row">                    
                    <div class="col-2">
                        <div class="d-flex flex-column mb-8 fv-row">                            
                        <form action="<?= site_url('laporanbulanan/filter') ?>" method="post">
                            <select class="form-select " data-control="select2" name="mmonth">
                                <option value="1" <?= $bulan == '1'?'selected' : '' ?>>Januari</option>
                                <option value="2" <?= $bulan == '2'?'selected' : '' ?>>Februari</option>
                                <option value="3" <?= $bulan == '3'?'selected' : '' ?>>Maret</option>
                                <option value="4" <?= $bulan == '4'?'selected' : '' ?>>April</option>
                                <option value="5" <?= $bulan == '5'?'selected' : '' ?>>Mei</option>
                                <option value="6" <?= $bulan == '6'?'selected' : '' ?>>Juni</option>
                                <option value="7" <?= $bulan == '7'?'selected' : '' ?>>Juli</option>
                                <option value="8" <?= $bulan == '8'?'selected' : '' ?>>Agustus</option>
                                <option value="9" <?= $bulan == '9'?'selected' : '' ?>>September</option>
                                <option value="10" <?= $bulan == '10'?'selected' : '' ?>>Oktober</option>
                                <option value="11" <?= $bulan == '11'?'selected' : '' ?>>November</option>
                                <option value="12" <?= $bulan == '12'?'selected' : '' ?>>Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <select class="form-select" data-control="select2" name="yyear">
                                <?php
                                    foreach($tahun as $item){
                                        $selected = '';
                                        if($item->thn == $seltahun){
                                            $selected = 'selected';
                                        }
                                        echo '                                            
                                            <option value="'.$item->thn.'" '.$selected.'>'.$item->thn.'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-1">                        
                        <button type="submit" class="btn btn-md btn-primary">Filter</button>
                    </div>
                    </form>
                    <div class="col-2">
                        <a href="<?= site_url('laporanbulanan/download/'.$bulan.'/'.$seltahun) ?>" class="btn btn-md btn-primary"><i class="fas fa-file-download"></i>Download</a>
                    </div>   
                    <div>
                        <p>PUSKESMAS DINOYO</p>
                    </div>                 
                </div>
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
                                <th rowspan="2">Aksi</th>
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
                            foreach ($list as $item) {
                                $week = ceil((date("d",strtotime($item->tgl_sakit)) - date("w",strtotime($item->tgl_sakit)) - 1) / 7) + 1; 

                                $L = '';
                                $P = '';
                                $date = date_create($item->tgl_sakit);
                                $sakit = date_format($date, "d F Y");
                                $date = date_create($item->tgl_masuk_rumkit);
                                $rumkit = date_format($date, "d F Y");
                                $petgl = '';
                                if(!empty($item->tgl_pe)){
                                    $date = date_create($item->tgl_pe);
                                    $petgl = date_format($date, "d F Y");
                                }
                                if ($item->gender_px == 'Laki-laki') {
                                    $L = $item->umur_px;
                                } else if ($item->gender_px == 'Perempuan') {
                                    $P = $item->umur_px;
                                }
                                echo '
                                        <tr>
                                        <td style="text-align:center;">' . $week . '</td>
                                        <td>' . $no . '</td>
                                        <td>' . $item->nama_px . '</td>
                                        <td >' . $L . '</td>
                                        <td>' . $P . '</td>
                                        <td>' . $item->nama_kelurahan . '</td>
                                        <td >' . $sakit . '</td>
                                        <td >' . $rumkit . '</td>
                                        <td>' . $petgl . '</td>
                                        <td>'.$item->ket.'</td>
                                        <td>  
                                            <a href="" title="Edit Keterangan" data-bs-toggle="modal" data-bs-target="#mdl_editKet" data-id="'.$item->id_px.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editKet m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
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

            <form action="<?= site_url('laporanbulanan/keterangan') ?>" method="post">
            <div class="modal-body">
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Keterangan</span>
                    </label>
                    <textarea class="form-control form-control-solid" placeholder="Masukan Keterangan" name="ket" id="ketEdit" cols="10" rows="5"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="idKeterangan" name="id_px">
                <input type="hidden" name="bln" value="<?= $bulan ?>">
                <input type="hidden" name="thn" value="<?= $seltahun ?>">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
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

    $('#tabelBulanan tbody').on('click', '.mdl_editKet', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('laporanbulanan/ajxGetKeterangan') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_px: id
            },
            success: res => {
                $('#ketEdit').val(res[0].ket)
                $('#idKeterangan').val(res[0].id_px)
            }
        })
    })
</script>