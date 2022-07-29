<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Registeration</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

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

        <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
        <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main Style CSS (Please use minify version for better website load performance) -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

        <style>
            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }

            .error {
                color: #d92550;
                padding-top: 10px;
                padding-left: 10px;
            }
        </style>

    </head>

    <body>
    <div style="height:100px;background-image: url('assets/images/head1234.jpg');background-repeat:repeat;"></div>
        <br><br><br><br>
        <?php foreach ($bid_vehicle as $vehicle) { ?>
            <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ">


                            <figure>
                                <center>
                                    <h2> <strong class="text-primary"><?= $vehicle['brand'] . ' - ' . $vehicle['model'] ?></strong></h2>
                                </center> <br>
                                <img src="<?= $vehicle['image'] ?>" alt="car" width="1000px" style="width:100%">
                                <br><br>



                            </figure>

                        </div>

                        <div class="col-md-6 ">
                            <br><br><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Starting Bid</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"><input type="text" name="start_bid" size="50" value="2600000 LKR" title="2600000 LKR" readonly style="border: none;font-weight:bold"></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Ending Time</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Ends in 1 hour</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Shipping Costs</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Free</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Ships To</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Sri Lanka</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Item Location</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Katunayake, Sri Lanka.</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">History</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"><a href="<?php echo base_url() ?>bidders"> Veiw bidders list </a></th>


                                    </tr>
                                    <tr>
                                        <th scope="col">Maximun Bid</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"><input type="number" placeholder="Value more than 10000 LKR" size="100" name="bid_amount"></th>
                                    </tr>
                                    <tr>
                                        <th scope="col"><input type="hidden" name="vehicle_id" id="vehicle_id" value="<?= $vehicle['vehicle_id'] ?>"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">
                                            <div class="form-group">
                                                <br>
                                                <center> <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Confirm Bid</button></center>
                                                <br>
                                            </div>
                                        </th>
                                    </tr>



                                </thead>

                            </table>


                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>

        <!-- Sweet alert msg  -->
        <div class="form-row">
            <div id="msg_div">
                <span id="res_message">
                </span>
            </div>
        </div>

    </body>

    </html>
<?php } ?>

<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<script>
    $(document).ready(function() {
        $(".home").removeClass("active");
        $(".services").removeClass("active");
        $(".other").addClass("active");
        $(".contact").removeClass("active");
        $(".aboutus").removeClass("active");
        $(".login").removeClass("active");
        $(".register").removeClass("active");
        $(".vehicle").removeClass("active");
    });
</script>

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

    $.validator.addMethod('minStrict', function(value, el, param) {

        return value > param;
    });

    $.validator.messages.minStrict = 'Value must be greater than 10000';

    if ($("#ajax_form").length > 0) {
        $("#ajax_form").validate({

            rules: {
                bid_amount: {
                    required: true,
                    minStrict: 10000
                }
            },
            messages: {

                bid_amount: {
                    required: "Please provide a valid Bid Amount",
                }

            },
            submitHandler: function(form) {
                $.ajax({
                    url: "<?php echo base_url('BidNow/create') ?>",
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