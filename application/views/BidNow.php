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
        <link rel="shortcut icon" type="image/x-icon" href="../assets1/images/favicon.ico">

        <!-- CSS
	============================================ -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/assets1/css/vendor/bootstrap.min.css">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="../assets/assets1/css/vendor/font-awesome.css">
        <!-- Fontawesome Star -->
        <link rel="stylesheet" href="../assets/assets1/css/vendor/fontawesome-stars.css">
        <!-- Ion Icon -->
        <link rel="stylesheet" href="../assets/assets1/css/vendor/ion-fonts.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" href="../assets/assets1/css/plugins/slick.css">
        <!-- Animation -->
        <link rel="stylesheet" href="../assets/assets1/css/plugins/animate.css">
        <!-- jQuery Ui -->
        <link rel="stylesheet" href="../assets/assets1/css/plugins/jquery-ui.min.css">
        <!-- Lightgallery -->
        <link rel="stylesheet" href="../assets/assets1/css/plugins/lightgallery.min.css">
        <!-- Nice Select -->
        <link rel="stylesheet" href="../assets/assets1/css/plugins/nice-select.css">

        <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
        <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main Style CSS (Please use minify version for better website load performance) -->
        <link rel="stylesheet" href="../assets/assets1/css/style.css">
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
        <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">


                    <figure>
                        <center>
                            <h2> <strong class="text-primary">Audi Q5</strong></h2>
                        </center> <br>
                        <img src="../assets/images/car.jpg" alt="car" width="1000px" style="width:100%">
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
                                <th scope="col">500 LKR</th>
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
                                <th scope="col"><a href="<?php echo base_url() ?>index.php/bidders" > Veiw bidders list </a></th>
                                    
                                
                            </tr>
                            <tr>
                                <th scope="col">Maximun Bid</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"><input type="number" placeholder="Value more than 500 LKR" size="50"></th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="form-group">
                                        <br>
                                        <center> <a href="<?php echo base_url() ?>index.php/Login" onclick="document.location='default.asp'"><button type="button" class="btn btn-primary btn-lg btn-block">Confirm Bid</button></a> </center>
                                        <br>
                                    </div>
                                </th>
                            </tr>



                        </thead>

                    </table>


                </div>
            </div>
        </div>

    </body>

    </html>
<?php } ?>