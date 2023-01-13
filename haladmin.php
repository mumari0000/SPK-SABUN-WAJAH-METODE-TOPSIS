<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<meta property="og:image" content="assets/image/HOME.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection" />
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
		$(document).ready(function() {
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
		});
	</script>
</head>

<body>

	<!-- <div class="navbar-fixed">
		<nav>
			<div class="container">
				<div class="nav-wrapper">
					<ul class="left" style="margin-left: -52px;">
						<li><a class="active" href="haladmin.php">HOME</a></li>
						<li>
							<a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
							<ul id="dropdown2" class="dropdown-content">
								<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
								<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
							</ul>
						</li>
						<li><a href="daftar_user.php">DAFTAR USER</a></li>
						<li>
							<a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
							<ul id="dropdown3" class="dropdown-content">
								<li><a href="daftar_sabunb.php">Kulit Berminyak</a></li>
								<li><a href="daftar_sabuns.php">Kulit Sensitif</a></li>
							</ul>
						</li>
						<li><a href="#about">TENTANG</a></li>
						<li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div> -->

	<nav>
		<div class="nav-wrapper">
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a class="active" href="haladmin.php">HOME</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
						<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="daftar_user.php">DAFTAR USER</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown3" class="dropdown-content">
						<li><a href="daftar_sabunb.php">Kulit Berminyak</a></li>
						<li><a href="daftar_sabuns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="#about">TENTANG</a></li>
				<li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a class="active" href="haladmin.php">HOME</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
						<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="daftar_user.php">DAFTAR USER</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown3" class="dropdown-content">
						<li><a href="daftar_sabunb.php">Kulit Berminyak</a></li>
						<li><a href="daftar_sabuns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="#about">TENTANG</a></li>
				<li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</nav>
	<!-- Body Start -->

	<!-- Jumbotron Start -->
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<h1 class="header jarak center white-text" style="font-size: 40px">SISTEM PENDUKUNG KEPUTUSAN MENGGUNAKAN METODE TOPSIS</h1>
				<div class="row center">
					<h5 class="header jarak-button col s12 light" style="margin-bottom: 0px; font-size: 26px">PEMILIHAN SABUN WAJAH PRIA</h5>
				</div>
				<div class="row center" \>
					<a class="btn dropdown-button" data-activates="dropdown2">Pilih Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
						<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="assets/image/HOME.jpg" alt="sabunwajah"></div>
	</div>
	<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white">
		<div class="container">
			<div class="section-card" style="padding: 36px 0px">
				<div class="row">
					<div class="col s6">
						<center>
							<h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO SISTEM</h5>
						</center><br>
						<p style="text-align: justify; padding-right: 16px;">Sistem Pendukung Keputusan Pemilihan Sabun Wajah berdasarkan jenis kulit ini menggunakan metode TOPSIS yang dibuat dengan menggunakan bahasa php. SPK ini dibuat untuk menyelesaikan tugas akhir. </p>
					</div>
					<div class="col s6">
						<center>
							<h5 class="header" style="margin-left: 0px; margin-bottom: 0px; margin-top: 25px; color: #635c73">INFO METODE</h5>
						</center><br>
						<p style="text-align: justify; padding-left: 16px;">Metode yang dipakai pada spk ini adalah metode TOPSIS. Metode TOPSIS adalah salah satu metode penyelesaian pada sistem pendukung keputusan. Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan atribuat atau kriteria, dimana setiap atribut saling tidak bergantung satu dengan yang lainnya.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Info End -->

	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Sabun Wajah berdasarkan jenis kulit ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Pendukung Tugas Akhir<br>

			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>

	<!-- Body End -->

	<!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px">
		<div class="container">
			<p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sabun Wajah Pria 2022.</p>
		</div>
	</div>
	<!-- Footer End -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.parallax').parallax();
			$('.modal').modal();
		});

		$(".button-collapse").sideNav();

		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems, options);
		});

		// Or with jQuery

		$(document).ready(function() {
			$('.sidenav').sidenav();
		});
	</script>
</body>

</html>