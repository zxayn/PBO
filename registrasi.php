<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registrasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="icon" type="image/x-icon" href="icon.ico" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="Login/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="registrasi.php">
                                        <img src="img/p.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <i class="fa fa-home" style="color:black"><li><a class="active" href="index.php">home</a></li></i>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_button">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
<?php
if (isset($_POST['simpan'])){
	$nik = $_POST ['nik'];
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$rtrw = $_POST ['rtrw'];
	$tlp = $_POST ['tlp'];
	$user = $_POST ['user'];
	$pass = $_POST ['pass'];
	$tambah = mysqli_query ($conn, "INSERT INTO masyarakat(nik,nama,alamat,rt_rw,tlp,username,password)VALUES('$nik','$nama','$alamat','$rtrw','$tlp','$user','$pass')");
	if($tambah){
		echo "<div class='alert alert-success'><center>Registrasin berhasil, Silahkan Login</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=Login/index.php'>";
		} else {
		echo "<div class='alert alert-danger'><center>Registrasi Gagal</center></div>";
		echo "<meta http-equiv='refresh' content='1;url=registrasi.php'>";
		}
		}
?>
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    
    <!-- slider_area_end -->

    <!-- service_area_start -->


    <!-- project  -->
    <div class="project_area">
    <p class="tulisan_input2">Silahkan Registrasi</p>
    <table class="table2" width="40%" align="center">
<form method="post">
<td><h7>NIK</h7></td><td><input type="text" name="nik" class="form_input2" required="required" placeholder="NIK 16 Digit" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)"></td>
</tr>
<tr>
<td><h7>Nama</h7></td><td><input type="text" name="nama" class="form_input2" required="required"  placeholder="Nama"></td>
</tr>
<tr>
<td><h7>Alamat</h7></th><td><input type="text" name="alamat" class="form_input2" required="required"  placeholder="Alamat"></td>
</tr>
<tr>
<td><h7>RT/RW</h7></th><td><input type="text" name="rtrw" class="form_input2" required="required" placeholder="RT/RW"></td>
</tr>
<tr>
<td><h7>No.Telp</h7></th><td><input type="text" name="tlp" class="form_input2" required="required"  placeholder="No.Tlp" maxlength="12" onkeypress="return hanyaAngka(event)"></td>
</tr>
<tr>
<td><h7>Username</h7></th><td><input type="text" name="user" class="form_input2" required="required"  placeholder="Username"></td>
</tr>
<tr>
<td><h7>Pasword</h7></th><td><input type="password" name="pass" class="form_input2" required="required"  placeholder="Password"></td>
</tr>
<tr>
<td colspan="2"><button type="submit" class="btn btn-success" name="simpan" style="float:left; margin-left:25px;">Registrasi</button>
                <button type="reset" class="btn btn-danger" style="float:left; margin-left:25px;"><i class="fa fa-remove"></i>Reset</button>
</td>
</tr>
<form>
<script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
</script>
</table>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>