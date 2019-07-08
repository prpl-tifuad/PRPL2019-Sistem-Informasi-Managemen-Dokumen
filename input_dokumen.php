<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
// $id_karyawan = $_POST['id_karyawan'];
$id_file = $_POST['id_file'];
$kode_rootfile = $_POST['kode_file'];
$ket_file = $_POST['ket_file'];
$kategori_file = $_POST['kategori_file'];
$filesimpan = $_POST['filesimpan'];
$unit = $_POST['unit'];
$nama_file = $_POST['nama_file'];
$file_dok = $_POST['file_dok'];


$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
if ($terupload) {
mysqli_query($koneksi,"insert into filersuad values('','$id_file','$kode_file','$ket_file','$kategori_file','$unit','$nama_file','$file_dok')");
header("location:dokumen.php");
}
else{
  echo "File gagal di upload";
}

?>