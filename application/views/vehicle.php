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
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
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
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <h2>BR0000M.LK</h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown active">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vehicle</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url() ?>vehicle">Vehicle</a>
                  <a class="dropdown-item" href="<?php echo base_url() ?>compare">Vehicle Compare</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="offers.html">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Other</a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.html">About Us</a>
                  <a class="dropdown-item" href="blog.html">Auction</a>
                  <a class="dropdown-item" href="<?php echo base_url() ?>index.php/lease">Lease</a>
                  <a class="dropdown-item" href="team.html">Team</a>
                  <a class="dropdown-item" href="testimonials.html">Blog</a>
                  <a class="dropdown-item" href="faq.html">FAQ</a>
                  <a class="dropdown-item" href="terms.html">Terms</a>
                  <a class="dropdown-item" href="review.html">Review</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Login</a>
              </li>
              <li class="nac-item">
                <a class="nav-link" href="<?php echo base_url() ?>register">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Vehicles</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-1-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-2-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-3-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-4-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-5-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="<?= base_url(); ?>assets/images/product-6-720x480.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>$</sup>120 per weekend</span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="transmission"></i> A
                </p>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Book Now</a>
              </div>
            </div>

            <br>
          </div>
        </div>

        <br>
        <br>

        <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" id="contact">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up location" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return location" required="">
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return date/time" required="">
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">
                </fieldset>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter email address" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter phone" required="">
                    </fieldset>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <script src="<?= base_url(); ?>assets/js/owl.js"></script>
    <script src="<?= base_url(); ?>assets/js/slick.js"></script>
    <script src="<?= base_url(); ?>assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ''; // with more chance of typos
          t.style.color = '#fff';
        }
      }
    </script>

  </body>

  </html>
<?php } ?>