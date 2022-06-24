<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <title>compair vehicles</title>
        <style>
            .banner-txt {
                position: absolute;
                color: black;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 126px;
                margin-left: 22px;
                text-transform: uppercase;
            }
        </style>
    </head>

    <body>
        <!-- Header -->
        <div style="background-image: url('assets/images/head1234.jpg');background-size: 1349px 80px;background-repeat: no-repeat;">
            <div class="header-text" );>
                <div class="container-fluid"></div>
            </div>
            <div class="row">
                <div class="col-md-12">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12" style="height:100px;">&nbsp;</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"> <img src="<?= base_url(); ?>assets/images/cmpimg.jpg" class="rounded mx-auto d-block" alt="compare image" height="320"></div>
                <div class="col-md-2">
                    <h2 class="banner-txt">COMPARE<br>VEHICLE</h2>
                </div>
                <div class="col-md-2">
                    <div class="card text-center">
                        <img src="<?= base_url(); ?>assets/images/cardesig.png" class="card-img-top" alt="car select">
                        <div class="card-body">
                            <!--dropdown list 1-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT TYPE
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT BRAND
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT MODEL
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-2">
                    <div class="card text-center">
                        <img src="<?= base_url(); ?>assets/images/cardesig.png" class="card-img-top" alt="car select">
                        <div class="card-body">
                            <!--dropdown list 1-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT TYPE
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT BRAND
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center d-grid">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT MODEL
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">&nbsp;</div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">&nbsp;</div>
            <div class="col-md-2 d-grid" style="text-align:center;">
                <button type="button" class="btn btn-danger btn-lg">COMPARE</button>
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-12" style="height:10px;">&nbsp;</div>
        </div>
        </div>
        </div>
    </body>

    </html>
<?php } ?>