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
        <div>
        <div style="height:100px;background-image: url('assets/images/head1234.jpg');background-repeat:repeat;"></div>

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
                <div class="col-md-2"> <img src="<?= base_url(); ?>assets/images/cmpimg.jpg" class="rounded mx-auto d-block" alt="compare image" height="386"></div>
                <div class="col-md-2">
                    <h2 class="banner-txt">COMPARE<br>VEHICLE</h2>
                </div>
                <div class="col-md-2">
                    <div class="card text-center">
                        <img src="<?= base_url(); ?>assets/images/cardesig.png" class="card-img-top" alt="car select">
                        <div class="card-body">
                            <!--dropdown list 1-->
                            <div class="dropdown-center d-grid">
                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="first_type">
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center d-grid">
                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="first_brand">
                                    <option class="dropdown-item option1" value="0" style="color:white;">SELECT BRAND</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center d-grid">

                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="first_model">
                                    <option class="dropdown-item option1" value="0" style="color:white;">SELECT MODEL</option>
                                </select>
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
                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="second_type">
                                <option class="dropdown-item option1" value="0" style="color:white;">SELECT TYPE</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center d-grid">
                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="second_brand">
                                    <option class="dropdown-item option1" value="0" style="color:white;">SELECT BRAND</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center d-grid">
                                <select class="form-select form-select-lg mb-3" style="border:1px solid red;font-size: 15px;" id="second_model">
                                    <option class="dropdown-item option1" value="0" style="color:white;">SELECT MODEL</option>
                                </select>
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
                <button type="button" class="btn btn-danger btn-lg" id="compare">COMPARE</button>
            </div>
            <div class="col-md-4">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-10" id="compare_tbl">

            </div>
            <div class="col-md-1">&nbsp;</div>
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
<!-- jQuery JS -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // load default vehicle types
        $.ajax({
            url: "<?php echo base_url('compare/select_type') ?>",
            type: "POST",
            dataType: "json",
            success: function(response) {
                $("#first_type").html(response.data);

            },
            error: function(response) {
                alert(JSON.stringify(response));
            }
        });

        $("#first_type").change(function() {
            $.ajax({
                url: "<?php echo base_url('compare/load_brands') ?>",
                type: "POST",
                data: {
                    type: $(this).val()
                },
                dataType: "json",
                success: function(response) {
                    $("#first_brand").html(response.data);

                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });

        });


        $("#first_brand").change(function() {
            $.ajax({
                url: "<?php echo base_url('compare/load_models') ?>",
                type: "POST",
                data: {
                    brand: $(this).val()
                },
                dataType: "json",
                success: function(response) {
                    $("#first_model").html(response.data);

                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });

        });

        //second selector
        $("#first_type").change(function() {
        $.ajax({
            url: "<?php echo base_url('compare/select_type2') ?>",
            type: "POST",
            data: {
                    type: $("#first_type").val()
                },
            dataType: "json",
            success: function(response) {
                $("#second_type").html(response.data);

            },
            error: function(response) {
                alert(JSON.stringify(response));
            }
        });
    });
        $("#second_type").change(function() {
            $.ajax({
                url: "<?php echo base_url('compare/load_brands2') ?>",
                type: "POST",
                data: {
                    type: $(this).val()
                },
                dataType: "json",
                success: function(response) {
                    $("#second_brand").html(response.data);

                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });

        });


        $("#second_brand").change(function() {
            $.ajax({
                url: "<?php echo base_url('compare/load_models2') ?>",
                type: "POST",
                data: {
                    brand: $(this).val()
                },
                dataType: "json",
                success: function(response) {
                    $("#second_model").html(response.data);

                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });

        });

        $("#compare").click(function() {
            $.ajax({
                url: "<?php echo base_url('compare/compare_vehicles') ?>",
                type: "POST",
                data: {
                    type1: $("#first_type").val(),
                    brand1: $("#first_brand").val(),
                    model1: $("#first_model").val(),
                    type2: $("#second_type").val(),
                    brand2: $("#second_brand").val(),
                    model2: $("#second_model").val()
                },
                dataType: "json",
                success: function(response) {
                    $("#compare_tbl").html(response.data);
                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });

        });



    });
</script>

<!-- jQuery JS -->
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script>
      $(document).ready(function(){
        $( ".home" ).removeClass( "active");
        $( ".services" ).removeClass( "active");
        $( ".other" ).removeClass( "active");
        $( ".contact" ).removeClass( "active");
        $( ".aboutus" ).removeClass( "active");
        $( ".login" ).removeClass( "active");
        $( ".register" ).removeClass( "active");
        $( ".vehicle" ).addClass( "active");
      });
    </script>