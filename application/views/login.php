<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/tstyle.css?<?= rand();?>">

  <title>Login</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-1" style="background-image: url('assets/images/tcars.jpg'); opacity: 0.5;"><br><br><br><br><br><br><br>
    <h1><b>BRooooM.LK</b></h1><br>
    <p style="color:red;"font-family:courier><b> Great Prices. Great Vehicles. Great Service</b></p>
    </div>

    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h5><b>Login with your credentials</b></h5>
            </div>
            <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">

              <div class="form-group first">
                <label>E-mail</label>
                <input type="text" class="form-control" id="e-mail" name="email">
              </div>

              <div class="form-group last mb-3">
                <label>Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption"><b>Remember me</b></span></span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label> -->
                <!-- <span class="ml-auto"><a href="#" class="forgot-pass"><b>Forgot Password</b></a></span> -->
              </div>

              <input type="submit" value="LOGIN" id="login" class="btn btn-outline-danger btn-lg btn-block">

              <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

              <div class="social-login">
                <a href="https://www.facebook.com/BROOOOMlk-103707022400276" class="facebook btn d-flex justify-content-left align-items-center">
                  <span class="icon-facebook mr-3"></span> Continue with Facebook
                </a>
                <a href="<?= base_url(); ?>" class="google btn d-flex justify-content-left align-items-center">
                  <span class="icon-google mr-3"></span> Continue with Google
                </a>
                <a href="https://www.instagram.com/" class="Instagram btn d-flex justify-content-left align-items-center">
                  <span class="icon-instagram mr-3"></span> Continue with Instagram
                </a>
              </div><br>
              <div>
                <p><b>Don't have any account?</b> <a href="<?= base_url(); ?>register"><b>Register Here</b></a>.</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Sweet alert msg  -->
    <div class="form-row">
      <div id="msg_div">
        <span id="res_message">
        </span>
      </div>
    </div>

    <!--  -->

  </div>



  <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/tmain.js"></script>
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">
  // just for the demos, avoids form submit
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            //alert('fail');
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


  if ($("#ajax_form").length > 0) {
    $("#ajax_form").validate({

      rules: {

        email: {
          required: true
        },
        password: {
          required: true,
        }

      },
      messages: {
        email: {
          required: "Please select a valid Email ",
        },
        password: {
          required: "Please provide a valid Password",
        }

      },
      submitHandler: function(form) {
        $.ajax({
          url: "<?php echo base_url('login/verifylogin') ?>",
          type: "POST",
          data: $('#ajax_form').serialize(),
          dataType: "json",
          
          success: function(response) {
            if (response.success) {

              $('#login').html('Success');
              location.href = '';

            } else {
              $('#send_form').html('SAVE');
              $('#res_message').html(response.msg);
              $('#res_message').show();

            }
          },
          error: function(response) {
            alert(JSON.stringify(response));
          }
        });
      }
    });
  }
</script>


</html>