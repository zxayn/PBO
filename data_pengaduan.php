<?php
session_start();
error_reporting(0);
include 'koneksi.php';
if(!isset ($_SESSION['nama_petugas'])){
	header ("location: index.php");
	}else{
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Pengaduan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="icon" type="image/x-icon" href="icon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
            <div class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="admin_petugas.php">
                                        <img src="img/iik.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
<?php
$level = $_SESSION ['level'] == 'petugas';
if ($level == 'petugas') {
?> 
									
                            <i class="fa fa-home" style="color:white"><li><a class="active" href="admin_petugas.php">Home</a></li></i>
                            <i class="fa fa-bar-chart" style="color:white"><li><a class="active" href="data_pengaduan_petugas.php">Pengaduan</a></li></i>
                            <i class="fa fa-file-archive-o" style="color:white"><li><a class="active" href="data_masarakat.php">Data Masyarakat</a></li></i>
                            <?php }else{ ?>
                            <i class="fa fa-home" style="color:white"><li><a class="active" href="admin_petugas.php">Home</a></li></i>
                            <i class="fa fa-bar-chart" style="color:white"><li><a class="active" href="data_pengaduan.php">Pengaduan</a></li></i>
                            <i class="fa fa-file-archive-o" style="color:white"><li><a class="active" href="data_masarakat.php">Data Masyarakat</a></li></i>
                            <li><i class="fa fa-user" style="color:white"> <a href="#">Kelola User<i class="ti-angle-down"></i></a></i>
                            <ul class="submenu">
                                            <li><a href="user_masarakat.php">Masyarakat</a></li>
                                            <li><a href="user_admin.php">Admin Petugas</a></li>
                                        </ul>
                                    </li>
                            <?php } ?>
                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_button">
                                    
                                    </div>
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="logout.php" onclick="return confirm('Yakin Ingin Logout?')">Logout <i class="fa fa-sign-out"></i></a>
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
<form action="" method="post" class="tulisan_input2">
<input type="text" name="cr" placeholder="Cari Data Pengaduan" style="width:20%; padding:8px; margin-top:5px; margin-bottom:5px" class="form_input" />
<input type="submit" style="margin-top:10px" class="btn btn-outline-dark my-2 my-sm-0" style="padding:8px" name="cari" value="Cari Data" />
</form>    
            <table class="table1" align="center" width="100%">
		<tr>
			<th>No</th>
			<th>Tgl Pengaduan</th>
			<th>Nama</th>
			<th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th><a class="btn btn-dark" style="float:left; width:100%" href="laporan_masarakat.php" role="button"><i class="fa fa-print"></i>Cetak</a> </th>
		</tr>
<?php
$batas =5;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;
	$halaman = 1;
    }
	else{
		$posisi = ($halaman-1) * $batas;
	}
$no =1 +$posisi;
$cari = $_POST ['cr'];
if ($cari !=''){
$query = mysqli_query ($conn, "SELECT * FROM pengaduan WHERE nama_pengadu LIKE '%".$cari."%'
	OR nik LIKE '%".$cari."%' OR tgl_pengaduan LIKE '%".$cari."%' OR status LIKE '%".$cari."%'");}else{
	$query = mysqli_query ($conn, "SELECT * FROM pengaduan LIMIT $posisi,$batas");
}
if (mysqli_num_rows ($query)){
while ($data = mysqli_fetch_array ($query)){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $data['tgl_pengaduan'] ?></td>
<td><?php echo $data['nama_pengadu'] ?></td>
<td><?php echo $data['nik'] ?></td>
<td><?php echo $data['isi_laporan'] ?></td>
<td><a href="http://localhost/desa_ukk_smk/Login/gambar_pengaduan/<?php echo $data['foto'];?>"><img src="image/<?php echo $data['foto'];?>" height="55px"></a></td>
<td><?php echo $data['status'] ?></td>
<form method="post" action="edit_selesai.php?id=<?php echo $data['id_pengaduan'] ?>">
<input type="hidden" name="id" class="form_input2" value="<?php echo $data['id_pengaduan']?>">
<input type="hidden" name="tgl" class="form_input2" value="<?php echo $data['tgl_pengaduan']?>">
<input type="hidden" name="nama" class="form_input2" value="<?php echo $data['nama_pengadu']?>"></td>
<input type="hidden" name="nik" class="form_input2" value="<?php echo $data['nik']?>">
<input type="hidden" name="isi" class="form_input2" value="<?php echo $data['isi_laporan']?>">
<input type="hidden" name="tlp" class="form_input2" value="<?php echo $data['tlp']?>">
<input type="hidden" name="foto" class="form_input2" value="<?php echo $data['foto']?>">
<input type="hidden" name="status" class="form_input2" value="Selesai">
<td>
<button type="submit" class="btn btn-success" name="simpan"><i class="bi bi-check2"></i></button>
<a onClick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger" href="hapus_data.php?idd=<?php echo $data['id_pengaduan'] ?>" role="button"><i class="bi bi-trash3"></i></a>
<div class="dropdown">
<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" style="width:auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i></button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="tanggapan_adm.php?id=<?php echo $data['id_pengaduan'] ?>">Tanggapi</a>
        <a class="dropdown-item" href="tanggapan_adm_cek.php?id=<?php echo $data['isi_laporan'] ?>">Lihat Tanggapan</a>
	</div>
</div>
</form></td>
</tr>
<?php }}else{
	echo '<tr><td colspan="8" align="center">TIDAK ADA DATA!!!</td></tr>';
}?>
</table>
<?php
	$query2		= mysqli_query($conn, "SELECT * FROM pengaduan");
	$jmldata	= mysqli_num_rows($query2);
	$jmlhalaman	= ceil($jmldata/$batas);
?>
<nav aria-label="page navigation example">
<ul class="pagination">
<li class="page-item"><a class="page-link" style="color:blue">Halaman</a></li>
	<?php
	for($i=1;$i<=$jmlhalaman;$i++)
	if ($i != $halaman){
		echo "<li class='page-item'><a class='page-link' href=\"data_pengaduan.php?halaman=$i\">$i</a></li>";
	}
	else{
		echo " <li class='page-item'><a class='page-link'>$i</a></li>";
	}
	?>

    </div>
    <!--/ project  -->

    <!-- footer start -->

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