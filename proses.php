<?php
$koneksi = mysqli_connect("localhost", "root", "", "user");
mysqli_query($koneksi, "SET time_zone = '+07:00'");
date_default_timezone_set('Asia/Jakarta');

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$kelas = strtolower(trim($_POST['kelas']));
$latar_belakang = $_POST['latar_belakang'];
$submit = date("Y-m-d H:i:s");
$tabel = 'users';

// Query simpan data
$query = "INSERT INTO `$tabel` (nama, email, no_telp, kelas, latar_belakang, submit)
          VALUES ('$nama','$email','$no_telp','$kelas','$latar_belakang','$submit')";

mysqli_query($koneksi, $query);

// Redirect
header("Location: tuntas.html");
exit;
?>
