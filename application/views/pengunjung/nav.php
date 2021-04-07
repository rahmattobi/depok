<!DOCTYPE html>
<html lang="en">
<head>
  <title>Depok - Wisata Alam dan Kuliner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('asset/css/')?>open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>animate.css">

  <link rel="stylesheet" href="<?= base_url('asset/css/')?>owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url('asset/css/')?>aos.css">

  <link rel="stylesheet" href="<?= base_url('asset/css/')?>ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('asset/css/')?>bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>jquery.timepicker.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>flaticon.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>icomoon.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/')?>style.css">
</head>
<body class="goto-here">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Depok</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wisata</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="<?php echo base_url(); ?>c_pengunjung/wisata">Wisata Depok</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>c_pengunjung/kuliner">Wisata Kuliner</a>
            </div>
          </li>
          <li class="nav-item"><a href="" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>c_pengunjung/history_transaksi" class="nav-link">History Transaksi</a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>c_login/logout" class="nav-link">Logout</a></li>
          <?php 
            $total = $total_cart+$total_carttempat;
           ?>
          <li class="nav-item cta cta-colored"><a href="<?php echo base_url(); ?>c_pengunjung/cart" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo $total; ?>]</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
