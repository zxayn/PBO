<?php
session_start();
include 'koneksi.php';
if(!isset ($_SESSION['nama'])){
	header ("location: index.php");
	}else{
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tanggapan Saya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="icon" type="image/x-icon" href="icon.ico" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/css_masyarakat/bootstrap.min.css">
    <link rel="stylesheet" href="css/css_masyarakat/owl.carousel.min.css">
    <link rel="stylesheet" href="css/css_masyarakat/magnific-popup.css">
    <link rel="stylesheet" href="css/css_masyarakat/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_masyarakat/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
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
                                        <img src="../img/iik.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_button">
                                    </div>
                                </div>
                            </div>
                        <div class="col-12">
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
    <p class="tulisan_input2">Tanggapan Laporan</p>
<form method="post">
<center><h4 style="margin-top:20px">Tidak Ada Laporan!!</h4></center>
<div>
<center><a class="btn btn-dark" href="pengaduan1_masyarakat.php" style="width:30%;">Kembali</a></p></center>
</div>
</form>

    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/js_masyarakat/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/js_masyarakat/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/js_masyarakat/popper.min.js"></script>
    <script src="js/js_masyarakat/bootstrap.min.js"></script>
    <script src="js/js_masyarakat/owl.carousel.min.js"></script>
    <script src="js/js_masyarakat/isotope.pkgd.min.js"></script>
    <script src="js/js_masyarakat/ajax-form.js"></script>
    <script src="js/js_masyarakat/waypoints.min.js"></script>
    <script src="js/js_masyarakat/jquery.counterup.min.js"></script>
    <script src="js/js_masyarakat/imagesloaded.pkgd.min.js"></script>
    <script src="js/js_masyarakat/scrollIt.js"></script>
    <script src="js/js_masyarakat/jquery.scrollUp.min.js"></script>
    <script src="js/js_masyarakat/wow.min.js"></script>
    <script src="js/js_masyarakat/nice-select.min.js"></script>
    <script src="js/js_masyarakat/jquery.slicknav.min.js"></script>
    <script src="js/js_masyarakat/jquery.magnific-popup.min.js"></script>
    <script src="js/js_masyarakat/plugins.js"></script>
    <script src="js/js_masyarakat/gijgo.min.js"></script>
    <script src="js/js_masyarakat/slick.min.js"></script>
    <!--contact js-->
    <script src="js/js_masyarakat/contact.js"></script>
    <script src="js/js_masyarakat/jquery.ajaxchimp.min.js"></script>
    <script src="js/js_masyarakat/jquery.form.js"></script>
    <script src="js/js_masyarakat/jquery.validate.min.js"></script>
    <script src="js/js_masyarakat/mail-script.js"></script>
    <script src="js/js_masyarakat/main.js"></script>
</body>

</html>
<?php } ?>