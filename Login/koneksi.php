<?php
    $conn = mysqli_connect("127.0.0.1","root","1sampai8","desa");

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>