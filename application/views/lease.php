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
    <div class="sub-header">
        <div class="container">
            <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">

                <li><a href="#"><i class="fa fa-envelope"></i>broooom.lk@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>0711231545</a></li>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>

    <header class="">
        <div class="main-banner header-text" id="top">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url(); ?>"><h2>BR0000M.LK</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fleet.html">Vehicle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="offers.html">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Other</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.html">About Us</a>
                    <a class="dropdown-item" href="blog.html">Auction</a>
                    <a class="dropdown-item" href="team.html">Team</a>
                    <a class="dropdown-item" href="testimonials.html">Blog</a>
                    <a class="dropdown-item" href="faq.html">FAQ</a>
                    <a class="dropdown-item" href="terms.html">Terms</a>
                    <a class="dropdown-item" href="review.html">Review</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Login</a>
              </li>
              <li class="nac-item">
                <a class="nav-link" href="contact.html">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br/><br/><br/></br>
    <div class="row">
      <div class="col-md-3">
              <div class="service-item">
                <img src="<?= base_url(); ?>assets/images/cal.jpg" alt="">
                <div class="down-content">
                  <h4>Calculate your lease here...</h4>
                  <div style="margin-bottom:10px;">
                    <span>from <sup>RS.</sup>4500 per weekend</span>
                  </div>
                  <p>You can calculate your lease by choosing easy way to do the payment.</p>
                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Try Now</a>
                </div>
              </div>
        </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="<?= base_url(); ?>assets/images/handshake.jpg" alt="">
          <div class="down-content">
            <h4>Want to apply for a lease?</h4>
            <!-- <div style="margin-bottom:20px;">
              <span>from <sup>RS.</sup>4500 per weekend</span>
            </div> -->
            <p>You can apply for a lese from here...</p>
            <a href="<?php echo base_url() ?>terms" class="filled-button">Apply now</a>
          </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="service-item">
          <img src="<?= base_url(); ?>assets/images/handshake.jpg" alt="">
          <div class="down-content">
            <h4>Want to apply for a lease?</h4>
            <!-- <div style="margin-bottom:20px;">
              <span>from <sup>RS.</sup>4500 per weekend</span>
            </div> -->
            <p>You can apply for a lese from here...</p>
            <a href="<?php echo base_url() ?>apply_lease" class="filled-button">Apply now</a>
          </div>
        </div>
      </div>
    </div>   



<!-- Calculator -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 100px;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LEASE CALCULATOR</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" id="contact">
              <label>Select Vehicle Type</label><br>
              <select name="vehicle_type" id="vehicle_type" class="col-md-8">
                <option id="car">Car</option>
                <option id="van">Van</option>
                <option id="truck">Truck</option>
                <option id="suv">SUV</option>
              </select><br><br>

              <input type="radio" id="condition" name="condition">Used/Registered</input><br>
              <input type="radio" id="condition" name="condition">Recondition/Brand New</input><br><br>

              <label>Lease Amount</label><br>
              <input type="number" id="lease_amount" name="lease_amount" class="col-md-8" value="Put your lease amount here" min="0"><br><br>

              <label>Lease Period</label><br>
              <select class="col-md-8" name="lease_period" id="lease_period">
                <option id="m6">6 Month</option>
                <option id="m12">12 Month</option>
                <option id="m18">18 Month</option>
                <option id="m24">24 Month</option>
                <option id="m30">30 Month</option>
                <option id="m36">36 Month</option>
                <option id="m42">42 Month</option>
                <option id="m48">48 Month</option>
                <option id="m54">54 Month</option>
                <option id="m60">60 Month</option>
                <option id="m66">66 Month</option>
                <option id="m72">72 Month</option>
              </select>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
            <button type="button" class="btn btn-primary">Calculate</button>
          </div>
        </div>
      </div>
    </div>




</body>
</html>