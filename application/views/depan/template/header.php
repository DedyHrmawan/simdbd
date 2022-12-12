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

<?php $this->load->view('depan/template/footer') ?>
</body>