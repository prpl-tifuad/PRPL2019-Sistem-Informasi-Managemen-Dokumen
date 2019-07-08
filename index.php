
<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'head.php'; ?>

</head>

<body id="page-top">
    <!-- cek apakah sudah login -->
  <!-- <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
  ?> -->

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include'navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-sm-12 text-left">
                          <table id="dataTables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama admin</th>
                            <th>Alamat admin</th>
                            <th>Jabatan</th>


                        </tr>
                    </thead>
                
                <tbody>
                  <?php
                  $conn = new mysqli("localhost", "root", "", "datarsuad");
                  if ($conn->connect_errno) {
                    echo "Failed to connect to MySQL: " . $conn->connect_error;
                  }
                  
                  $no = 1;
                  $res = $conn->query("SELECT * FROM admin");
                  while($row = $res->fetch_assoc()){?>
                    
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['nama_admin']; ?></td>
                        <td><?php echo $row['alamat_admin']; ?></td>
                        <td><?php echo $row['jabatan']; ?></td>

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
            </div>
          </div>



<?php 
include 'footer.php';
?>

</body>

</html>
