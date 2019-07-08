<?php 
include 'koneksi.php';
$id_karyawan = $_GET['id_karyawan'];
mysqli_query($koneksi,"DELETE FROM data_karyawan WHERE id_karyawan='$id_karyawan'");
 
header("location:lihat_data_karyawan.php?pesan=hapus");
?>