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
        <title>Pengaduan Saya</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
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
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="masarakat_admin.php#">Kembali <i class="fa fa-sign-out"></i></a>
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
        <p class="tulisan_input2">Pengaduan Saya</p>
        <table class="table1" align="center" width="100%">
            <tr>
                <th>No</th>
                <th>Tgl Pengaduan</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Isi Laporan</th>
                <th>No Telepon</th>
                <th>Foto</th>
                <th colspan="2">Status</th>
            </tr>
            <?php
            $no = 1;
            $nik = $_SESSION['nik'];
            $query = mysqli_query($conn, "SELECT * FROM pengaduan WHERE nik = '$nik'");
            if (mysqli_num_rows($query)){
            while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td><?= $data ['tgl_pengaduan'] ?></td>
                <td><?= $data ['nama_pengadu'] ?></td>
                <td><?= $data ['nik'] ?></td>
                <td><?= $data ['isi_laporan'] ?></td>
                <td><?= $data ['tlp'] ?></td>
                <td><a href="image/x<?= $data['foto']; ?>"><img src="gambar_pengaduan/<?= $data['foto'] ?>" height="55px"></a></td>
                <td><?= $data ['status'] ?></td>
                <td><a class="btn btn-success" style="float:left"
                       href="tanggapan_masyarakat.php?id=<?php echo $data['isi_laporan'] ?>" role="button"><i
                            class="fa fa-eye"></i> Lihat Tanggapan</a></p>
                    <?php }
                    } else {
                        echo '<tr><td colspan="8" align="center">TIDAK ADA DATA!!!</td></tr>';
                    } ?>
                </td>
            </tr>
        </table>
        <!-- $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name']; -->

        <!--/ footer end  -->

        <!-- link that opens popup -->

        <!-- form itself end-->


        <!-- form itself end -->

        <!-- JS here -->
        <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/isotope.pkgd.min.js"></script>
        <script src="../js/ajax-form.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/imagesloaded.pkgd.min.js"></script>
        <script src="../js/scrollIt.js"></script>
        <script src="../js/jquery.scrollUp.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/nice-select.min.js"></script>
        <script src="../js/jquery.slicknav.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/gijgo.min.js"></script>
        <script src="../js/slick.min.js"></script>
        <!--contact js-->
        <script src="../js/contact.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/jquery.form.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/mail-script.js"></script>

        <script src="../js/main.js"></script>
    </body>

    </html>
<?php } ?>