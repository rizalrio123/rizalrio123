<?php
session_start();
$nama = $_SESSION['nama'];
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
?>
<html>
<head>
	<meta charshet="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!- - Boostrap CSS - ->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<!- - My CSS - ->
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<!- - Boostrap ICON - ->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="shortcut icon" href="asset/img/logo/logo.png">
	<title>Beranda</title>
</head>
<style>
img {
  width: 100%;
  height: 100%;
}

.bg-black {
  background: #000;
}

.skill-block {
  width: 30%;
}

@media (min-width: 991px) and (max-width:1200px) {
  .skill-block {
    padding: 32px !important;
  }
}

@media (min-width: 1200px) {
  .skill-block {
    padding: 56px !important;
  }
}

body {
  background-color: #eeeeee;
}

</style>
<div class="container mt-5 mb-5">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-4"><img src="profile.jpg"></div>
                <div class="col-md-8 col-lg-8">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between align-items-center p-5 bg-dark text-white">
                            <h3 class="display-5">Riyo rizal</h3><i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa-youtube-play"></i><i class="fa fa-dribbble"></i><i class="fa fa-linkedin"></i></div>
                        <div class="p-3 bg-black text-white">
                            <h6>Web designer &amp; Developer</h6>
                        </div>
                        <div class="d-flex flex-row text-white">
                            <div class="p-4 bg-primary text-center skill-block">
                                <h4>90%</h4>
                                <h6>Bootstrap</h6>
                            </div>
                            <div class="p-3 bg-success text-center skill-block">
                                <h4>70%</h4>
                                <h6>Jquery</h6>
                            </div>
                            <div class="p-3 bg-warning text-center skill-block">
                                <h4>80%</h4>
                                <h6>HTML</h6>
                            </div>
                            <div class="p-3 bg-danger text-center skill-block">
                                <h4>75%</h4>
                                <h6>PHP</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>