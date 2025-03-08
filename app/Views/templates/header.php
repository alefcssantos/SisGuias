<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>AlefDev Dash</title>

    <!-- jQuery -->
    <script src="<?= base_url('theme') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/plugins/fullcalendar/main.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('theme') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('theme') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include_once("navbar.php") ?>
        <?php include_once("sidebar.php") ?>