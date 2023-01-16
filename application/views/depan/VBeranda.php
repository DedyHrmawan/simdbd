<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<style>
	.bg-custom-green {
		background-color: #3CB371;
	}

	.custom-green {
		color: #3CB371;
	}

	.legend {
    line-height: 18px;
    color: #555;
	}
	.legend i {
		width: 18px;
		height: 18px;
		float: left;
		margin-right: 8px;
		opacity: 0.7;
	}
	.info {
	padding: 6px 8px;
	font-size: 15px;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
	}
	.info h4 {
		margin: 0 0 5px;
		color: #777;
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
												<select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Kelurahan !" id="selKel">
													<option value="Dinoyo">Dinoyo</option>
													<option value="Ketawanggede">Ketawanggede</option>
													<option value="Tlogomas">Tlogomas</option>
													<option value="Sumbersari">Sumbersari</option>
													<option value="Tunggulwulung">Tunggulwulung</option>
													<option value="Merjosari">Merjosari</option>
												</select>
											</div>
											<div class="col-sm-2">
												<select class="form-select form-select-solid" data-control="select2" id="">
													<option value="">2022</option>
													<option value="">2023</option>
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
					<div id="map" style="height: 550px;"></div>
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

	<?php 
		$this->load->view('depan/template/footer');
	?>
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
<script>
	const map = L.map('map').setView([-7.9428273851572815, 112.60582451578773], 14);

	const tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
		maxZoom: 19,
		subdomains:['mt0','mt1','mt2','mt3'],
		attribution: '&copy; <a href="https://maps.google.com">Google Maps</a>'
	}).addTo(map);

	var geotest = {
		"type": "FeatureCollection",
		"features": [
			{
			"type": "Feature",
			"properties": {
				"name": "Ketawanggede",
				"density": <?= $kasus[0] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.61325740095953,-7.947354658384114],[112.61143174702698,-7.944822988103894],[112.61093441006267,-7.945164145298321],[112.61085139845312,-7.945099629935399],[112.61075434789603,-7.945147272226677],
					[
					112.61051362473381,
					-7.945086890428186
					],
					[
					112.61017745732602,
					-7.945225829191756
					],
					[
					112.60969140365967,
					-7.946189243287478
					],
					[
					112.60910319039198,
					-7.946012238624405
					],
					[
					112.60872053046779,
					-7.947055092886018
					],
					[
					112.60823971737886,
					-7.9467848644825665
					],
					[
					112.60801952293576,
					-7.947130601208599
					],
					[
					112.60826823749483,
					-7.9474931242258435
					],
					[
					112.60821879214467,
					-7.949876446371377
					],
					[
					112.60842042181537,
					-7.949984038484459
					],
					[
					112.60837538739764,
					-7.950340097194868
					],
					[
					112.60858360181544,
					-7.9503891607831605
					],
					[
					112.60854591706715,
					-7.950873764431151
					],
					[
					112.60816250542013,
					-7.951189751856205
					],
					[
					112.6127144669502,
					-7.95688985537069
					],
					[
					112.6136475441686,
					-7.957151475334641
					],
					[
					112.61409928134935,
					-7.957207244388783
					],
					[
					112.61509655342138,
					-7.956919849058153
					],
					[
					112.61550270075634,
					-7.957002687378363
					],
					[
					112.61571153932204,
					-7.956715795115173
					],
					[
					112.61565093914794,
					-7.956058523704897
					],
					[
					112.61642335605808,
					-7.955177905534114
					],
					[
					112.61612671944152,
					-7.954970749985051
					],
					[
					112.61674682542753,
					-7.9527049542406445
					],
					[
					112.61566157518467,
					-7.951515347246058
					],
					[
					112.61675536347758,
					-7.950427851372581
					],
					[
					112.61526469698305,
					-7.949033296467405
					],
					[
					112.61459069559749,
					-7.9479225114673255
					],
					[
					112.61457244378477,
					-7.94715408076226
					],
					[
					112.61404392656874,
					-7.946788854190558
					],
					[
					112.61325740095953,
					-7.947354658384114
					]
				]
				],
				"type": "Polygon"
			}
			},
			{
			"type": "Feature",
			"properties": {
				"name": "Dinoyo",
				"density": <?= $kasus[1] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.61325781685304,
					-7.947348624343235
					],
					[
					112.61404326320007,
					-7.946791035999269
					],
					[
					112.61379754005895,
					-7.946445410719463
					],
					[
					112.61382090428611,
					-7.945883381176728
					],
					[
					112.61357121717822,
					-7.94525175111518
					],
					[
					112.61337243421502,
					-7.944921528523182
					],
					[
					112.61347250862053,
					-7.944751184881852
					],
					[
					112.61358264543344,
					-7.944675103506668
					],
					[
					112.61377226318228,
					-7.94460358558274
					],
					[
					112.61384269909678,
					-7.944383845365223
					],
					[
					112.61360490150588,
					-7.944181345369856
					],
					[
					112.61317579131253,
					-7.944088330059387
					],
					[
					112.61298708612571,
					-7.944005052523067
					],
					[
					112.61274798041,
					-7.943743231383763
					],
					[
					112.61278977966606,
					-7.943505420728485
					],
					[
					112.61287575679034,
					-7.9433470035246785
					],
					[
					112.61277807030109,
					-7.94303394419579
					],
					[
					112.61281254555291,
					-7.942914811295054
					],
					[
					112.61263573261658,
					-7.94275015948233
					],
					[
					112.61268974789897,
					-7.942465853857101
					],
					[
					112.61289595186838,
					-7.942197837765363
					],
					[
					112.61290394466363,
					-7.941877683368887
					],
					[
					112.61293668011876,
					-7.941556066814442
					],
					[
					112.61249195583258,
					-7.940643545820876
					],
					[
					112.61208758354894,
					-7.94058451524856
					],
					[
					112.61202732635309,
					-7.940258941205116
					],
					[
					112.61217998971352,
					-7.939777944272862
					],
					[
					112.61211859958769,
					-7.939523592993524
					],
					[
					112.61141587781026,
					-7.939421679143848
					],
					[
					112.61135394626672,
					-7.9390306290920165
					],
					[
					112.61145041800131,
					-7.938604234154425
					],
					[
					112.6114045115512,
					-7.938126248963144
					],
					[
					112.61070214397103,
					-7.937521248289855
					],
					[
					112.61044471759453,
					-7.93739903153444
					],
					[
					112.61034769996206,
					-7.937046704878398
					],
					[
					112.61030239434047,
					-7.9367328055145805
					],
					[
					112.60986639699678,
					-7.936862609783731
					],
					[
					112.60940859170637,
					-7.936485990688411
					],
					[
					112.60935757188156,
					-7.93600437389027
					],
					[
					112.60900135391296,
					-7.935308730940122
					],
					[
					112.60862560931417,
					-7.934222599611616
					],
					[
					112.60829939384422,
					-7.933123627399155
					],
					[
					112.60737727940443,
					-7.9334322178181935
					],
					[
					112.60763079920827,
					-7.933870638119913
					],
					[
					112.60656359058942,
					-7.933464831751522
					],
					[
					112.60631146392103,
					-7.933807449851898
					],
					[
					112.60677285366927,
					-7.9344650126576255
					],
					[
					112.60692593576613,
					-7.934414918309628
					],
					[
					112.60716828540785,
					-7.934883027329633
					],
					[
					112.60552487882893,
					-7.936194375386265
					],
					[
					112.60532205928558,
					-7.935975016646779
					],
					[
					112.60477386905154,
					-7.936264404206284
					],
					[
					112.60476854079735,
					-7.936744807718753
					],
					[
					112.60669174203343,
					-7.941998936928371
					],
					[
					112.60616551832442,
					-7.942942237780585
					],
					[
					112.60582903770165,
					-7.943635037515094
					],
					[
					112.60611667140876,
					-7.94409820370403
					],
					[
					112.60662642941134,
					-7.944345167098348
					],
					[
					112.6067182196511,
					-7.944617161788528
					],
					[
					112.60685400681439,
					-7.944711176410138
					],
					[
					112.60673857720735,
					-7.945269465814803
					],
					[
					112.60649072039172,
					-7.946107056736295
					],
					[
					112.6063961661473,
					-7.94649774102561
					],
					[
					112.60584487826793,
					-7.947169091280998
					],
					[
					112.60529854889512,
					-7.9475700859170075
					],
					[
					112.60474685669453,
					-7.948033778711334
					],
					[
					112.60438671067038,
					-7.948393395839759
					],
					[
					112.60424453681003,
					-7.9487999879471545
					],
					[
					112.60396158583495,
					-7.9492768304167924
					],
					[
					112.60377795838059,
					-7.9499497537742485
					],
					[
					112.60359762382927,
					-7.950170633230002
					],
					[
					112.60367104322034,
					-7.950326737926233
					],
					[
					112.60338128797105,
					-7.952079287439318
					],
					[
					112.60296070983065,
					-7.95337445855607
					],
					[
					112.60327696125358,
					-7.953993214485962
					],
					[
					112.60367646979768,
					-7.954001808996537
					],
					[
					112.60427020738456,
					-7.954512520021979
					],
					[
					112.60480451527593,
					-7.954488011316215
					],
					[
					112.60585552782862,
					-7.954479117686674
					],
					[
					112.60632061376697,
					-7.954210669358474
					],
					[
					112.6067742692203,
					-7.954099511490284
					],
					[
					112.60716004868647,
					-7.954135910244204
					],
					[
					112.6076540118662,
					-7.9542153734485055
					],
					[
					112.60802024219879,
					-7.954232278366419
					],
					[
					112.60813765568633,
					-7.953838210379374
					],
					[
					112.60809378258267,
					-7.953784291473482
					],
					[
					112.60810012254979,
					-7.951904400272824
					],
					[
					112.60811759864038,
					-7.95147573742922
					],
					[
					112.60816295217995,
					-7.951189447737875
					],
					[
					112.60854471980923,
					-7.9508712567995445
					],
					[
					112.60858344086574,
					-7.950390185898385
					],
					[
					112.60837737790956,
					-7.95034143247608
					],
					[
					112.6084190825108,
					-7.949984407350257
					],
					[
					112.6082188190685,
					-7.949878298223055
					],
					[
					112.60826580801137,
					-7.947495113479647
					],
					[
					112.6080194301694,
					-7.947131491673602
					],
					[
					112.60823757247954,
					-7.94678606088867
					],
					[
					112.60871950091268,
					-7.947051212410102
					],
					[
					112.60910351051285,
					-7.9460129660671015
					],
					[
					112.60969135109764,
					-7.9461876891772505
					],
					[
					112.61017672005022,
					-7.94522292720076
					],
					[
					112.61051563462695,
					-7.945084355019787
					],
					[
					112.6107543846366,
					-7.945142660958169
					],
					[
					112.6108525218587,
					-7.945099959009227
					],
					[
					112.6109359652695,
					-7.945161930674175
					],
					[
					112.61143437104084,
					-7.944822239792487
					],
					[
					112.61325781685304,
					-7.947348624343235
					]
				]
				],
				"type": "Polygon"
			}
			},
			{
			"type": "Feature",
			"properties": {
				"name": "Merjosari",
				"density": <?= $kasus[2] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.60490022919777,
					-7.9371099017619855
					],
					[
					112.60480347648456,
					-7.937324676931439
					],
					[
					112.60454160343784,
					-7.937298694735517
					],
					[
					112.60441910390648,
					-7.937685319204803
					],
					[
					112.60412627932982,
					-7.937570027474706
					],
					[
					112.60358030842752,
					-7.938451425711435
					],
					[
					112.60324016506883,
					-7.938377233340574
					],
					[
					112.60306322429847,
					-7.938574527264734
					],
					[
					112.60288371504112,
					-7.938426722633679
					],
					[
					112.6026238943208,
					-7.939275176469479
					],
					[
					112.6023961432208,
					-7.939251388096579
					],
					[
					112.60232127302373,
					-7.93951163013098
					],
					[
					112.60190350633007,
					-7.9394881011303795
					],
					[
					112.60195193772688,
					-7.9391918025634425
					],
					[
					112.59983509354203,
					-7.93888700368079
					],
					[
					112.5987891907476,
					-7.940076733600648
					],
					[
					112.59812413858441,
					-7.941339295674496
					],
					[
					112.5951166220039,
					-7.940131399640137
					],
					[
					112.59390076458669,
					-7.939835003875984
					],
					[
					112.59130180523516,
					-7.939211838652994
					],
					[
					112.58822782886716,
					-7.938603550271665
					],
					[
					112.58572242261499,
					-7.93798493424876
					],
					[
					112.58388259448941,
					-7.9375929803385645
					],
					[
					112.5829900169897,
					-7.937511022351657
					],
					[
					112.58010037791274,
					-7.937319130617652
					],
					[
					112.58014929727665,
					-7.936960459463236
					],
					[
					112.57888543964015,
					-7.936733198135201
					],
					[
					112.5785891255951,
					-7.936907030655021
					],
					[
					112.57396465279754,
					-7.935089517409764
					],
					[
					112.57376681568513,
					-7.93528562457108
					],
					[
					112.57178716935465,
					-7.935451717686334
					],
					[
					112.57081318223811,
					-7.9357857849035724
					],
					[
					112.57079115916503,
					-7.936510524906254
					],
					[
					112.56964882563807,
					-7.9368076154672025
					],
					[
					112.56950388310509,
					-7.938431902117486
					],
					[
					112.57062856796051,
					-7.939221127016324
					],
					[
					112.57107130650928,
					-7.939460945614044
					],
					[
					112.57528148318869,
					-7.941952769211525
					],
					[
					112.5757076102866,
					-7.941816310523777
					],
					[
					112.5771058777288,
					-7.942610364999069
					],
					[
					112.57977174740597,
					-7.943236367129643
					],
					[
					112.58091239842963,
					-7.944250939436074
					],
					[
					112.58188360212449,
					-7.944839791574125
					],
					[
					112.5824868807448,
					-7.9449863128256055
					],
					[
					112.58327327618787,
					-7.945295491629778
					],
					[
					112.5835707351286,
					-7.945619666268556
					],
					[
					112.58386994378805,
					-7.946275895271114
					],
					[
					112.58450800864478,
					-7.946186273327939
					],
					[
					112.58503964059753,
					-7.94700149136132
					],
					[
					112.58541175695387,
					-7.9470539413625545
					],
					[
					112.58652450248178,
					-7.947815922675758
					],
					[
					112.5869038114966,
					-7.947643986542332
					],
					[
					112.58741288384135,
					-7.946823139561403
					],
					[
					112.5880537640972,
					-7.947069871507836
					],
					[
					112.5879333516707,
					-7.947349529094964
					],
					[
					112.58903838445195,
					-7.9478844350952755
					],
					[
					112.58968440752926,
					-7.946809268911025
					],
					[
					112.59812796544514,
					-7.950218708792946
					],
					[
					112.59898360812434,
					-7.949863887847414
					],
					[
					112.59975341879283,
					-7.950041789967685
					],
					[
					112.60053175998644,
					-7.949738766903238
					],
					[
					112.60120947914078,
					-7.951054485540368
					],
					[
					112.60367068177976,
					-7.950326293733738
					],
					[
					112.60359723079154,
					-7.9501699729406
					],
					[
					112.60377781838872,
					-7.949948373258266
					],
					[
					112.60396062883854,
					-7.949275790773967
					],
					[
					112.6042469882018,
					-7.948796673338791
					],
					[
					112.60438394185877,
					-7.948393784643869
					],
					[
					112.60474332106492,
					-7.948037482611284
					],
					[
					112.60525085343596,
					-7.947606942695643
					],
					[
					112.60584208975843,
					-7.94716958289608
					],
					[
					112.6063987683716,
					-7.946491921933074
					],
					[
					112.60649053128043,
					-7.9460866943854
					],
					[
					112.6067405943212,
					-7.945270444335151
					],
					[
					112.60685409035631,
					-7.944711383457232
					],
					[
					112.6067181837663,
					-7.944616906104386
					],
					[
					112.60662733869799,
					-7.944345531655685
					],
					[
					112.60611689873497,
					-7.944098360541844
					],
					[
					112.60582837229032,
					-7.94363388491027
					],
					[
					112.60669039142732,
					-7.941997291607464
					],
					[
					112.60490022919777,
					-7.9371099017619855
					]
				]
				],
				"type": "Polygon"
			}
			},
			{
			"type": "Feature",
			"properties": {
				"name": "Tlogomas",
				"density": <?= $kasus[3] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.6083013821779,
					-7.933120227871285
					],
					[
					112.60805364429956,
					-7.932378985436543
					],
					[
					112.60779224035525,
					-7.932143821379455
					],
					[
					112.60741522306898,
					-7.931897482373131
					],
					[
					112.60692356081,
					-7.930976585595715
					],
					[
					112.60614357175768,
					-7.930340993359479
					],
					[
					112.60526984321484,
					-7.929245669970754
					],
					[
					112.60550027878423,
					-7.9280581435539546
					],
					[
					112.60530697465498,
					-7.927637240595502
					],
					[
					112.60413077288086,
					-7.926797510005429
					],
					[
					112.60405140600932,
					-7.92611430898954
					],
					[
					112.60354201194946,
					-7.925982384225421
					],
					[
					112.60302583624224,
					-7.925499246625591
					],
					[
					112.60220039764215,
					-7.925633300950196
					],
					[
					112.60168028815616,
					-7.925700105645504
					],
					[
					112.60141827408114,
					-7.924991197251842
					],
					[
					112.60173115121705,
					-7.924373052875339
					],
					[
					112.60179482917312,
					-7.923924234508107
					],
					[
					112.60140037773937,
					-7.923648384985555
					],
					[
					112.60099980011961,
					-7.923713521199446
					],
					[
					112.60024239424149,
					-7.924037079135417
					],
					[
					112.59980559865386,
					-7.923843367613429
					],
					[
					112.5997387590304,
					-7.92338640915284
					],
					[
					112.60006285408036,
					-7.923171852591224
					],
					[
					112.60026180933664,
					-7.922805233140863
					],
					[
					112.60019178196688,
					-7.922468039713053
					],
					[
					112.59973541519167,
					-7.921989601242004
					],
					[
					112.59904561199613,
					-7.921660635575478
					],
					[
					112.59839553998376,
					-7.9217128121229194
					],
					[
					112.59778016716888,
					-7.922144204066569
					],
					[
					112.59786396192914,
					-7.922501928192759
					],
					[
					112.59754432994754,
					-7.922771682184006
					],
					[
					112.59700515640418,
					-7.92258648435849
					],
					[
					112.59664924959657,
					-7.921451041906707
					],
					[
					112.59642899858272,
					-7.920573317802436
					],
					[
					112.59620490050361,
					-7.920095946655167
					],
					[
					112.59503272135862,
					-7.920181741083894
					],
					[
					112.59484752756907,
					-7.91964590497102
					],
					[
					112.59425716131597,
					-7.918382546217941
					],
					[
					112.59352500086453,
					-7.918436974114641
					],
					[
					112.59309069680029,
					-7.9178145569106135
					],
					[
					112.59238492987464,
					-7.917292648861121
					],
					[
					112.5919796640818,
					-7.917367731826985
					],
					[
					112.591496125361,
					-7.917629140918507
					],
					[
					112.59229427155907,
					-7.918635740090124
					],
					[
					112.59299751977449,
					-7.918922621060048
					],
					[
					112.59365754407747,
					-7.9190650789379475
					],
					[
					112.59400086617256,
					-7.919947807928239
					],
					[
					112.5931285732675,
					-7.923401638828807
					],
					[
					112.5952863584223,
					-7.9233154587509915
					],
					[
					112.59547070788926,
					-7.922670111473877
					],
					[
					112.59609004713093,
					-7.922634840848104
					],
					[
					112.5971938187298,
					-7.923500524853054
					],
					[
					112.60012227701543,
					-7.926421856183879
					],
					[
					112.59975726195756,
					-7.926754583463094
					],
					[
					112.5998228813786,
					-7.927433677643506
					],
					[
					112.59906604940329,
					-7.9291870455780185
					],
					[
					112.59905581209392,
					-7.930178053671455
					],
					[
					112.59739995414918,
					-7.929910875108348
					],
					[
					112.59904307079239,
					-7.935537255969521
					],
					[
					112.59895624251033,
					-7.936233327263594
					],
					[
					112.59747660465763,
					-7.937207649159959
					],
					[
					112.59636297947225,
					-7.936749201913841
					],
					[
					112.59613058988128,
					-7.937611095440815
					],
					[
					112.59423564931802,
					-7.9371379487880915
					],
					[
					112.5925243410922,
					-7.936510804570773
					],
					[
					112.59095082955781,
					-7.9363738737589244
					],
					[
					112.5895911718817,
					-7.936194813957741
					],
					[
					112.5888050965055,
					-7.936439284336828
					],
					[
					112.58754961007588,
					-7.9366088169529405
					],
					[
					112.58654881370973,
					-7.936519262815338
					],
					[
					112.58512446908418,
					-7.936479317829367
					],
					[
					112.58512068779447,
					-7.937839009103172
					],
					[
					112.59122049081952,
					-7.939183750225126
					],
					[
					112.5951207267695,
					-7.940120762933162
					],
					[
					112.5981235000977,
					-7.941328142441549
					],
					[
					112.59878814702614,
					-7.940072546930949
					],
					[
					112.59982895663444,
					-7.9388757155443415
					],
					[
					112.60195728592817,
					-7.939185332672267
					],
					[
					112.60190849826114,
					-7.939480942662911
					],
					[
					112.60231899673448,
					-7.9395087475012645
					],
					[
					112.60239545362265,
					-7.9392446931398695
					],
					[
					112.60262168603697,
					-7.9392715432043985
					],
					[
					112.60288335195975,
					-7.938426530164293
					],
					[
					112.6030654612648,
					-7.938571240664075
					],
					[
					112.60324120646538,
					-7.93837672016133
					],
					[
					112.60357773359272,
					-7.938449510144835
					],
					[
					112.60412903192548,
					-7.937567755677776
					],
					[
					112.60441939085223,
					-7.93768414752212
					],
					[
					112.60454059647861,
					-7.937299312855899
					],
					[
					112.60480183305225,
					-7.937320650593577
					],
					[
					112.60489935533934,
					-7.937109128228798
					],
					[
					112.60476671233482,
					-7.936748721811952
					],
					[
					112.60477459975988,
					-7.936264415026898
					],
					[
					112.60532176319833,
					-7.935974153969042
					],
					[
					112.60552172492788,
					-7.936191692519628
					],
					[
					112.6071654649441,
					-7.93487792324072
					],
					[
					112.6069220227501,
					-7.934418982684093
					],
					[
					112.6067726764511,
					-7.934472284347962
					],
					[
					112.60630976216811,
					-7.933810940174297
					],
					[
					112.60656260203308,
					-7.933462830762608
					],
					[
					112.60762426756668,
					-7.9338717572521205
					],
					[
					112.6073785604703,
					-7.933430229964728
					],
					[
					112.6083013821779,
					-7.933120227871285
					]
				]
				],
				"type": "Polygon"
			}
			},
			{
			"type": "Feature",
			"properties": {
				"name": "Sumbersari",
				"density": <?= $kasus[4] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.60802210982393,
					-7.954214349445792
					],
					[
					112.60663288432039,
					-7.9572866708976875
					],
					[
					112.60631854984399,
					-7.958250338738168
					],
					[
					112.60762764427449,
					-7.958520534721075
					],
					[
					112.60751542686836,
					-7.9595845675040096
					],
					[
					112.60777646809254,
					-7.959641859177765
					],
					[
					112.60773008697504,
					-7.960217425491578
					],
					[
					112.60861636620831,
					-7.960977150642293
					],
					[
					112.60855006231287,
					-7.961387390572014
					],
					[
					112.60878333593251,
					-7.961867393168973
					],
					[
					112.60976061156975,
					-7.961832648301396
					],
					[
					112.61150352832544,
					-7.962062990927748
					],
					[
					112.61226115277492,
					-7.962578556736844
					],
					[
					112.61289379776304,
					-7.963910821956446
					],
					[
					112.61354916185871,
					-7.963916368032443
					],
					[
					112.6143705877866,
					-7.963950340486562
					],
					[
					112.61469645819886,
					-7.9640856629270615
					],
					[
					112.61570417948809,
					-7.964575642668734
					],
					[
					112.61684956114465,
					-7.965330699123442
					],
					[
					112.61935070584798,
					-7.966682308260147
					],
					[
					112.61968683403097,
					-7.966061871310899
					],
					[
					112.62049387260049,
					-7.964711493300356
					],
					[
					112.62121896267575,
					-7.96393987393553
					],
					[
					112.62182187944177,
					-7.963549586215947
					],
					[
					112.62132327684691,
					-7.9625812571889725
					],
					[
					112.62112344137444,
					-7.9618893187546576
					],
					[
					112.62113157612765,
					-7.9610251371060485
					],
					[
					112.62133531956044,
					-7.960418237414217
					],
					[
					112.62163787698807,
					-7.960002521375785
					],
					[
					112.61952744008585,
					-7.958261050173121
					],
					[
					112.6156699129225,
					-7.95605643920976
					],
					[
					112.61572495319996,
					-7.956700643435241
					],
					[
					112.61550751825882,
					-7.957009762533588
					],
					[
					112.61509606191152,
					-7.956935591643742
					],
					[
					112.61411076784685,
					-7.957204159831946
					],
					[
					112.61271097529328,
					-7.956901636612926
					],
					[
					112.60816692450499,
					-7.951181878349061
					],
					[
					112.60810993218189,
					-7.951493219554919
					],
					[
					112.60808472983291,
					-7.953741613119462
					],
					[
					112.60813944360348,
					-7.953826495191677
					],
					[
					112.60802210982393,
					-7.954214349445792
					]
				]
				],
				"type": "Polygon"
			}
			},
			{
			"type": "Feature",
			"properties": {
				"name": "Tunggulwulung",
				"density": <?= $kasus[5] ?>
			},
			"geometry": {
				"coordinates": [
				[
					[
					112.62295145276153,
					-7.935137113873296
					],
					[
					112.62318995889524,
					-7.934824088454235
					],
					[
					112.6238709522309,
					-7.933419397043963
					],
					[
					112.62351840497473,
					-7.9315233200156285
					],
					[
					112.62035697081211,
					-7.929951961667854
					],
					[
					112.62182493137834,
					-7.926522184276479
					],
					[
					112.6211440624374,
					-7.926198744498535
					],
					[
					112.62076670161741,
					-7.926232950874848
					],
					[
					112.61960763715553,
					-7.925698462507427
					],
					[
					112.61939000135914,
					-7.926009930516045
					],
					[
					112.61836754112755,
					-7.925383850562966
					],
					[
					112.6187050718234,
					-7.925083787159721
					],
					[
					112.61871006406989,
					-7.924709128726562
					],
					[
					112.61816237883721,
					-7.923991706640152
					],
					[
					112.61861426010097,
					-7.923057958656742
					],
					[
					112.61902764705087,
					-7.922325478103545
					],
					[
					112.61848017284643,
					-7.92199398983017
					],
					[
					112.6178200866583,
					-7.9223850955190045
					],
					[
					112.61668215211472,
					-7.921925462653675
					],
					[
					112.61631538456822,
					-7.921214201546789
					],
					[
					112.61538216493875,
					-7.9210205860889005
					],
					[
					112.61363206048742,
					-7.920927279317652
					],
					[
					112.6118352503197,
					-7.920729106549587
					],
					[
					112.61060285071602,
					-7.919913611520585
					],
					[
					112.61090128965333,
					-7.922481355761505
					],
					[
					112.6102290572926,
					-7.923327594561442
					],
					[
					112.60923719720734,
					-7.9236203409103325
					],
					[
					112.60842644312999,
					-7.9234219041428275
					],
					[
					112.60644040910279,
					-7.922787378945088
					],
					[
					112.60398327943909,
					-7.921849838164164
					],
					[
					112.60334563055409,
					-7.921942432961856
					],
					[
					112.60250867022069,
					-7.9216029623903665
					],
					[
					112.60117697484117,
					-7.923559414940115
					],
					[
					112.60138375906587,
					-7.923641693440416
					],
					[
					112.60179764242116,
					-7.9239225916789735
					],
					[
					112.60174160670647,
					-7.924360472098513
					],
					[
					112.60142008992744,
					-7.924991684364059
					],
					[
					112.6016918693403,
					-7.925690408880101
					],
					[
					112.60303090099893,
					-7.925481538447883
					],
					[
					112.60354040966973,
					-7.925974293192297
					],
					[
					112.60404820846946,
					-7.926117525420224
					],
					[
					112.60413490129054,
					-7.926794506490097
					],
					[
					112.60529659468182,
					-7.927631363533322
					],
					[
					112.60549920074055,
					-7.928047190069833
					],
					[
					112.6052776172728,
					-7.929241089058678
					],
					[
					112.60614381804857,
					-7.930336167796611
					],
					[
					112.60692061066601,
					-7.930964617747577
					],
					[
					112.60720351354661,
					-7.931485936514477
					],
					[
					112.60850388817778,
					-7.930910508804189
					],
					[
					112.61054807105052,
					-7.927959908492639
					],
					[
					112.61201273272383,
					-7.928487538916002
					],
					[
					112.61321525133849,
					-7.929267591695535
					],
					[
					112.61357075902868,
					-7.929839928357126
					],
					[
					112.61340226318714,
					-7.930669676500074
					],
					[
					112.61258166865639,
					-7.932548316329033
					],
					[
					112.61290786792057,
					-7.932815385575353
					],
					[
					112.61265263288647,
					-7.933566769031117
					],
					[
					112.61261135127364,
					-7.934345697583339
					],
					[
					112.61303479159477,
					-7.934687748280751
					],
					[
					112.61313642390996,
					-7.934217697154381
					],
					[
					112.6140703297396,
					-7.934466100774955
					],
					[
					112.61513518900836,
					-7.933692287162813
					],
					[
					112.61560121289529,
					-7.933214704909943
					],
					[
					112.61585321525945,
					-7.933214704909943
					],
					[
					112.61623773252808,
					-7.933554647848865
					],
					[
					112.61674436943434,
					-7.932985092145643
					],
					[
					112.61833996480158,
					-7.933576157127817
					],
					[
					112.61861599258924,
					-7.933221464624864
					],
					[
					112.62184572796167,
					-7.93506243826522
					],
					[
					112.62295145276153,
					-7.935137113873296
					]
				]
				],
				"type": "Polygon"
			}
			}
		]
		}


	function getColor(d) {
		return d > 20 ? '#cc0000' :
			d > 10   ? '#e69138' :
			d > 5   ? '#ffd966' :
						'#fff2cc';
	}
	function style(feature) {
		return {
			fillColor: getColor(feature.properties.density),
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		layer.bringToFront();
		info.update(layer.feature.properties);
	}

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight
		});
	}

	geojson = L.geoJson(geotest, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map);

	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {
		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 5, 10, 20],
			labels = [];
			
		kondisi = ['0-5 Rendah', '6-10 Sedang', '11-20 Tinggi', '> 20 Sangat Tinggi'];

		// loop through our density intervals and generate a label with a colored square for each interval
		for (var i = 0; i < grades.length; i++) {
			div.innerHTML +=
				'<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
				kondisi[i] + '<br>';
		}

		return div;
	};

	legend.addTo(map);

	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
		this.update();
		return this._div;
	};

	// method that we will use to update the control based on feature properties passed
	info.update = function (props) {
		this._div.innerHTML = '<h4>Daerah Rawan DBD</h4>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.density + ' kasus'
			: 'Arahkan pada area di peta');
	};

	info.addTo(map);
</script>