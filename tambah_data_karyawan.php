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
        <form action="input_karyawan.php" method="POST" enctype="multipart/form-data">

            <!-- <div class="form-group">
                <input type="hidden" class="form-control" id="id_karyawan" name="id_karyawan">
            </div> -->
            <div class="form-group">
                <label for="kode_file">Nama Karyawan:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Karyawan:</label>
              <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="kode_file">No.KTP Karyawan:</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp">
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

                </select>
            </div>
            <div class="form-group">
                <label for="kode_file">Tempat Lahir :</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="kode_file">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="kategori_file">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_file">Agama:</label>
                <select class="form-control" id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_file">Status Perkawinan:</label>
                <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_file">Status Kepegawaian:</label>
                <select class="form-control" id="status_kepegawaian" name="status_kepegawaian">
                    <option value="Orientasi">Orientasi</option>
                    <option value="Kontrak">Kontrak</option>
                    <option value="Tetap">Tetap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="golongan">Golongan :</label>
                <input type="text" class="form-control" id="golongan" name="golongan">
            </div>
            <div class="form-group">
                <label for="berlaku_terhitung_mulai_tgl">Berlaku Terhitung Mulai Tanggal :</label>
                <input type="date" class="form-control" id="berlaku_terhitung_mulai_tgl" name="berlaku_terhitung_mulai_tgl">
            </div>
            <div class="form-group">
                <label for="str">STR :</label>
                <input type="text" class="form-control" id="str" name="str">
            </div>
            <div class="form-group">
                <label for="sip">SIP :</label>
                <input type="text" class="form-control" id="sip" name="sip">
            </div>
            <div class="form-group">
                <label for="nik">NIK :</label>
                <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
              <label for="pendidikan_formal">Pendidikan Formal:</label>
              <textarea class="form-control" rows="5" id="pendidikan_formal" name="pendidikan_formal"></textarea>
            </div>
            <div class="form-group">
              <label for="pendidikan_nonformal">Pendidikan Non-Formal:</label>
              <textarea class="form-control" rows="5" id="pendidikan_nonformal" name="pendidikan_nonformal"></textarea>
            </div>
            <div class="form-group">
              <label for="pengalaman_kerja">Pengalaman Kerja:</label>
              <textarea class="form-control" rows="5" id="pengalaman_kerja" name="pengalaman_kerja"></textarea>
            </div>
            <div class="form-group">
              <label for="pelatihan">Pelatihan:</label>
              <textarea class="form-control" rows="5" id="pelatihan" name="pelatihan"></textarea>
            </div>
            <div class="form-group">
                <label for="dipekerjakan_sebagai">Dipekerjakan sebagai :</label>
                <input type="text" class="form-control" id="dipekerjakan_sebagai" name="dipekerjakan_sebagai">
            </div>
            <div class="form-group">
                <label for="dipekerjakan_pada">Dipekerjakan Pada :</label>
                <input type="date" class="form-control" id="dipekerjakan_pada" name="dipekerjakan_pada">
            </div>
            <div class="form-group">
                <label for="diterima_pada">Diterima Tanggal:</label>
                <input type="date" class="form-control" id="diterima_tgl" name="diterima_tgl">
            </div>
            <div class="form-group">
                <label for="foto_karyawan">Upload Foto:</label>
                <input type="file" class="form-control" id="foto_karyawan" name="foto_karyawan">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </div>

          </div>



      <?php include 'footer.php'; ?>

</body>

</html>
