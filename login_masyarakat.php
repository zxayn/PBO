<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Masyarakat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fonts_masyarakat/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="js/vendor_masyarakat/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="icon" type="image/x-icon" href="icon.ico" />
	<link rel="stylesheet" type="text/css" href="css/css_masyarakat/util.css">
	<link rel="stylesheet" type="text/css" href="css/css_masyarakat/main.css">
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
					SILAHKAN LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="user" required="required" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" required="required" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">
							<i class="fa fa-sign-in"></i> Login
						</button>
<?php
if (isset($_POST ['login'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$data_user = mysqli_query ($conn,"SELECT * FROM masyarakat WHERE username ='$user' AND password ='$pass'");
				$r = mysqli_fetch_array ($data_user);
				@$username = $r ['username'];
				@$password = $r ['password'];
				@$nama_user = $r ['nama'];
				@$nik = $r ['nik'];
				@$tlp = $r ['tlp'];
				if ($user == $username && $pass == $password) {
					$_SESSION['nama'] = $nama_user;
					$_SESSION['nik'] = $nik;
					$_SESSION['tlp'] = $tlp;
		echo "<div class='alert alert-success'>Login Sukses</div>";
		echo "<meta http-equiv='refresh' content='1;url=masarakat_admin.php'>";
		} else {
		echo "<div class='alert alert-danger'>Login Gagal</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";

	}
	}
?>
					</div>
              <center>Belum Punya Account? Registrasi <a href="registrasi.php" class="txt3">disini!!</a></center>
					<div>
						
						<center><a href="index.php" class="txt3">
							Kembali
						</a></center>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/bootstrap/js/popper.js"></script>
	<script src="js/vendor_masyarakat/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/daterangepicker/moment.min.js"></script>
	<script src="js/vendor_masyarakat/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="js/vendor_masyarakat/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/js_masyarakat/main.js"></script>

</body>
</html>