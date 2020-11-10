<?php include "config/koneksi.php" ?>

<?php 
  if (isset($_POST['save'])) {
      $saving = mysqli_query($koneksi, "INSERT INTO tbl_user VALUES ('',
                                                                      '$_POST[name]',
                                                                      '$_POST[username]',
                                                                      '$_POST[email]',
                                                                      '$_POST[phone_number]',
                                                                      md5('$_POST[password]'),
                                                                      '',
                                                                      'image/1200px-Circle-icons-profile.svg.png'
                                                                    )");
      if ($saving) {
        echo "<script> 
              alert('Registration success please Login');
              document.location='index.php';
              </script>";
      }
      else {
        echo "<script>
              alert('Fill in all forms');
              document.location='register.php';
              </script>";
      }
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleregis.css">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="image/PROVENT PUTIH.png">

    <title>Provent Production</title>
  </head>
  <body>
    <div class="container">
      <form method="POST" action="">
        <h1>Register Form</h1>
        <div>
          <i class="fas fa fa-user"></i>
          <input type="text" id="name" name="name" placeholder="Full Name" required>
        </div>
        <div>
          <i class="fas fa fa-user"></i>
          <input type="text" id="username" name="username" placeholder="Usename" required>
        </div>
        <div>
          <i class="fas fa fa-envelope"></i>
          <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div>
          <i class="fas fa fa-phone"></i>
          <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number" minlength="12" maxlength="12" required>
        </div>

        <div>
          <i class="fas fa fa-key"></i>
          <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="save">Register</button>
        <div>
          <a href="index.php">Have an account!</a>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>