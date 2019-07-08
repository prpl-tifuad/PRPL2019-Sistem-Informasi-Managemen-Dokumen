<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
// $id_karyawan = $_POST['id_karyawan'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$no_ktp = $_POST['no_ktp'];
$unit = $_POST['unit'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$status_kepegawaian = $_POST['status_kepegawaian'];
$golongan = $_POST['golongan'];
$berlaku_terhitung_mulai_tgl = $_POST['berlaku_terhitung_mulai_tgl'];
$str = $_POST['str'];
$sip = $_POST['sip'];
$nik = $_POST['nik'];
$pendidikan_formal = $_POST['pendidikan_formal'];
$pendidikan_nonformal = $_POST['pendidikan_nonformal'];
$pengalaman_kerja = $_POST['pengalaman_kerja'];
$pelatihan = $_POST['pelatihan'];
$dipekerjakan_sebagai = $_POST['dipekerjakan_sebagai'];
$dipekerjakan_pada = $_POST['dipekerjakan_pada'];
$diterima_tgl = $_POST['diterima_tgl'];
$foto_karyawan = $_POST['foto_karyawan'];


// $filesimpan = $kode_file.'-'.$ket_file;
$temp = explode(".", $_FILES["foto_karyawan"]["name"]);
$newnama_file = "./asset/upload/".$nama_lengkap. '.' . end($temp);
// $ext_file = explode(".", $newnama_file);
$cek=move_uploaded_file($_FILES["foto_karyawan"]["tmp_name"], $newnama_file);

if ($cek) {
mysqli_query($koneksi,"insert into data_karyawan values('','$nama_lengkap','$alamat','$no_ktp','$unit','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$agama','$status_perkawinan','$status_kepegawaian','$golongan','$berlaku_terhitung_mulai_tgl','$str','$sip','$nik','$pendidikan_formal','$pendidikan_nonformal','$pengalaman_kerja','$pelatihan','$dipekerjakan_sebagai','$dipekerjakan_pada','$diterima_tgl','$foto_karyawan')");


header("location:lihat_data_karyawan.php");
}
else{
  echo "File gagal di upload";
}

?>