<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Feedback</span>
                </h3>
            </div>
            <div class="card-body py-3">
                <div class="">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelFeedback">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    $date = date_create($item->tgl_feedback);
                                    $tanggal = date_format($date,"d F Y");
                                    echo '
                                    <tr>
                                        <td class="text-dark fw-bolder">'.$no.'</td>
                                        <td class="text-dark fw-bolder">'.$tanggal.'</td>
                                        <td class="text-dark fw-bolder">'.$item->email_feedback.'</td>
                                        <td class="text-dark fw-bolder">'.$item->judul_feedback.'</td>
                                        <td class="text-dark fw-bolder">'.mb_strimwidth($item->pesan_feedback, 0, 200, "...").'</td>
                                        <td class="">
                                            <a href="" title="Detail Feedback" data-bs-toggle="modal" data-bs-target="#mdl_detFeedback" data-id="'.$item->id_feedback.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detFeedback me-1">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                    </svg></span>
                                            </a>
                                            <a href="" title="Balas Feedback" data-bs-toggle="modal" data-bs-target="#mdl_editJentik" data-id="'.$item->id_feedback.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editJentik m-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                    <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                </svg>
                                            </a>
                                            <a href="#" title="Hapus Feedback" data-bs-toggle="modal" data-bs-target="#mdl_delJentik" data-id="'.$item->id_feedback.'" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delJentik btn-sm m-1">
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

<!-- Modal Edit Jentik Berkala-->
<div class="modal fade" tabindex="-1" id="mdl_editJentik">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Balas Feedback dari <b>Dedy Hermawan</b> </h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="#" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Email</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" value="dedy@gmail.com" name="" required disabled />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Subjek</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" value="Subjek Isi ape" name="" required disabled />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pesan</span>
                        </label>
                        <textarea class="form-control form-control-solid tinyMce" name="" id="" cols="30" rows="10" required></textarea>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Feedback-->
<div class="modal fade" tabindex="-1" id="mdl_delJentik">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Feedback</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <form action="<?= site_url('feedback/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Feedback tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusId" name="id_feedback">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail Feedback-->
<div class="modal fade" tabindex="-1" id="mdl_detFeedback">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Feedback</h3>

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
                    <div class="form-group">
                        <h6>Nama</h6>
                        <p id="detNama"></p>
                    </div>
                    <div class="form-group">
                        <h6>Waktu</h6>
                        <p id="detTgl"></p>
                    </div>
                    <div class="form-group">
                        <h6>Email</h6>
                        <p id="detEmail"></p>
                    </div>
                    <div class="form-group">
                        <h6>Subjek</h6>
                        <p id="detJudul"></p>
                    </div>
                    <div class="form-group">
                        <h6>Pesan</h6>
                        <p id="detPesan"></p>
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
    $('#tabelFeedback').dataTable({
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

    tinymce.init({
        selector: ".tinyMce",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
        ],
        plugins: "advlist autolink link image lists charmap print preview code"
    });
</script>
<script>
    $('#tabelFeedback tbody').on('click', '.mdl_detFeedback', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('feedback/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_feedback: id
            },
            success: res => {
                $('#detNama').html(res[0].nama_feedback)
                $('#detEmail').html(res[0].email_feedback)
                $('#detTgl').html(res[0].tgl_feedback)
                $('#detJudul').html(res[0].judul_feedback)
                $('#detPesan').html(res[0].pesan_feedback)
            }
        })
    })

    $('#tabelFeedback tbody').on('click', '.mdl_delJentik', function() {
        const id = $(this).data("id")
        $('#hapusId').val(id)
    })
</script>