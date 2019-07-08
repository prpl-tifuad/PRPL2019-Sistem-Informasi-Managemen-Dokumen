<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

<!-- Data Tables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
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
            <table id="dataTables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Id File</th>
                            <th>Kode File</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                            <th>Unit</th>
<!--                             
                            <th>Aksi</th>

                        </tr>
                    </thead>
                
                <tbody>
                  <?php
                  $conn = new mysqli("localhost", "root", "", "datarsuad");
                  if ($conn->connect_errno) {
                    echo "Failed to connect to MySQL: " . $conn->connect_error;
                  }
                  
                  $no = 1;
                  $res = $conn->query("SELECT * FROM filersuad");
                  while($row = $res->fetch_assoc()){?>
                    
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_file']; ?></td>
                        <td><?php echo $row['kode_file']; ?></td>
                        <td><?php echo $row['ket_file']; ?></td>
                        <td><?php echo $row['kategori_file']; ?></td>
                        <td><?php echo $row['unit']; ?></td>
                        <td>

                        <!-- <a target="lihat_detail.php" href="<?php echo $row['nama_file'];?>"><button type="button" class="btn btn-primary">View</button></a> -->

                        <a href="simpan.php?id_file=<?php echo $row['id_file']; ?>" > <button type="button" class="btn btn-primary">download</button></a>

<!--                          
                        <a download="<?php echo $row['filesimpan'];?>" href="<?php echo $row['nama_file'];?>"><button type="button" class="btn btn-success">Download</button></a> -->
                        <a href="hapus_dok.php?id_file=<?php echo $row['id_file']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"> <button type="button" class="btn btn-danger">Delete</button></a>
                        <a href="edit.php?id_file=<?php echo $row['id_file']; ?>"> <button type="button" class="btn btn-warning">Edit</button></a>
                        </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
            <!--     <tfoot>
                        <tr>
                            <th>NO.</th>
                            <th>ID</th>
                            <th>NAME</th>

                        </tr>
                    </tfoot> -->
              </table>
              
            <!--   <script src="jquery-1.12.0.min.js"></script>
              <script src="jquery.dataTables.min.js"></script> -->
              <script>
              $(document).ready(function() {
                $('#dataTables').DataTable();
              } );
              </script>
            </div>

          </div>



     <?php include 'footer.php'; ?>

</body>

</html>
