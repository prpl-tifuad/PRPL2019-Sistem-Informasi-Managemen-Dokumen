<!DOCTYPE html>
<html lang="en">

<head>

  //<meta charset="utf-8">
  //<meta http-equiv="X-UA-Compatible" content="IE=edge">
  //<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  //<meta name="description" content="">
  //<meta name="author" content="">
  //<link rel="icon" type="image/png" class="img-circle" href="img/Logo RSUAD.jpg" >
  //<title>Admin RS UAD</title>

  <!-- Custom fonts for this template-->
  //<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  //<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  //<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body background="img/rz.png">


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" style="background-color: purple"  >
              <div class="col-lg-6  d-lg-block">
                <img src="img/logo.png" width="100%" align="center">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-white-900 mb-4"><strong>Selamat Datang Admin</strong></h1>
                  </div>
                    <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan'] == "gagal"){
                        echo "<font color='yellow'><strong>Login gagal! username dan password salah!</font></strong>";
                      }else if($_GET['pesan'] == "logout"){
                        echo "<font color='yellow'><strong>Anda telah berhasil logout !</font></strong>";
                      }else if($_GET['pesan'] == "belum_login"){
                        echo "<font color='yellow'><strong>Anda harus login untuk mengakses halaman admin !</font></strong>";
                      }
                    }
                    ?>
                  <form class="user" method="POST" action="cek_login.php">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" aria-describedby="username" name="username" placeholder="Masukkan username admin...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    </div><input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login">
                    <a href="../index.php" class="btn btn-danger btn-user btn-block">
                      Back
                    </a>
                    
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  //<script src="vendor/jquery/jquery.min.js"></script>
  //<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  //<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  //<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
