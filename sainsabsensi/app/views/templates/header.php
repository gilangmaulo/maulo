<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul'];?></title>
  <script src="<?php echo BASEURL; ?>/js/jquery-3.3.1.min.js"></script> 
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container">
  <a class="navbar-brand" href="<?=BASEURL;?>">SIS Absensi Sains</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?=BASEURL;?>">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrasi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=BASEURL;?>/karyawan">Data Karyawan</a>
          <a class="dropdown-item" href="<?=BASEURL;?>/user">Data User</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=BASEURL;?>/izin">Izin</a>
          <a class="dropdown-item" href="#">Lembur</a>
          <a class="dropdown-item" href="#">Cuti</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Harian</a>
          <a class="dropdown-item" href="#">Mingguan</a>
          <a class="dropdown-item" href="#">Bulanan</a>
        </div>
      </li>
      <a class="nav-item nav-link active" href="<?=BASEURL;?>/about">About</a>
      <a class="nav-item nav-link active" href="<?=BASEURL;?>/login/logout">Logout</a>
    </div>
  </div>
  </div>
</nav>