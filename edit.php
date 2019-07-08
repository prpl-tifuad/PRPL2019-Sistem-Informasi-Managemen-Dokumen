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
                  $id_file = $_GET['id_file'];
                  $data = mysqli_query($koneksi,"select * from filersuad where id_file='$id_file'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                      <form action="update.php" method="POST" enctype="multipart/form-data">

                          <div class="form-group">
                              <input type="hidden" name="id_file" value="<?php echo $d['id_file']; ?>">
                              <label for="kode_file">Kode File:</label>
                              <input type="text" class="form-control" id="kode_file" name="kode_file" value="<?php echo $d['kode_file']; ?>">
                          </div>
                          <div class="form-group">
                              <label for="ket_file">Keterangan File:</label>
                              <input type="text" class="form-control" id="ket_file" name="ket_file" value="<?php echo $d['ket_file']; ?>">
                          </div>

                          <div class="form-group">
                              <label for="kategori_file">Kategori File:</label>
                              <select class="form-control" id="kategori_file" name="kategori_file" placeholder="hh">
                                  <option style="color: red" ><?php echo $d['kategori_file']; ?></option>
                                  <option value="SK">SK</option>
                                  <option value="SPO">SPO</option>
                                  <option value="Surat Pengankatan">Surat Pengangkatan</option>
                                  <option value="PPK">PPK</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="unit">Unit:</label>
                              <select class="form-control" id="unit" name="unit">
                                  <option style="color: red"><?php echo $d['unit']; ?></option>
                                  <option value="Ranap">Ranap</option>
                                  <option value="BPJS">BPJS</option>
                                  <option value="GIZI">GIZI</option>
                                  <option value="ADMIN">ADMIN</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="filesimpan">Nama File:</label>
                              <input type="text" class="form-control" id="filesimpan" name="filesimpan" value="<?php echo $d['filesimpan']; ?>" disabled>
                          </div>
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                          <a href="lihat_data.php"><button type="button" class="btn btn-danger" name="batal">Batal</button></a>
                      </form>
                      <?php 
                      }
                      ?>

    </div>

          </div>



      <?php include 'footer.php'; ?>

</body>

</html>
