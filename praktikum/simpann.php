<?php
//menyimpan data kedalam variabel
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];
//query sql untuk insert data
$query="INSERT INTO kontak SET nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:index.php");
?>