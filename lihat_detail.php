<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'head.php'; ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php include 'navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-sm-12 text-left">
    <br> 
        <?php
        include 'koneksi.php';
         $id_karyawan = $_GET['id_karyawan'];
         $data = mysqli_query($koneksi,"select * from data_karyawan where id_karyawan='$id_karyawan'");
         while($d = mysqli_fetch_array($data)){
         ?>
        <form action="input_karyawan.php" method="POST" enctype="multipart/form-data">
            <img src="./asset/upload/<?php echo $d['nama_lengkap'] ?>" style="width: 25%; align-content: center;">
            <!-- <div class="form-group">
                <input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan">
            </div> -->
            <div class="form-group">
                <label for="kode_file">Nama Karyawan:</label>
                <input type="text" disabled class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Karyawan:</label>
              <textarea class="form-control" rows="5" id="alamat" name="alamat" disabled><?php echo $d['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="kode_file">No.KTP Karyawan:</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $d['no_ktp']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="kode_file">Unit:</label>
                <input type="text" class="form-control" id="unit" name="unit" value="<?php echo $d['unit']; ?>" disabled>
            </div>             
            <div class="form-group">
                <label for="kode_file">Tempat Lahir :</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="kode_file">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $d['agama']; ?>"disabled>
            </div>
            <div class="form-group">
                <label for="status_perkawinan">Status Perkawinan:</label>
                <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" value="<?php echo $d['status_perkawinan']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="status_kepegawaian">Status Kepegawaian:</label>
                <input type="text" class="form-control" id="status_kepegawaian" name="status_kepegawaian" value="<?php echo $d['status_kepegawaian']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="golongan">Golongan:</label>
                <input type="text" class="form-control" id="golongan" name="golongan" value="<?php echo $d['golongan']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="berlaku_terhitung_mulai_tgl">Berlaku Terhitung Mulai Tanggal :</label>
                <input type="date" class="form-control" id="berlaku_terhitung_mulai_tgl" name="berlaku_terhitung_mulai_tgl" value="<?php echo $d['berlaku_terhitung_mulai_tgl']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="str">STR :</label>
                <input type="text" class="form-control" id="str" name="str" value="<?php echo $d['str']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="sip">SIP :</label>
                <input type="text" class="form-control" id="sip" name="sip" value="<?php echo $d['sip']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="nik">NIK :</label>
                <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $d['nik']; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="pendidikan_formal">Pendidikan Formal:</label>
              <textarea class="form-control" rows="5" id="pendidikan_formal" name="pendidikan_formal" disabled><?php echo $d['pendidikan_formal']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="pendidikan_nonformal">Pendidikan Non-Formal:</label>
              <textarea class="form-control" rows="5" id="pendidikan_nonformal" name="pendidikan_nonformal" disabled><?php echo $d['pendidikan_nonformal']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="pengalaman_kerja">Pengalaman Kerja:</label>
              <textarea class="form-control" rows="5" id="pengalaman_kerja" name="pengalaman_kerja" disabled><?php echo $d['pengalaman_kerja']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="pelatihan">Pelatihan:</label>
              <textarea class="form-control" rows="5" id="pelatihan" name="pelatihan" disabled><?php echo $d['pelatihan']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="dipekerjakan_pada">Dipekerjakan Sebagai :</label>
                <input type="text" class="form-control" id="dipekerjakan_sebagai" name="dipekerjakan_sebagai" value="<?php echo $d['dipekerjakan_sebagai']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="dipekerjakan_pada">Dipekerjakan Pada :</label>
                <input type="date" class="form-control" id="dipekerjakan_pada" name="dipekerjakan_pada" value="<?php echo $d['dipekerjakan_pada']; ?>" disabled>
            </div>
            
            <div class="form-group">
                <label for="diterima_pada">Diterima Tanggal:</label>
                <input type="date" class="form-control" id="diterima_tgl" name="diterima_tgl" value="<?php echo $d['diterima_tgl']; ?>" disabled>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
        <?php 
            }
        ?>
    </div>

          </div>



      <?php include 'footer.php'; ?>

</body>

</html>
