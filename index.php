<?php
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Pengaduan Masyarakat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
		<link rel="icon" type="image/x-icon" href="icon.ico" />
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
								<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="loginadmin.php">Login Admin/Petugas</a></li>
											<li><a href="registrasi.php">Registrasi</a></li>
											<li><a href="login_masyarakat.php">Login</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Welcome</h2>
							<p>Selamat datang di web<br /> Pengaduan Masyarakat Desa Dermo<br />
							Silahkan Registrasi <br />dan Login dengan akun anda.</p>
							<ul class="actions special">
								<li><a href="login_masyarakat.php" class="button primary">Login</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Pengaduan masyarakat</h2>
								<p>Pengaduan masyarakat adalah penyampaian<br /> keluhan oleh masyarakat kepada pemerintah atas pelayanan <br />yang tidak sesuai dengan standar pelayanan, <br />atau pengabaian kewajiban dan/atau pelanggaran larangan.</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon solid fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="img/banner/4.jpg" alt="" /></div><div class="content">
								<h2>Ingin Melapor<br />
								Tapi Tidak Cepat Tanggap?</h2>
								<p>Website pengaduan masyarakat ini didirikan untuk memberikan kesempatan kepada masyarakat untuk melaporkan masalah yang mereka hadapi.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="img/banner/awaw.jpeg" alt="" /></div><div class="content">
								<h2>Website Pengaduan Masyarakat</h2>
								<p>Memudahkan Masyarakat Melaporkan Masalah Secara Online,<br />
								Menjembatani Masyarakat dengan Pihak Berwenang untuk Solusi Masalah yang Tepat Sasaran</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="img/banner/asd.jpg" alt="" /></div><div class="content">
								<h2>Website Ini juga Mempercepat<br />
								Mengatasi Masalah</h2>
								<p>Mewujudkan Masyarakat Aktif dan Peduli dengan Website Pengaduan Masyarakat Solusi Cepat untuk Masalah Publik</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Berikut Tahap - Tahap <br /> Melakukan Pengaduan Masyarakat</h2>
							</header>
							<ul class="features">
								<li class="bi bi-pencil-square">
									<h3>1. Tulis Laporan</h3>
									<p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
								</li>
								<li class="bi bi-reply-fill">
									<h3>2. Proses Verifikasi</h3>
									<p>Dalam 2 hari, laporan Anda akan diverifikasi dan diteruskan kepada Admin/Petugas berwenang</p>
								</li>
								<li class="bi bi-chat-text">
									<h3>3. Proses Tindak Lanjut</h3>
									<p>Dalam 5 hari, Admin/Petugas akan Menindaklanjuti dan Membalas laporan Anda</p>
								</li>
								<li class="bi bi-chat-dots">
									<h3>4. Beri Tanggapan</h3>
									<p>Anda dapat menanggapi kembali balasan yang diberikan oleh Admin/Petugas dalam waktu 5 hari</p>
								</li>
								<li class="bi bi-check-circle-fill">
									<h3>5. Selesai</h3>
									<p>Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Terjadi Masalah?</h2>
								<p>Segera Laporkan ke Web Pengaduan Masyarakat</p>
							</header>
							<ul class="actions stacked">
								<li><a href="login_masyarakat.php" class="button fit">Login</a></li>
								<li><a href="https://wa.me/+6285608064055" class="button fit">WhatsApps</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.facebook.com/profile.php?id=100025409970873" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/zxayn12/?hl=id" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/zxayn" class="icon brands fa fa-github"><span class="label">Github</span></a></li>
						</ul>
						<ul class="copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |</i> by <a href="http://20540341.siap-sekolah.com/sekolah-profil/#.ZBFZi3bP23A" target="_blank">SMK TI PELITANUSANTARA</a>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>