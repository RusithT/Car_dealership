<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registeration</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins/nice-select.css">

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/register_css.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->


</head>

<body>
    <div style="height:100px;background-image: url('assets/images/head1234.jpg');background-repeat:repeat;"></div>
    <br /></br>
    <div class="col-sm-16 col-md-16 col-lg-12 col-xs-24">
        <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">
            <div class="login-form">
                <h4 class="login-title">Requirments</h4>
                <div class="row">
                    <div class="col-md-12">
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name" name="fullname">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Name wih initials</label>
                        <input type="text" placeholder="with initials" name="nameinitials">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC</label>
                        <input type="text" placeholder="National Identity Card" name="nic">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(front)</label>
                        <input type="file" name="nicimg1">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(back)</label>
                        <input type="file" name="nicimg2">
                    </div>

                    <div class="col-md-6 col-12 mb--20">
                        <label>Birth Date</label>
                        <input type="date" name="bdate">
                    </div>

                    <div class="col-md-6 col-12 mb--20">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address" name="email">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="address" placeholder="Address" name="address">
                    </div>
                    <div class="col-md-12">
                        <label>Gender</label>
                        <div class="col-md-4">
                            Male<input type="radio" name="gender" value="male">
                            Female<input type="radio" name="gender" value="female">
                        </div>
                    </div>

                    <!-- Guaranter 1 -->
                    <div class="col-md-12">
                        <label>Full Name(guaranter 1)</label>
                        <input type="text" placeholder="Full Name" name="guaranter1">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Name wih initials</label>
                        <input type="text" placeholder="with initials" name="guarantname">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC</label>
                        <input type="text" placeholder="National Identity Card" name="gnic">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(front)</label>
                        <input type="file" name="gnicf">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(back)</label>
                        <input type="file" name="gnicb">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Birth Date</label>
                        <input type="date" name="gbdate">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address" name="gemail">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="address" placeholder="Address" name="gaddress">
                    </div>
                    <div class="col-md-12">
                        <label>Gender</label>
                        <div class="col-md-4">
                            Male<input type="radio" name="genderg" value="male">
                            Female<input type="radio" name="genderg" value="female">
                        </div>
                    </div>

                    <!--Guarantor 2-->
                    <div class="col-md-12">
                        <label>Full Name(guaranter 2)</label>
                        <input type="text" placeholder="Full Name" name="gfname2">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Name wih initials</label>
                        <input type="text" placeholder="with initials" name="gnamein">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC</label>
                        <input type="text" placeholder="National Identity Card" name="gnic2">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(front)</label>
                        <input type="file" name="gnicf2">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(back)</label>
                        <input type="file" name="gnicb2">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Birth Date</label>
                        <input type="date" name="gbdate2">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address" name="gemail2">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="address" placeholder="Address" name="gaddress2">
                    </div>
                    <div class="col-md-12">
                        <label>Gender</label>
                        <div class="col-md-4">
                            Male<input type="radio" name="genderg2" value="male">
                            Female<input type="radio" name="genderg2" value="female">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="submit" class="uren-register_btn" id="send_form">Register</button>
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
            </div>
        </form>
    </div>
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>

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
                    nameinitials: {
                        required: true
                    },
                    nic: {
                        required: true,
                    },
                    nicimg1: {
                        required: true
                    },
                    nicimg2: {
                        required: true
                    },
                    bdate: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    address: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    // Guarantor 1
                    guaranter1: {
                        required: true
                    },
                    guarantname: {
                        required: true
                    },
                    gnic: {
                        required: true
                    },
                    gnicf: {
                        required: true
                    },
                    gnicb: {
                        required: true
                    },
                    gbdate: {
                        required: true
                    },
                    gemail: {
                        required: true
                    },
                    gadress: {
                        required: true,
                    },
                    genderg: {
                        required: true,
                    },
                    // Guarantor 2
                    gfname2: {
                        required: true
                    },
                    gnamein: {
                        required: true
                    },
                    gnic2: {
                        required: true,
                    },
                    gnicf2: {
                        required: true
                    },
                    gnicb2: {
                        required: true
                    },
                    gbdate2: {
                        required: true
                    },
                    gemail2: {
                        required: true
                    },
                    gaddress2: {
                        required: true,
                    },
                    genderg2: {
                        required: true,
                    },
                },
                messages: {

                    fullname: {
                        required: "Please provide a Full Name",
                    },
                    nameinitials: {
                        required: "Please provide a Name with initials",
                    },
                    nic: {
                        required: "Please provide a valid NIC",
                    },
                    nicimg1: {
                        required: "Please provide a valid NIC Image ",
                    },
                    nicimg2: {
                        required: "Please provide a valid NIC Image 2",
                    },
                    bdate: {
                        required: "Please provide a valid Birthday",
                    },
                    email: {
                        required: "Please select a valid Email ",
                    },
                    address: {
                        required: "Please provide a valid Address",
                    },
                    gender: {
                        required: "Please provide a Gender ",
                    },
                    // Guarantor 1
                    guaranter1: {
                        required: "Please provide a valid First Name",
                    },
                    guarantname: {
                        required: "Please provide a valid Name with initials",
                    },
                    gnic: {
                        required: "Please provide a valid NIC",
                    },
                    gnicf: {
                        required: "Please provide a valid NIC Front Image ",
                    },
                    gnicb: {
                        required: "Please provide a valid NIC Back Image",
                    },
                    gbdate: {
                        required: "Please select a valid Birthday ",
                    },
                    gemail: {
                        required: "Please provide a valid Email",
                    },
                    gadress: {
                        required: "Please provide a valid Address",
                    },
                    genderg: {
                        required: "Please provide a Gender",
                    },
                    // Guarantor 2
                    gfname2: {
                        required: "Please provide a valid First Name",
                    },
                    gnamein: {
                        required: "Please provide a valid Name with initials",
                    },
                    gnic2: {
                        required: "Please provide a valid NIC",
                    },
                    gnicf2: {
                        required: "Please provide a valid NIC Front Image",
                    },
                    gnicb2: {
                        required: "Please provide a valid NIC Back Image",
                    },
                    gbdate2: {
                        required: "Please select a valid Birthday",
                    },
                    gemail2: {
                        required: "Please provide a valid Email",
                    },
                    gaddress2: {
                        required: "Please provide a valid Addrss",
                    },
                    genderg2: {
                        required: "Please provide a Gender ",
                    },

                },
                submitHandler: function(form) {
                    $('#send_form').html('Sending..');
                    $.ajax({
                        url: "<?php echo base_url('Individual_lease/create') ?>",
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
</body>

</html>