<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <!-- Header -->
  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <span>feel free to send us a message now!</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Give us a call anytime you need <br> our service</p>
            <a href="#">+94 7* 123 4567</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>Email</h4>
            <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
            <a href="mailto:broooom.lk@gmail.com?Subject=Some%20subject">broooom.lk@gmail.com</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Location</h4>
            <p>Kirulapone, Colombo 00500 <br>Sri Lanka</p>
            <a href="https://goo.gl/maps/drjYJTHKX2osRj3J9">View on Google Maps</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Send us a <em>message</em></h2>
            <span>Suspendisse a ante in neque iaculis lacinia</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Full Name" >
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" >
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" >
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" ></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
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
  <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
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
          fullname: {
            required: true
          },
          email: {
            required: true
          },
          subject: {
            required: true
          },
          message: {
            required: true
          }

        },
        messages: {

          fullname: {
            required: "Please provide a valid Full Name",
          },
          email: {
            required: "Please select a valid Email ",
          },
          subject: {
            required: "Please provide a valid subject",
          },
          message: {
            required: "Please provide a valid message",
          }


        },
        submitHandler: function(form) {
          $('#send_form').html('Sending..');
          $.ajax({
            url: "<?php echo base_url('Contact/create') ?>",
            type: "POST",
            data: $('#ajax_form').serialize(),
            dataType: "json",
            success: function(response) {
              if (response.success) {

                $('#send_form').html('SAVE');
                $('#res_message').html(response.msg);
                $('#res_message').show();
                var forms = document.getElementsByClassName('needs-validation');
                form.classList.remove('was-validated');

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


  <div id="map">
    <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.337893687632!2d79.87054591486937!3d6.880483273720133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a367c0cc0e9%3A0xfb690e92b68a5eec!2sKirulapone%2C%20Colombo%2000500!5e0!3m2!1sen!2slk!4v1654839999582!5m2!1sen!2slk" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <!-- Footer Starts Here -->
</body>

</html>


<!-- jQuery JS -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script>
  $(document).ready(function() {
    $(".home").removeClass("active");
    $(".services").removeClass("active");
    $(".other").removeClass("active");
    $(".contact").addClass("active");
    $(".aboutus").removeClass("active");
    $(".login").removeClass("active");
    $(".register").removeClass("active");
    $(".vehicle").removeClass("active");
  });
</script>