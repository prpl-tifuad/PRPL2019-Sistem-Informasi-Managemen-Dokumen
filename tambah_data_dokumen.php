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
        <form action="input_dokumen.php" method="POST" enctype="multipart/form-data">

            <!-- <div class="form-group">
                <input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan">
            </div> -->
            <div class="form-group">
                <label for="kode_file">id file:</label>
                <input type="text" class="form-control" id="id_file" name="id dokumen">
            </div>
            <div class="form-group">
              <label for="kode_dokumen">Kode dokumen:</label>
              <textarea class="form-control" id="kode_file" name="kode_file"></textarea>
            </div>
            <div class="form-group">
                <label for="ket_file">Keterangan:</label>
                <input type="text" class="form-control" id="ket_file" name="ket_file">
             <div class="form-group">
                <label for="kategori_file">kategori:</label>
                <input type="text" class="form-control" id="ket_file" name="ket_file">
            </div>
             <div class="form-group">
                <label for="kategori_file">nama file:</label>
                <input type="text" class="form-control" id="ket_file" name="filesimpan">
            </div>
             <div class="form-group">
                <label for="unit">Unit:</label>
                <select class="form-control" id="unit" name="unit">
                    <option value="Unit Pelayanan Medis Gawat Darurat">Unit Pelayanan Medis Gawat Darurat</option>
                    <option value="Unit Pelayanan Medis Rawat Jalan">Unit Pelayanan Medis Rawat Jalan</option>
                    <option value="Unit Pelayanan Medis Rawat Inap">Unit Pelayanan Medis Rawat Inap</option>
                    <option value="Unit Pelayanan Medis Homecare">Unit Pelayanan Medis Homecare</option>
                    <option value="Unit Pelayanan Medis Geriatri Cek Up Kesehatan">Unit Pelayanan Medis Geriatri Cek Up Kesehatan</option>
                    <option value="Unit Pelayanan Medis Gigi dan Mulut">Unit Pelayanan Medis Gigi dan Mulut</option>
                    <option value="Unit Pelayanan Farmasi">Unit Pelayanan Farmasi</option>
                    <option value="Unit Pelayanan Radiologi">Unit Pelayanan Radiologi</option>
                    <option value="Unit Pelayanan Rekam Medis dan Pendaftaran">Unit Pelayanan Rekam Medis dan Pendaftaran</option>
                    <option value="Unit Pelayanan Rehabilitasi Medik">Unit Pelayanan Rehabilitasi Medik</option>
                    <option value="Unit Pelayanan Gizi">Unit Pelayanan Gizi</option>
                    <option value="Unit Pelayanan Sterilisasi dan Instrumen">Unit Pelayanan Sterilisasi dan Instrumen</option>
                    <option value="Unit Pelayanan Kesehatan Lingkungan">Unit Pelayanan Kesehatan Lingkungan</option>
                    <option value="Unit Pelayanan Ambulan">Unit Pelayanan Ambulan</option>
                    <option value="Unit Pelayanan Pemeliharaan Sarana RS">Unit Pelayanan Pemeliharaan Sarana RS</option>
                    <option value="Unit Pelayanan Komunikasi dan Telekomunikasi">Unit Pelayanan Komunikasi dan Telekomunikasi</option>
                    <option value="Unit Pelayanan Pemulasara Jenazah">Unit Pelayanan Pemulasara Jenazah</option>
                    <option value="Unit Pelayanan Tim K3">Unit Pelayanan Tim K3</option>
                    <option value="Unit Pelayanan Gawat Darurat">Unit Pelayanan Gawat Darurat</option>
                    <option value="Unit Pelayanan Kamar Bersalin">Unit Pelayanan Kamar Bersalin</option>
                    <option value="Unit Pelayanan Rawat Jalan">Unit Pelayanan Rawat Jalan</option>
                    <option value="Unit Pelayanan Rawat Inap">Unit Pelayanan Rawat Inap</option>
                    <option value="Unit Pelayanan HCU">Unit Pelayanan HCU</option>
                    <option value="Unit Pelayanan Kamar Operasi">Unit Pelayanan Kamar Operasi</option>
                    <option value="Unit Kerja Kasir dan Penetapan Biaya">Unit Kerja Kasir dan Penetapan Biaya</option>
                    <option value="Unit Kerja Piutang dan Pajak">Unit Kerja Piutang dan Pajak</option>
                    <option value="Unit Kerja Akuntansi">Unit Kerja Akuntansi</option>
                    <option value="Unit Kerja Kas">Unit Kerja Kas</option>
                    <option value="Unit Kerja Humas dan Pemasaran">Unit Kerja Humas dan Pemasaran</option>
                    <option value="Unit Kerja Gudang dan Rumah Tangga">Unit Kerja Gudang dan Rumah Tangga</option>
                    <option value="Unit Kerja Satpam">Unit Kerja Satpam</option>
                    <option value="Unit Kerja Binrois">Unit Kerja Binrois</option>
                    <option value="Unit Kerja Diklat">Unit Kerja Diklat</option>
                    <option value="Unit Kerja SDM">Unit Kerja SDM</option>
                    <option value="Unit Kerja Laundry">Unit Kerja Laundry</option>
                    <option value="Unit Kerja lainnya">Unit Kerja lainnya</option>

                </select>
            </div>
             <input type="file" name="berkas" />
        <button type="submit" name="upload" value="upload" />Submit </button>
            <!--button type="submit" class="btn btn-success" name="submit">Submit</button-->
        </form>
    </div>

          </div>



      <?php include 'footer.php'; ?>

</body>

</html>
