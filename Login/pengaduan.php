<?php
session_start();
include 'koneksi.php';

if (!isset ($_SESSION['nama'])) {
    header("location: index.php");
} else {
    ?>
    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pengaduan Masyarakat</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <link rel="icon" type="image/x-icon" href="../icon.ico"/>
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/magnific-popup.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../Login/css/style.css">
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
                                    <img src="img/iik.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <i class="fa fa-home" style="color:white">
                                                <li><a class="active" href="masarakat_admin.php">Home</a></li>
                                            </i>
                                            <i class="fa fa-bar-chart" style="color:white">
                                                <li><a class="active" href="pengaduan1.php">Pengaduan Saya</a></li>
                                            </i>

                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_button">

                                    </div>
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="logout.php" onclick="return confirm('Yakin Ingin Logout?')">Logout <i
                                                class="fa fa-sign-out"></i></a>
                                    </div>

                                </div>
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
        <h4 class="tulisan_input2">PENGADUAN</h4>
        <table class="table2" width="40%" align="center">
            <form action="upload_file.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" class="form_input2" value="<?php echo $_SESSION['id'] ?>">
                <tr>
                    <td>
                        <h7>Tanggal Pengaduan</h7>
                    </td>
                    <td><input type="text" name="tgl" class="form_input2" required
                               value="<?php date_default_timezone_set('Asia/Jakarta');
                               echo date('Y-m-d (H:i:s)') ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        <h7>Nama</h7>
                    </td>
                    <td><input type="text" name="nama" class="form_input2" required
                               value="<?php echo $_SESSION['nama'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        <h7>NIK</h7>
                    </td>
                    <td><input type="text" name="nik" class="form_input2" required
                               value="<?php echo $_SESSION['nik'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        <h7>Isi Laporan</h7>
                        </th>
                        <textarea name="laporan" cols="90" required rows="8"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <h7>No.Telp</h7>
                        </th>
                        <input type="text" name="tlp" required class="form_input2"
                               value="<?php echo $_SESSION['tlp'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>
                        <h7>Foto</h7>
                    </td>
                    <td><input type="file" required name="gambar"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="st" value="Proses"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="simpan"
                                style="float:left; margin-right:25px;">Adukan
                        </button>
                        <button type="reset" class="btn btn-danger" style="float:left; margin-right:25px;"><i
                                class="fa fa-remove"></i> Reset
                        </button>
                    </td>
                </tr>

            </form>
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
<?php } ?>