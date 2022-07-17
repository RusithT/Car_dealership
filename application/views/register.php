<?php { ?>
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

        <!-- CSS ============================================ -->

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

        <style type="text/css">
            .error {
                color: #d92550;
                padding-top: 10px;
            }
        </style>

        <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
        <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main Style CSS (Please use minify version for better website load performance) -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/register_css.css">
        <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

    </head>

    <body class="template-color-1">
        <div class="main-wrapper">
            <!-- Begin Uren's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2><br><br>Register Now!</h2>
                    </div>
                </div>
            </div>
            <!-- Uren's Breadcrumb Area End Here -->
            <!-- Begin Uren's Login Register Area -->
            <div class="uren-login-register_area">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-16 col-md-16 col-lg-12 col-xs-24">
                            <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">
                                <!--  <form action="https://formspree.io/f/mlezkyav" method="POST"> -->
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name</label>
                                            <input type="text" name="firsName" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name</label>
                                            <input type="text" name="lastName" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>NIC</label>
                                            <input type="text" name="nic" placeholder="National Identity Card">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>UserName</label>
                                            <input type="text" name="username" placeholder="Example :- johnf">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Birth Date</label>
                                            <input type="date" name="bdate">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email Address*</label>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Gender</label>
                                            <div class="col-md-3">
                                                Male <input type="radio" name="gender" value="male" checked="checked">
                                                Female <input type="radio" name="gender" value="female">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" id="password">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="uren-register_btn" id="send_form">Register</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
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
            </div>
        </div>

        <!-- JS ============================================ -->

        <!-- jQuery JS -->
        <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Modernizer JS -->
        <script src="<?= base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Popper JS -->
        <script src="<?= base_url(); ?>assets/js/vendor/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?= base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>

        <!-- Slick Slider JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/slick.min.js"></script>
        <!-- Barrating JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.barrating.min.js"></script>
        <!-- Counterup JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.counterup.js"></script>
        <!-- Nice Select JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.nice-select.js"></script>
        <!-- Sticky Sidebar JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.sticky-sidebar.js"></script>
        <!-- Jquery-ui JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery-ui.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
        <!-- Lightgallery JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/lightgallery.min.js"></script>
        <!-- Scroll Top JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/scroll-top.js"></script>
        <!-- Theia Sticky Sidebar JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/theia-sticky-sidebar.min.js"></script>
        <!-- Waypoints JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/waypoints.min.js"></script>
        <!-- jQuery Zoom JS -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery.zoom.min.js"></script>

        <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
        <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->
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
                    firsName: {
                        required: true
                    },
                    lastName: {
                        required: true
                    },
                    nic: {
                        required: true,
                    },
                    username: {
                        required: true
                    },
                    bdate: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirmPassword: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                },
                messages: {

                    firsName: {
                        required: "Please provide a valid First Name",
                    },
                    lastName: {
                        required: "Please provide a valid Last Name ",
                    },
                    nic: {
                        required: "Please provide a valid NIC",
                    },
                    username: {
                        required: "Please provide a valid Username ",
                    },
                    bdate: {
                        required: "Please provide a valid Birth Date",
                    },
                    email: {
                        required: "Please select a valid Email ",
                    },
                    address: {
                        required: "Please provide a valid Address",
                    },
                    password: {
                        required: "Please provide a valid Password",
                    },
                    confirmPassword: {
                        required: "Please provide a valid Confirm Password ",
                    },

                },
                submitHandler: function(form) {
                    $('#send_form').html('Sending..');
                    $.ajax({
                        url: "<?php echo base_url('Register/create') ?>",
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

<?php } ?>