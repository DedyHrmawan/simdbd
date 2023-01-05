<style>
	.bg-custom-green {
		background-color: #3CB371;
	}

	.custom-green {
		color: #3CB371;
	}
</style>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
	<div class="d-flex flex-column flex-root">
		<div class="mb-0" id="home">
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom bg-custom-green">
				<div class="landing-header bg-white" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<div class="container">
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center flex-equal">
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
								</button>
								<a href="<?= site_url('') ?>">
									<img alt="Logo" src="assets/media/logos/logo-blue.png" class="logo-default h-45px h-lgx-50px" />
									<img alt="Logo" src="assets/media/logos/logo-blue.png" class="logo-sticky h-40px h-lg-45px" />
								</a>
							</div>
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<div class="menu-item">
											<a class="menu-link text-success nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
										</div>
										<div class="menu-item">
											<a class="menu-link text-success nav-link py-3 px-4 px-xxl-6" href="#kasus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tingkat Kasus</a>
										</div>
										<div class="menu-item">
											<a class="menu-link text-success nav-link py-3 px-4 px-xxl-6" href="#rawan" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Daerah Rawan DBD</a>
										</div>
										<div class="menu-item">
											<a class="menu-link text-success nav-link py-3 px-4 px-xxl-6" href="#informasi" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Informasi</a>
										</div>
										<div class="menu-item">
											<a class="menu-link text-success nav-link py-3 px-4 px-xxl-6" href="#feedback" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Feedback</a>
										</div>
									</div>
								</div>
							</div>
							<div class="flex-equal text-end ms-1">
								<a href="<?= site_url('login') ?>" class="btn btn-success">Login</a>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column w-100 min-h-350px min-h-lg-500px px-9">
					<div class="mb-5 mb-lg-8 py-10 py-lg-20">
						<div class="row">
							<div class="col-8">
								<div class="tns tns-default">
									<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="8000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
										<?php
										foreach ($carousel as $item) {
											echo '
										<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
											<img src="' . $item->gambar . '" width="800" min-width="700" class="card-rounded shadow mw-100" alt="" />
										</div>
										';
										}
										?>
									</div>
									<button hidden class="btn btn-icon btn-white btn-active-color-success" id="kt_team_slider_prev1">
										<span class="svg-icon svg-icon-2x">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
											</svg>
										</span>
									</button>
									<button hidden class="btn btn-icon btn-white btn-active-color-success" id="kt_team_slider_next1">
										<span class="svg-icon svg-icon-2x">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
									</button>
								</div>
							</div>
							<div class="col mt-xl-20 text-left text-white">
								<h1 class="text-white">Puskesmas Dinoyo adalah salah satu puskesmas di Kota Malang.</h1>
								<br>
								<p class="fs-5">Wilayah kerja puskesmas meliputi :</p>
								<ol class="fs-6">
									<li>Kelurahan Ketawanggede.</li>
									<li>Kelurahan Dinoyo.</li>
									<li>Kelurahan Tlogomas.</li>
									<li>Kelurahan Sumbersari.</li>
									<li>Kelurahan Tunggulwulung.</li>
									<li>Kelurahan Merjosari.</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="landing-curve custom-green mb-10 mb-lg-20">
				<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
				</svg>
			</div>
		</div>
	</div>
	<div class="mb-lg-n15 position-relative z-index-2">
		<div class="container">
			<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
				<div class="card-body p-lg-20">
					<div class="mb-n10 mb-lg-n20">
						<div class="container ">
							<div class="text-center mb-17">
								<h3 class="fs-2hx text-dark mb-5" id="kasus" data-kt-scroll-offset="{default: 100, lg: 150}">Data Tingkat Kasus DBD</h3>
								<div class=" mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
									<div class="fs-5 fw-bold text-start text-dark">
										<br />
										<div class="row">
											<div class="col-sm-4">
												<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" id="selKel" data-allow-clear="true">
													<option></option>
													<option value="Dinoyo">Dinoyo</option>
													<option value="Ketawanggede">Ketawanggede</option>
													<option value="Tlogomas">Tlogomas</option>
													<option value="Sumbersari">Sumbersari</option>
													<option value="Tunggulwulung">Tunggulwulung</option>
													<option value="Merjosari">Merjosari</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div id="chart"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mt-sm-n10">
		<div class="landing-curve custom-green">
			<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
			</svg>
		</div>
		<div class="pb-15 pt-18 bg-custom-green">
			<div class="container">
				<div class="text-center mt-15 mb-18" id="rawan" data-kt-scroll-offset="{default: 100, lg: 150}">
					<h3 class="fs-2hx text-white fw-bolder mb-10">Daerah Rawan Kasus DBD</h3>
					<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7903.381061320183!2d112.6184119!3d-7.9273557!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1670427647196!5m2!1sid!2sid" width="1080" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
		<div class="landing-curve custom-green">
			<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<div class="py-10 py-lg-20">
		<div class="container">
			<div class="text-center mb-12">
				<h3 class="fs-2hx text-dark mb-5" id="informasi" data-kt-scroll-offset="{default: 100, lg: 150}">Informasi</h3>
			</div>
			<div class="row g-10">
				<?php
				foreach ($informasi as $item) {
					$link = site_url('informasi/' . $item->id_info);
					$date = date_create($item->tgl_info);
					$tanggal = date_format($date, "d F Y");
					echo '
						<div class="col-md-4">
							<div class="card-xl-stretch me-md-6">
								<a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url(' . $item->gambar . '); width: 100%;" data-fslightbox="lightbox-video-tutorials"></a>
								<div class="m-0">
									<a href="' . $link . '" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">' . $item->judul_info . '</a>
									<div class="fw-bold fs-5 text-gray-600 text-dark my-4">' . mb_strimwidth($item->desc_info, 0, 200, "...") . '<a class="fs-6 fw-bold link-primary" href="' . $link . '">Baca Selengkapnya</a></div>
									<div class="fs-6 fw-bolder">
										<span href="" class="text-gray-700 text-hover-primary">Admin</span>
										<span class="text-muted">- ' . $tanggal . '</span>
									</div>
								</div>
							</div>
						</div>
						';
				}
				?>
			</div>
		</div>
	</div>
	<div class="mb-lg-n15 position-relative z-index-2">
		<div class="container">
			<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
				<div class="card-body p-lg-20">
					<div class="text-center mb-5 mb-lg-10">
						<h3 class="fs-2hx text-dark mb-5" id="feedback" data-kt-scroll-offset="{default: 100, lg: 150}">Feedback</h3>
					</div>
					<?php
					if ($this->session->flashdata('success_feedback')) {
						echo '
							<div class="alert alert-success" role="alert">
								' . $this->session->flashdata('success_feedback') . '
							</div>
						';
					}
					?>
					<div class="row mb-3">
						<div class="col-md-12 pe-lg-10">
							<form action="<?= site_url('kirimfeedback') ?>" class="form mb-15" method="post">
								<!-- <h1 class="fw-bolder text-dark mb-9">Send Us Email</h1> -->
								<div class="row mb-5">
									<div class="col-md-6 fv-row">
										<label class="fs-5 fw-bold mb-2">Nama</label>
										<input type="text" class="form-control form-control-solid" placeholder="Masukan Nama" name="nama_feedback" required />
									</div>
									<div class="col-md-6 fv-row">
										<label class="fs-5 fw-bold mb-2">Email</label>
										<input type="email" class="form-control form-control-solid" placeholder="Masukan Email" name="email_feedback" required />
									</div>
								</div>
								<div class="d-flex flex-column mb-5 fv-row">
									<label class="fs-5 fw-bold mb-2">Subjek</label>
									<input class="form-control form-control-solid" placeholder="" name="judul_feedback" required />
								</div>
								<div class="d-flex flex-column mb-10 fv-row">
									<label class="fs-6 fw-bold mb-2">Pesan</label>
									<textarea class="form-control form-control-solid" rows="6" name="pesan_feedback" placeholder="" required></textarea>
								</div>
								<button type="submit" class="btn btn-success" id="kt_contact_submit_button">
									<span class="indicator-label">Kirim Feedback</span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mb-0 mt-sm-n20">
		<div class="landing-curve custom-green">
			<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
			</svg>
		</div>
		<div class="bg-custom-green pt-20">
			<div class="container">
				<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
					<div class="d-flex align-items-center order-2 order-md-1">
						<a href="">
							<img alt="Logo" src="assets/media/logos/logo-white-bg.png" class="h-45px h-md-50px" />
						</a>
						<span class="mx-5 fs-6 fw-bold text-white pt-1" href="">© <?php echo date("Y"); ?> Sistem Informasi Monitoring DBD</span>
					</div>
					<!-- <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
						<li class="menu-item">
							<a href="" target="_blank" class="menu-link px-2">About</a>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</div>
	<!--end::Footer Section-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop bg-success" data-kt-scrolltop="true">
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
			</svg>
		</span>
	</div>
	</div>

	<?php $this->load->view('depan/template/footer') ?>
</body>
<script>
	var options = {
		series: [{
			name: 'Kasus DBD',
			data: [<?= $dataChart ?>]
		}],
		chart: {
			type: 'bar',
			height: 350
		},
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '55%',
				endingShape: 'rounded'
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		xaxis: {
			categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
		},
		yaxis: {
			title: {
				text: 'Jumlah Kasus DBD'
			},
			labels: {
				formatter: function(val) {
					return val.toFixed(0);
				}
			}
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			y: {
				formatter: function(val) {
					return val + " kasus"
				}
			}
		}
	};

	var chart = new ApexCharts(document.querySelector("#chart"), options);
	chart.render();

	$("#selKel").change(function(e) {
        var kel = $("#selKel").val();
        $.ajax({
            url: "<?= site_url('getChartVal') ?>",
            type: "post",
            dataType: 'json',
            data: {
                kel: kel
            },
            success: res => {
				var db = JSON.stringify(res);
				console.log(JSON.parse(db))
				
				chart.updateSeries([{
					name: 'Kasus DBD',
					data: JSON.parse(db)
				}])
            }
        })
    });
</script>