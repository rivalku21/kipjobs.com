<?php 
  session_start();
  if(empty($_SESSION['id_user']) or empty($_SESSION['username'])) {
    echo "<script>document.location='index.php';
  </script>";
  }

  $id_user=$_SESSION["id_user"];
  $username=$_SESSION["username"];
?>


<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="image/PROVENT PUTIH.png">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

    <title>Interviewer.com</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="?page=home"><h5>Interviewer.com</h5></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarright" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="fa fa-user">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarright">
          <ul class="navbar-nav ml-auto">
            <div class="dropdown">
            <h4 style="text-transform: uppercase;"><?php echo $username; ?></h4>
            </div>
            <div class="dropdown">
                  <button type="button" class="dropbtn btn-circle btn-sm">
                    <a type="button" class="btn btn-sm fa fa-home" href="?page=home" role="button"></a>
                  </button>
                  <div class="dropdown-content">
                    <p>Home</p>
                  </div>
                </div>
            <div class="dropdown">
              <button type="button" class="dropbtn btn-circle btn-sm">
                <a type="button" class="btn btn-sm fa fa-comments" href="?page=messege" role="button"></a>
              </button>
              <div class="dropdown-content">
                <p>Messeges</p>
              </div>
            </div>
            <div class="dropdown">
              <button type="button" class="dropbtn btn-circle btn-sm">
                <a type="button" class="btn btn-sm fa fa-user" href="?page=profil&id=<?php echo $id_user; ?>" role="button"></a>
              </button>
              <div class="dropdown-content">
                <p>Your Profil</p>
              </div>
            </div>
            <div class="dropdown">
              <button type="button" class="dropbtn btn-circle btn-sm">
                <a type="button" class="btn btn-sm fa fa-sign-out" href="logout.php" role="button"></a>
              </button>
              <div class="dropdown-content">
                <p>LogOut</p>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- isi -->
    <div class="container" style="margin-bottom: 80px; margin-top: 80px; ">