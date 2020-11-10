<?php 
  session_start();
  if(empty($_SESSION['id_user']) or empty($_SESSION['username'])) {
    echo "<script>document.location='index.php';
  </script>";
  }

  $id_user=$_SESSION["id_user"];
  $username=$_SESSION["username"];
?>
<style>
	body {
		background-image: linear-gradient(22.5deg, rgba(242, 242, 242, 0.03) 0%, rgba(242, 242, 242, 0.03) 16%,rgba(81, 81, 81, 0.03) 16%, rgba(81, 81, 81, 0.03) 26%,rgba(99, 99, 99, 0.03) 26%, rgba(99, 99, 99, 0.03) 73%,rgba(43, 43, 43, 0.03) 73%, rgba(43, 43, 43, 0.03) 84%,rgba(213, 213, 213, 0.03) 84%, rgba(213, 213, 213, 0.03) 85%,rgba(125, 125, 125, 0.03) 85%, rgba(125, 125, 125, 0.03) 100%),linear-gradient(22.5deg, rgba(25, 25, 25, 0.03) 0%, rgba(25, 25, 25, 0.03) 54%,rgba(144, 144, 144, 0.03) 54%, rgba(144, 144, 144, 0.03) 60%,rgba(204, 204, 204, 0.03) 60%, rgba(204, 204, 204, 0.03) 76%,rgba(37, 37, 37, 0.03) 76%, rgba(37, 37, 37, 0.03) 78%,rgba(115, 115, 115, 0.03) 78%, rgba(115, 115, 115, 0.03) 91%,rgba(63, 63, 63, 0.03) 91%, rgba(63, 63, 63, 0.03) 100%),linear-gradient(157.5deg, rgba(71, 71, 71, 0.03) 0%, rgba(71, 71, 71, 0.03) 6%,rgba(75, 75, 75, 0.03) 6%, rgba(75, 75, 75, 0.03) 15%,rgba(131, 131, 131, 0.03) 15%, rgba(131, 131, 131, 0.03) 18%,rgba(110, 110, 110, 0.03) 18%, rgba(110, 110, 110, 0.03) 37%,rgba(215, 215, 215, 0.03) 37%, rgba(215, 215, 215, 0.03) 62%,rgba(5, 5, 5, 0.03) 62%, rgba(5, 5, 5, 0.03) 100%),linear-gradient(90deg, #ffffff,#ffffff);
		background-attachment: fixed;
	}
</style>

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
  	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarleft" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
  	  	<a class="navbar-brand page-scroll" href="#home"><h5>Interviewer.com</h5></a>
  	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarright" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="fa fa-user">
	      <span class="navbar-toggler-icon"></span>
	    </button>
  	  	<div class="collapse navbar-collapse" id="navbarleft">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link page-scroll" href="#service"><h6>Services</h6><span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link page-scroll" href="#about"><h6>About</h6><span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link page-scroll" href="#contact"><h6>Contact</h6><span class="sr-only">(current)</span></a>
		      </li>
		 	</ul>
		</div>
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

  	<!-- Jumbotron -->
  	<section>
  		<div class="container" style="margin-top: 80px; margin-bottom: 50px; text-align: center; align-items: center; color: black;">
        <div class="row">
          <div class="col-sm-6">
            <img src="image/undraw_the_search_s0xf.svg" alt="" style="width: 50%; text-align: center; align-items: center;">
          </div>
          <div class="col-sm-6 my-auto" style="text-align: left;">
            <h1><b>Build Your Team With The Best People</b></h1>
            <p>New way to create your team for your business and venture</p>
            <a style="text-decoration: none; color: #fff;" href="?page=home&next=make-form&id=<?php echo $id_user; ?>"><button name="make-form" class="btn-ripple">Make Your Form</button></a>
          </div>
        </div> 
        <hr style="margin-top: 50px;">
      </div>
  	</section>
    <section>
      <div class="container" style="text-align: center; margin-bottom: 50px; align-items: center; color: black;">
        <div class="row">
          <div class="col-sm-4">
            <img src="svg/working.svg" alt="" style="width: 25%; margin-bottom: 20px;">
            <h3><b>Easy To Manage</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel veritatis dicta, minus dignissimos illo quasi porro sint adipisci,</p>
          </div>
          <div class="col-sm-4">
            <img src="svg/innovation.svg" alt="" style="width: 25%; margin-bottom: 20px; ">
            <h3><b>Awesome Features</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur repellendus veritatis illum, sapiente eum ea accusantium.</p>
          </div>
          <div class="col-sm-4">
            <img src="svg/smartphone.svg" alt="" style="width: 25%; margin-bottom: 20px;">
            <h3><b>Social Media Connect</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus necessitatibus dicta nesciunt excepturi suscipit.</p>
          </div>
        </div> 
        <hr style="margin-top: 50px;">
      </div>
    </section>
    <section>
      <div class="container" style="color: black; margin-bottom: 50px;">
        <div class="row">
          <div class="col-sm-6 my-auto" style="text-align: right;">
            <h2><b>Get The Best People Very Easily With The Features Available At Interviewer.com</b></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis odio unde, cumque eius tempora soluta fugiat illum rem sequi animi vero vitae tenetur dignissimos maxime voluptatem dicta quis voluptatibus reprehenderit!</p>
            <a style="text-decoration: none; color: #fff;" href="?page=home&next=make-form&id=<?php echo $id_user; ?>"><button name="make-form" class="btn-ripple">Make Your Form</button></a>
          </div>
          <div class="col-sm-6 my-auto">
            <img src="image/undraw_progress_indicator_p84k.svg" alt="" style="margin-top: 20px; margin-left: 30px; width: 80%;">
          </div>
        </div>
        <hr style="margin-top: 50px;">
      </div>
    </section>

    <section class="service" id="service">
      <div class="container" style="color: black; margin-bottom: 50px;">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8" style="text-align: center; align-items: center; margin-bottom: 30px;">
            <h2><b>Choose Your Plan</b></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, facere odio. Voluptatum sunt temporibus possimus nostrum suscipit voluptas obcaecati eum dolore, libero quaerat iste ab molestias pariatur culpa, omnis odio.</p>
          </div>
        </div>
        <div class="row">
          <div class="pricing-card col-sm-3">
            <div class="card card-price">
              <a href="">
                <h3>Basic</h3>
                <img src="svg/free.svg" alt="" style="width: 20%;">
                <h4>Free</h4>
                <div class="list-price">
                  <p>7 Days Form</p>
                  <hr>
                  <p>Max 1 Form in 1 time</p>
                  <hr>
                  <p>Only Top 5 Registrants Are Shown</p>
                  <hr>
                </div>
              </a>
            </div>
          </div>
          <div class="pricing-card col-sm-3">
            <div class="card card-price">
              <a href="">
                <h3>Team</h3>
                <img src="svg/team (1).svg" alt="" style="width: 20%;">
                <h4>$9.99/Years</h4>
                <div class="list-price">
                  <p>1 Month Form</p>
                  <hr>
                  <p>Max 5 Form in 1 time</p>
                  <hr>
                  <p>Top 5 + 10 Registrants Can Be Seen</p>
                  <hr>
                </div>
              </a>
            </div>
          </div>
          <div class="pricing-card col-sm-3">
            <div class="card card-price">
              <a href="">
                <h3>Comunity</h3>
                <img src="svg/team.svg" alt="" style="width: 20%;">
                <h4>$34.99/Years</h4>
                <div class="list-price">
                  <p>3 Month Form</p>
                  <hr>
                  <p>Unlimited Form in 1 time</p>
                  <hr>
                  <p>Top 10 + 30 Registrants Can Be Seen</p>
                  <hr>
                  <p>Image File Scan</p>
                  <hr>
                </div>
              </a>
            </div>
          </div>
          <div class="pricing-card col-sm-3">
            <div class="card card-price">
              <a href="">
                <h3>Corporate</h3>
                <img src="svg/work.svg" alt="" style="width: 20%;">
                <h4>$49.99/Years</h4>
                <div class="list-price">
                  <p>6 Month Form</p>
                  <hr>
                  <p>Unlimited Form in 1 time</p>
                  <hr>
                  <p>Top 10 + All Registrants Can Be Seen</p>
                  <hr>
                  <p>Image File Scan</p>
                  <hr>
                  <p>PDF File Scan</p>
                  <hr>
                </div>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin-top: 50px;">
      </div>
    </section>

    <section class="about" id="about">
      <div class="container" style="color: black; text-align: center; align-items: center; margin-bottom: 100px;">
        <div class="row">
          <div class="col-sm-6 my-auto">
            <img src="image/undraw_accept_tasks_po1c.svg" alt="" style="width: 80%;">
          </div>
          <div class="col-sm-6" style="text-align: left;">
            <div class="card" style="padding: 60px 20px 50px 20px; border-radius: 10px; margin-top: 20px;">
              <h3><b>Interviewer.com</b></h3>
              <p style="margin-bottom: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aspernatur nulla modi molestiae velit, assumenda asperiores quas ipsa vero eligendi commodi ratione dicta aut, non laborum accusantium minus dolore ducimus!</p>
              <div style="margin-top: 40px;">
                <a href="#service" class="btn-ripple page-scroll" style="text-decoration: none; color: #fff;">Choose Your Plan</a>
              </div>
            </div>
          </div>
        </div>
        <hr style="margin-top: 50px;">
      </div>
    </section>

<!--     <section class="contact pb-50 pt-70" id="contact" style="margin-bottom: 80px;">
      
    </section> -->

    <footer id="contact">
          <div class="my-auto pt-3 pb-3" style="text-align: center; background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);">
            <div class="container" style="padding-bottom: 50px; padding-top: 50px;">
              <div class="row">
                <div class="col-md-4">
                  <div class="subscribe-text" style="margin-top: 5px;">
                    <h2 style="font-size: 36px; font-weight: 500;">Get Update About Us</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="subscribe-wrapper subscribe2-wrapper" style="overflow: hidden;">
                    <div class="subscribe-form">
                      <form action="#">
                        <input placeholder="enter your email address" type="email" style="background: none; border: 1px solid black; border-radius: 30px; display: inline-block;font-size: 20px; font-weight: 600; height: 57px; margin-right: 17px; padding-left: 35px; width: 70%; outline: none;">
                        <button style="border: none; border-radius: 30px; color: #4b5d73; display: inline-block; font-size: 18px; font-weight: 400; line-height: 1; padding: 18px 46px; transition: all 0.3s ease 0s; outline: none;">subscribe <i class="fa fa-long-arrow-right" style="font-size: 18px; padding-left: 5px; "></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <b>Copyright 2020 - <?=date('Y')?> | Interviewer.com</b>
          </div>
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>