<div class="mt-20 ">
    <div class="post d-flex flex-column-fluid mb-xxl-20">
        <!--begin::Container-->
        <div class="container-xxl ">
            <!--begin::Post card-->
            <div class="card mb-20">
                <!--begin::Body-->
                <div class="card-body p-lg-20 pb-lg-0">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                            <!--begin::Post content-->
                            <div class="mb-17">
                                <!--begin::Wrapper-->
                                <div class="mb-8">
                                    <!--begin::Title-->
                                    <h2 href="#" class="text-dark  fs-2 fw-bolder"><?= $informasi[0]->judul_info ?></h2>
                                        <!--end::Title-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap mb-6">
                                            <!--begin::Item-->
                                            <div class="me-9 my-1">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <?php
                                                    $date=date_create($informasi[0]->tgl_info);
                                                    $tanggal = date_format($date,"d F Y");
                                                ?>
                                                <span class="fw-bolder text-gray-400"><?= $tanggal ?></span>
                                                <!--end::Label-->
                                            </div>
                                            <div class="me-9 my-1">
                                                <span class="fw-bolder text-gray-400">Admin</span>
                                            </div>
                                        </div>
                                        <div class="overlay mt-8">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('<?= $informasi[0]->gambar ?>')"></div>
                                        </div>
                                        <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Description-->
                                <div class="fs-5 fw-bold text-gray-600" style="text-align:justify;">
                                    <?= $informasi[0]->desc_info ?>
                                </div>
                            </div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                            <div class="m-0">
                                <h4 class="text-black mb-7">Daftar Artikel</h4>
                                <?php
                                    foreach($list as $item){
                                        $link = site_url('informasi/'.$item->id_info);
                                        echo '
                                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                            <a href="'.$link.'" class="text-muted text-hover-primary pe-2">'.$item->judul_info.'</a>
                                        </div>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                        <!--end::Sidebar-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
        </div>
        <!--end::Container-->
    </div>
</div>