<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exchange</title>
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.css">

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <style>
            .error {
                color: #d92550;
                padding-top: 10px;
                padding-left: 10px;
            }
        </style>
    </head>

    <body>
        <div style="height:100px;background-image: url('assets/images/head1234.jpg');background-repeat:repeat;"></div>

        <div class="row">
            <div class="col-md-12" style="margin-top:50px; ">&nbsp;</div>
        </div>

        <div class="row" style="margin-top:50px;">
            <div class="col-md-2">&nbsp;</div>
            <div class="col-md-8 ">
                <div class="text-center text-danger">
                    <h2> Exchange Module </h2>
                </div>
                <h5>Add Your Vehicle Details</h5><br />
            </div>
            <div class="col-md-2"> &nbsp;</div>
        </div>
        <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">
            <div class="row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-4">
                    <div class="col-md-10 mb-4">
                        <label for="inputtype" class="form-label">Vehicle Type</label>
                        <select class="form-control required" style="font-size: 15px;" id="vtype" name="vtype">
                        </select>
                    </div>
                    <div class="col-md-10 mb-4">
                        <label for="inputbrand" class="form-label">Vehicle Brand</label>
                        <select class="form-control required" style="font-size: 15px;" id="vbrand" name="vbrand">
                            <option class="dropdown-item option1" value="">SELECT BRAND</option>
                        </select>
                    </div>
                    <div class="col-10 mb-4">
                        <label for="inputmodel" class="form-label">Vehicle Model</label>
                        <select class="form-control required" style="font-size: 15px;" id="vmodel" name="vmodel">
                            <option class="dropdown-item option1" value="">SELECT MODEL</option>
                        </select>
                    </div>
                    <div class="col-10 mb-4">
                        <label for="inputchnum" class="form-label">Vehicle Chassis Number</label>
                        <input type="text" class="form-control" id="vehichnum" name="vehichnum" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label for="inputmileage" class="form-label">Mileage</label>
                        <input type="number" class="form-control" id="vehimileage" name="vehimileage" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Vehicle Category</label>
                        <select class="form-control required" name="vcategory" id="vcategory">
                            <option value=''>SELECT CATEGOORY</option>
                            <option value="Subcompact">Subcompact</option>
                            <option value="Compact">Compact</option>
                            <option value="Mid-size">Mid-size</option>
                            <option value="Full-size">Full-size</option>
                            <option value="Mini-Van">Mini-Van</option>
                        </select>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Fuel Type</label>
                        <select class="form-control required" name="futype" id="futype">
                            <option value=''>SELECT FUEL TYPE</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                        </select>
                    </div>
                    <div class="col-10 mb-4">
                        <label for="gear">Gear Type:</label>
                        <select name="gear_type" id="gear_type" class="form-control required">
                            <option value="auto">Auto</option>
                            <option value="manual">Manual</option>
                        </select>
                    </div>

                    <div class="col-10 mb-4">
                        <label>Engine Number</label>
                        <input class="form-control" name="eng_no" placeholder="Engine Number" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Color</label>
                        <input type="text" class="form-control" name="colors" placeholder="Colors" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-10 mb-4">
                        <label>No of Doors</label>
                        <input type="number" class="form-control" name="doors" placeholder="No of Doors" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Registration Year</label>
                        <input type="number" class="form-control" name="reg_year" placeholder="Registration Year (YYYY)" value="<?php echo date("Y"); ?>">
                    </div>
                    <div class="col-10 mb-4"><label>No of seats</label>
                        <input type="number" class="form-control" name="num_seats" placeholder="No of seats" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Image (front of Vehicle)</label>
                        <input name="filef" id="filef" type="file" class="form-control-file" accept="image/*" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Image (Back of Vehicle)</label>
                        <input name="fileb" id="fileb" type="file" class="form-control-file" accept="image/*" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Image (Inside Vehicle)</label>
                        <input name="filei" id="filei" type="file" class="form-control-file" accept="image/*" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Tank Capacity</label>
                        <input type="number" step="any" class="form-control" name="tank_cap" placeholder="Tank Capacity(litters)" required>
                    </div>
                    <div class="col-10 mb-4">
                        <label>Buying Price</label>
                        <input type="number" step="any" class="form-control" name="by_price" placeholder="Buying Price" required>
                    </div>
                    <br>
                    <div class="col-md-10">
                        <label>Add Your Value</label>
                        <input type="text" class="form-control" id="vehival" name="vehival" placeholder="Your Value" required>
                    </div>
                    <div class="col-md-10">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:30px;">Add Your Vehicle</button>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>

            </div>
        </form>
        <br>
    </body>

    <!-- Sweet alert msg  -->
    <div class="form-row">
        <div id="msg_div">
            <span id="res_message">
            </span>
        </div>
    </div>
    <!--  -->
    <br>
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // load default vehicle types
            $.ajax({
                url: "<?php echo base_url('exchange/select_type') ?>",
                type: "POST",
                dataType: "json",
                success: function(response) {
                    $("#vtype").html(response.data);

                },
                error: function(response) {
                    alert(JSON.stringify(response));
                }
            });


            $("#vtype").change(function() {
                $.ajax({
                    url: "<?php echo base_url('exchange/load_brands') ?>",
                    type: "POST",
                    data: {
                        type: $(this).val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#vbrand").html(response.data);

                    },
                    error: function(response) {
                        alert(JSON.stringify(response));
                    }
                });

            });


            $("#vbrand").change(function() {
                $.ajax({
                    url: "<?php echo base_url('exchange/load_models') ?>",
                    type: "POST",
                    data: {
                        brand: $(this).val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#vmodel").html(response.data);

                    },
                    error: function(response) {
                        alert(JSON.stringify(response));
                    }
                });

            });



        });
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
                    vtype: {
                        required: true,
                    },
                    vbrand: {
                        required: true
                    },
                    Vmodel: {
                        required: true
                    },
                    Vehichnum: {
                        required: true,
                    },
                    Vehimileage: {
                        required: true
                    },
                    vcategory: {
                        required: true
                    },
                    futype: {
                        required: true
                    },
                    gear_type: {
                        required: true
                    },
                    eng_no: {
                        required: true
                    },
                    colors: {
                        required: true
                    },
                    doors: {
                        required: true,
                    },
                    reg_year: {
                        required: true
                    },
                    num_seats: {
                        required: true
                    },
                    filef: {
                        required: true
                    },
                    fileb: {
                        required: true
                    },
                    filein: {
                        required: true
                    },
                    tank_cap: {
                        required: true
                    },
                    by_price: {
                        required: true
                    },
                    vehival: {
                        required: true
                    },
                },
                messages: {
                    vtype: {
                        required: "Please provide a vehicle type",
                    },
                    vbrand: {
                        required: "Please provide a vehicle brand",
                    },
                    Vmodel: {
                        required: "Please provide a vehicle model",
                    },
                    Vehichnum: {
                        required: "Please provide chassis Number",
                    },
                    Vehimileage: {
                        required: "Please provide a mileage",
                    },
                    vcategory: {
                        required: "Please provide a category",
                    },
                    futype: {
                        required: "Please select a fuel type of your vehicle ",
                    },
                    gear_type: {
                        required: "Please select a gear type of your vehicle ",
                    },
                    eng_no: {
                        required: "Please provide a valid engine Number",
                    },
                    colors: {
                        required: "Please provide a colour",
                    },
                    doors: {
                        required: "Please provide numbers of doors",
                    },
                    reg_year: {
                        required: "Please provide a register year",
                    },
                    num_seats: {
                        required: "Please provide a number of seats",
                    },
                    filef: {
                        required: "Please select a front view image ",
                    },
                    fileb: {
                        required: "Please provide a back view image",
                    },
                    filein: {
                        required: "Please provide a inside of vehicle image",
                    },
                    tank_cap: {
                        required: "Please select a tank capacity",
                    },
                    by_price: {
                        required: "Please provide a buying price",
                    },
                    vehival: {
                        required: "Please provide a add your value",
                    },


                },
                submitHandler: function(form) {
                    var data = new FormData($("#ajax_form")[0]);
                    $.ajax({
                        url: "<?php echo base_url('Exchange/create') ?>",
                        type: "POST",
                        data: data,
                        dataType: "json",
                        processData: false,
                        contentType: false,
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


    </html>
<?php } ?>