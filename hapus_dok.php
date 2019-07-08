<?php 
include 'koneksi.php';
$id_file = $_GET['id_file'];
mysqli_query($koneksi,"DELETE FROM filersuad WHERE id_file='$id_file'");
 
header("location:dokumen.php?pesan=hapus");
?>