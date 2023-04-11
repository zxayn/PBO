<?php
session_start();
include 'koneksi.php';
if (!isset ($_SESSION['nama'])) {
    header("location: index.php");
} else {
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title><?php echo $_SESSION['nama'] ?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <link rel="stylesheet" href="assetss/css/main.css"/>
        <noscript>
            <link rel="stylesheet" href="assetss/css/noscript.css"/>
        </noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="icon" type="image/x-icon" href="../icon.ico"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
              crossorigin="anonymous">

    </head>
    <body class="is-preload">

    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Nav -->
        <nav id="nav">
            <a href="#" class="icon solid fa-home"><span>Home</span></a>
            <a href="#pengaduan" class="icon solid fa-envelope"><span>Pengaduan</span></a>
            <a href="pengaduan1.php"><i class="bi bi-bar-chart-line"></i><span>Hasil</span></a>
            <a href="../index.php" onclick="return confirm('Yakin Ingin Logout?')" value="Logout"/><i
                class="bi bi-box-arrow-in-right"></i><span>Logout</span></a>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Me -->
            <article id="home" class="panel intro">
                <header>
                    <h1><?php echo $_SESSION['nama'] ?></h1>
                    <p>Selamat datang di web Pengaduan Masyarakat Desa Dermo Kec. Mrican</p>
                </header>
                <a href="#pengaduan" class="jumplink pic">
                    <span class="arrow icon solid fa-chevron-right"><span>See my work</span></span>
                    <img src="imagess/me.jpg" alt=""/>
                </a>
            </article>

            <!-- Contact -->
            <article id="pengaduan" class="panel">
                <header>
                    <h2>Pengaduan</h2>
                </header>
                <form action="upload_file.php" method="post" enctype="multipart/form-data">
                    <div>
                        <div class="row">
                            <div class="col-8 col-12-medium">
                                <input type="text" name="tgl" class="form_input2" required
                                       value="<?php date_default_timezone_set('Asia/Jakarta');
                                       echo date('Y-m-d (H:i:s)') ?>" readonly></div>
                            <div class="col-8 col-12-medium">
                                <input type="text" name="nama" class="form_input2" required
                                       value="<?php echo $_SESSION['nama'] ?>" readonly></div>
                            <div class="col-8 col-12-medium">
                                <input type="text" name="tlp" required class="form_input2"
                                       value="<?php echo $_SESSION['tlp'] ?>" readonly></div>
                            <div class="col-8 col-12-medium">
                                <input type="text" name="nik" class="form_input2" required
                                       value="<?php echo $_SESSION['nik'] ?>" readonly></div>
                            <div class="col-8">
                                <input type="file" required name="gambar"></div>
                            <input type="hidden" name="st" value="Proses">
                            <div class="col-12">
                                <textarea name="laporan" cols="90" placeholder="Kirimkan Masukan" required
                                          rows="8"></textarea></div>
                            <div class="col-xl-3">
                                <input type="submit" value="Kirim Masukan" name="simpan"<a href="pengaduan1.php">
                            </div>
                        </div>
                    </div>
                </form>
            </article>

        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved |</i> by <a href="http://20540341.siap-sekolah.com/sekolah-profil/#.ZBFZi3bP23A"
                                                target="_blank">SMK TI PELITANUSANTARA</a>
            </ul>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assetss/js/jquery.min.js"></script>
    <script src="assetss/js/browser.min.js"></script>
    <script src="assetss/js/breakpoints.min.js"></script>
    <script src="assetss/js/util.js"></script>
    <script src="assetss/js/main.js"></script>
    \
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

    </body>
    </html>
<?php } ?>