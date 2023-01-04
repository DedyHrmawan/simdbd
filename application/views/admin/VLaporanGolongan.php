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
                    <div class="col-5 ">
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
                            <form action="<?= site_url('laporan_umur/filter') ?>" method="post">
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
                    <div class="col-2 mt-10">
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
                    <div class="col-1 mt-10">                        
                        <button type="submit" class="btn btn-md btn-primary">Filter</button>
                    </div>
                    </form>
                    <div class="col-2 mt-10">
                        <div>
                            <a href="<?= site_url('laporan_umur/download/'.$bulan.'/'.$seltahun) ?>" class="btn btn-md btn-primary"><i class="fas fa-file-download"></i>Download</a>
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
                            <?php                                
                                $no = 1;
                                $at = array();$at[0]=0;$at[1]=0;
                                $bt = array();$bt[0]=0;$bt[1]=0;
                                $ct = array();$ct[0]=0;$ct[1]=0;
                                $dt = array();$dt[0]=0;$dt[1]=0;
                                $et = array();$et[0]=0;$et[1]=0;
                                $ft = array();$ft[0]=0;$ft[1]=0;
                                $totalt = 0;
                                $lt = 0; $pt = 0;
                                foreach($kelurahan as $item){
                                    $a = array();$a[0]=0;$a[1]=0;
                                    $b = array();$b[0]=0;$b[1]=0;
                                    $c = array();$c[0]=0;$c[1]=0;
                                    $d = array();$d[0]=0;$d[1]=0;
                                    $e = array();$e[0]=0;$e[1]=0;
                                    $f = array();$f[0]=0;$f[1]=0;
                                    $total = 0;
                                    $l = 0; $p = 0;
                                    foreach($list as $key){
                                        if($item->kelurahan == $key->nama_kelurahan){
                                            if($key->umur_px <= 1){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $a[0]++; $l++; $at[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $a[1]++; $p++; $at[1]++; $pt++; 
                                                }
                                            }else if($key->umur_px > 1 && $key->umur_px <= 4){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $b[0]++; $l++; $bt[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $b[1]++; $p++; $bt[1]++; $pt++;
                                                }
                                            }else if($key->umur_px > 4 && $key->umur_px <= 14){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $c[0]++; $l++; $ct[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $c[1]++; $p++; $ct[1]++; $pt++;
                                                }
                                            }else if($key->umur_px > 14 && $key->umur_px <= 24){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $d[0]++; $l++; $dt[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $d[1]++; $p++; $dt[1]++; $pt++;
                                                }
                                            }else if($key->umur_px > 24 && $key->umur_px <= 44){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $e[0]++; $l++; $et[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $e[1]++; $p++; $et[1]++; $pt++;
                                                }
                                            }else if($key->umur_px > 45){
                                                if($key->gender_px == 'Laki-laki'){
                                                    $f[0]++; $l++; $ft[0]++; $lt++;
                                                }else if($key->gender_px == 'Perempuan'){
                                                    $f[1]++; $p++; $ft[1]++; $pt++;
                                                }
                                            }
                                        }
                                    }
                                    $total = $l + $p;
                                    echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$item->kelurahan.'</td>
                                        <td>'.$a[0].'</td>
                                        <td>'.$a[1].'</td>
                                        <td>'.$b[0].'</td>
                                        <td>'.$b[1].'</td>                                
                                        <td>'.$c[0].'</td>
                                        <td>'.$c[1].'</td>                                
                                        <td>'.$d[0].'</td>
                                        <td>'.$d[1].'</td>
                                        <td>'.$e[0].'</td>
                                        <td>'.$e[1].'</td>
                                        <td>'.$f[0].'</td>
                                        <td>'.$f[1].'</td>
                                        <td>'.$l.'</td>
                                        <td>'.$p.'</td>
                                        <td>'.$total.'</td>
                                    </tr>
                                    ';
                                    $no++;
                                }
                            ?>                            
                        </tbody>
                        <tfoot class="text-center">
                            <th colspan="2">Jumlah</th>
                            <th><?= $at[0] ?></th>
                            <th><?= $at[1] ?></th>
                            <th><?= $bt[0] ?></th>
                            <th><?= $bt[1] ?></th>
                            <th><?= $ct[0] ?></th>
                            <th><?= $ct[1] ?></th>
                            <th><?= $dt[0] ?></th>
                            <th><?= $dt[1] ?></th>
                            <th><?= $et[0] ?></th>
                            <th><?= $et[1] ?></th>
                            <th><?= $ft[0] ?></th>
                            <th><?= $ft[1] ?></th>
                            <th><?= $lt ?></th>
                            <th><?= $pt ?></th>
                            <th><?= $lt+$pt ?></th>
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