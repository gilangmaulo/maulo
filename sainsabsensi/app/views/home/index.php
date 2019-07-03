<div class="container">
	<div class="jumbotron mt-4">
  <h1 class="display-4">Selamat Datang di SIS Absensi Sajogyo Institute</h1>
  <p class="lead">Halo, <?= $_SESSION['user']['username']?></p>
  <hr class="my-4">
  <p>Silahkan Absen</p>
  <a class="btn btn-primary btn-lg" href="<?php echo BASEURL; ?>/absen/submit" role="button">Absen</a>
</div>

</div>
