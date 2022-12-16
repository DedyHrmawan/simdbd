<!DOCTYPE html>

<html lang="en">

<head>
	<base href="<?= base_url(); ?>">
	<title><?= $title ?></title>
	<meta charset="utf-8" />
	<meta name="SIM DBD" content="Sistem Informasi Monitoring DBD Puskesmas Dinoyo" />
	<meta name="keywords" content="SIM, Sistem Informasi Manajemen, Puskesmas, Dinoyo, DBD" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="SIMDBD - SIM DBD PUSKESMAS DINOYO" />
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/media/logos/logo-puskesmas.png" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->

	<!-- tinymce -->
	<script src="<?= base_url(); ?>assets/plugins/custom/tinymce/tinymce.bundle.js"></script>

	<link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png)">
			<!--begin::Content-->
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				<!--begin::Logo-->
				<a href="<?=site_url('/')?>" class="mb-12">
					<img alt="Logo" src="assets/media/logos/logo-blue.png" class="h-60px" />
				</a>
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
					<!--begin::Form-->
					<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="<?= site_url('auth') ?>" method="post">
						<!--begin::Heading-->
						<div class="text-center mb-10">
							<!--begin::Title-->
							<h1 class="text-dark mb-3">Login Admin</h1>
							<!--end::Title-->
						</div>
						<?php
						if ($this->session->flashdata('error_login')) {
							echo '
								<div class="alert alert-danger" role="alert">
									'.$this->session->flashdata('error_login').'
								</div>
							';
						}
						?>
						<!--begin::Heading-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Label-->
							<label class="form-label fs-6 fw-bolder text-dark">Username</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack mb-2">
								<!--begin::Label-->
								<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
								<!--end::Label-->
								<!--begin::Link-->
								<!-- <a href="../../demo1/dist/authentication/layouts/basic/password-reset.html" class="link-success fs-6 fw-bolder">Forgot Password ?</a> -->
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Input-->
							<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="text-center">
							<!--begin::Submit button-->
							<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-success w-100 mb-5">
								<span class="indicator-label">Login</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url(); ?>assets/js/widgets.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom/utilities/modals/users-search.js"></script>
</body>
<!--end::Body-->

</html>