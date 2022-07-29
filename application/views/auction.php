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
        </style>

    </head>

    <body>
    <div style="height:100px;background-image: url('assets/images/head1234.jpg');background-repeat:repeat;"></div>
        <br /></br><br /><br />
        <?php foreach ($bid_vehicle as $vehicle) { ?> 
        <div class="header-text">
        
            <div class="row">
                <div class="col-md-6 ">
                    <figure>

                        <img src="<?= $vehicle['image'] ?>" alt="car" width="1000px" style="width:100%">
                        <br><br>



                    </figure>
                </div>
                <br><br>
                <div>
                </div>
                
                <div class="col-md-6 ">

                    <h2><small> VEHICLE INFORMATION</small>
                    </h2>
                    <br />

                    <ul class="list-group list-group-flush">
                       
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>
                                    <strong class="pull-right"><?= $vehicle['type'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>
                                    <strong class="pull-right"><?= $vehicle['model'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Brand</span>
                                    <strong class="pull-right"><?= $vehicle['brand'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mileage</span>

                                    <strong class="pull-right"><?= $vehicle['mileage'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right"><?= $vehicle['fuel_type'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Engine No</span>
                                    <strong class="pull-right"><?= $vehicle['engine_no'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Chesis No</span>
                                    <strong class="pull-right"><?= $vehicle['chesis_no'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Registerd Year</span>
                                    <strong class="pull-right"><?= $vehicle['registration_year'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Color</span>

                                    <strong class="pull-right"><?= $vehicle['color'] ?></strong>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Category</span>

                                    <strong class="pull-right"><?= $vehicle['category'] ?></strong>
                                </div>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
            </div>
            <div class="col-md-6 ">
                <div>
                    <h2>
                        <small> VEHICLE DESCRIPTION</small>
                    </h2>
                </div>
                <br />

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left"><?= $vehicle['doors'] ?> Door</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left"><?= $vehicle['seats'] ?> Seats</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left"> <?= $vehicle['tank'] ?> Tank</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left"><?= $vehicle['gear'] ?> Gear</span>
                        </div>
                    </li>

                    <!-- <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">New HU and AU</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Xenon Headlights</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Colour Coded Bumpers</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Immobiliser</span>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="clearfix">
                            <span class="pull-left">Central Locking - Remote</span>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        </div>
        

        <div class="row">
            <div class="col-md-6 ">
            </div>
            <div class="col-md-6 ">
                <div class="form-group">
                    <br>
                    <a href="<?php base_url(); ?>BidNow"><button type="button text-center" class="btn btn-primary btn-lg btn-block">Bid Now</button></a>
                    <br>
                </div>
            </div>
        </div>
        <?php } ?>
    </body>

    </html>
<?php } ?>

<!-- jQuery JS -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
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