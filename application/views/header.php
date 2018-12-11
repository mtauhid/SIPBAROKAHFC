<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Si Pengajuan Judul TA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('c_home') ?>">SIPUL TUGAS AKHIR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="<?php echo site_url('/c_inputdosen') ?>" class="nav-link">Data Dosen</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo site_url('/c_inputjuduldosen') ?>" class="nav-link">Input Judul</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo site_url('/c_hakAksesDosen') ?>" class="nav-link">Hak Akses</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo site_url('/c_kuotaDosen') ?>" class="nav-link">Kuota Dosen</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        M Taufik Hidayat
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo site_url('authentication/auth/logout'); ?>">Keluar</a>
      </div>
    </li>
    </ul>
  </div>
</nav>