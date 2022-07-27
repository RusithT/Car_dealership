<?php { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BROOOOM.LK</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">

              <li><a href="#"><i class="fa fa-envelope"></i>broooom.lk@gmail.com</a></li>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com/BROOOOMlk-103707022400276"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/broo_oom"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="">
            <h2>BR0000M.LK</h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item home active">
                <a class="nav-link" href="<?= base_url(); ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item vehicle dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vehicle</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url(); ?>vehicle">Vehicle</a>
                  <a class="dropdown-item" href="<?= base_url(); ?>compare">Vehicle Compare</a>
                </div>
              </li>
              <li class="nav-item services">
                <a class="nav-link" href="offers.html">Services</a>
              </li>
              <li class="nav-item other dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Other</a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url(); ?>auction">Auction</a>
                  <a class="dropdown-item" href="<?= base_url(); ?>lease">Lease</a>
                  <a class="dropdown-item" href="team.html">Team</a>
                  <a class="dropdown-item" href="testimonials.html">Blog</a>
                  <a class="dropdown-item" href="faq.html">FAQ</a>
                  <a class="dropdown-item" href="terms.html">Terms</a>
                  <a class="dropdown-item" href="review.html">Review</a>
                </div>
              </li>
              <li class="nav-item contact">
                <a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
              </li>
              <li class="nav-item aboutus">
                <a class="nav-link" href="<?= base_url(); ?>aboutus">About Us</a>
              </li>
              <li class="nav-item login">
                <a class="nav-link" href="<?= base_url(); ?>login">Login</a>
              </li>
              <li class="nac-item register">
                <a class="nav-link" href="<?= base_url(); ?>register">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </body>

  </html>
<?php } ?>