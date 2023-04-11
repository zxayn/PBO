<?php
include "koneksi.php";
error_reporting(-1);

if (isset($_POST['simpan'])) {
    //Get value dari form
    $tgl = $_POST ['tgl'];
    $nama = $_POST ['nama'];
    $nik = $_POST ['nik'];
    $laporan = $_POST ['laporan'];
    $tlp = $_POST ['tlp'];
    $status = $_POST ['st'];

    //Get value dari file yang diupload
    $filename = $_FILES['gambar']['name'];
    $temp = explode('.', $filename);
    $ekstensi = strtolower(end($temp));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    //Konfigurasi upload
    $path = "gambar_pengaduan/";
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //Memastikan hanya gambar yang diupload
    $max_ukuran_file = 1044070; //Default server allowed is 1MB

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < $max_ukuran_file) {
            // Pindah file yang diupload ke dalam folder file
            uploadFile($file_tmp, $path, $filename);

            $query = mysqli_query($conn, "
                INSERT INTO pengaduan(tgl_pengaduan,nama_pengadu,nik,isi_laporan,tlp,foto,status) 
                VALUES('$tgl','$nama','$nik','$laporan','$tlp','$filename','$status')
            ");

            if ($query) {
                echo "<script>alert('Pengaduan berhasil terkirim.'); window.location.href='pengaduan1.php';</script>";
            } else {
                echo "<script>alert('Gagal Mengunggah Gambar. Silahkan coba lagi.'); window.location.href='masarakat_admin.php#pengaduan';</script>";
            }
        } else {
            echo "<script>alert('Ukuran file terlalu besar. Ukuran yang diperbolehkan hanya maksimal 1 MB.'); window.location.href='masarakat_admin.php#pengaduan';</script>";
        }
    } else {
        echo "<script>alert('Hanya boleh mengunggah gambar dengan ekstensi .png atau .jpg!'); window.location.href='masarakat_admin.php#pengaduan';</script>";
    }
}

function uploadFile($file_tmp, $path, $filename)
{
    if (file_exists($path)) {
        move_uploaded_file($file_tmp, $path . $filename);
    } else {
        mkdir($path, 0755);
        uploadFile($file_tmp, $path, $filename); //Retry upload jika folder sudah dibuat
    }

    return false;
}

?>