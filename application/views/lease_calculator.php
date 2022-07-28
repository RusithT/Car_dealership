<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>


    <body>
        <!-- Calculator -->
        <div class="row">
            <div class="row">
                <div class="col-md-12" style="height:100px;">&nbsp;</div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12 text-center"><h4 class="text-center text-danger" style="margin-bottom:20px;">LEASE CALCULATOR</h4></div>
        </div>
        <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-2 text-center"><h5 class="text-center text-primary" style="margin-bottom:20px;">Item Details</h5></div>
        <div class="col-md-4 text-center"><h5 class="text-center text-primary" style="margin-bottom:20px;">Lease Details</h5></div>
        <div class="col-md-5">&nbsp;</div>
        </div>
        <div class="row">
            
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-2">
                <form action="#" id="contact">
                    <!--dropdown list 1-->
                    <div class="dropdown-center d-grid">
                        <label>Vehicle Type</label>
                        <select class="form-select form-select-lg mb-3 rate_cal" style="font-size: 15px;" id="vtype">
                        </select>
                    </div>
                    <!--dropdown list 2-->
                    <div class="dropdown-center d-grid">
                        <label>Select Brand</label>
                        <select class="form-select form-select-lg mb-3 rate_cal" style="font-size: 15px;" id="vbrand">
                            <option class="dropdown-item option1" value="0" style="color:white;">SELECT BRAND</option>
                        </select>
                    </div>
                    <!--dropdown list 3-->
                    <div class="dropdown-center d-grid">
                        <label>Select Model</label>
                        <select class="form-select form-select-lg mb-3 rate_cal" style="font-size: 15px;" id="vmodel">
                            <option class="dropdown-item option1" value="0" style="color:white;">SELECT MODEL</option>
                        </select>
                    </div>
                    <!--dropdown list 4-->
                    <div class="dropdown-center d-grid">
                        <label>Select Chassis Number</label>
                        <select class="form-select form-select-lg mb-3 " style="font-size: 15px;" id="grade">
                            <option class="dropdown-item option1" value="0" style="color:white;">CHASSIS NUMBER</option>
                        </select>
                    </div>
            </div>
            <div class="col-md-2">
                <div class="dropdown-center d-grid">
                    <label>Condition</label>
                    <select class="form-select form-select-lg mb-3 rate_cal" style="font-size: 15px;" id="condition">
                        <option class="dropdown-item option1" value="5">Please Select</option>
                        <option class="dropdown-item option1" value="1">Brand New</option>
                        <option class="dropdown-item option1" value="0">Recondition</option>

                    </select>
                </div>
                <div class="dropdown-center d-grid">
                    <label>Register Status</label>
                    <select class="form-select form-select-lg mb-3 rate_cal" style="font-size: 15px;" id="regstatus">
                        <option class="dropdown-item option1" value="5">Please Select</option>
                        <option class="dropdown-item option1" value="1">Register</option>
                        <option class="dropdown-item option1" value="0">Unregister</option>

                    </select>
                </div>
                <div>
                    <label for="exampleFormControlInput1" class="form-label">Rate</label>
                    <input type="text" id="rate" name="rate" class="form-control" value="" readonly>
                </div>
                <div class="">
                    <label>Full Amount Rs.</label>
                    <input type="text" id="famount" name="famount" class="form-control" value="" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="">
                    <label>Down Payment Rs.</label>
                    <input type="number" id="dwnpay" name="dwnpay" class="form-control">
                </div>
                <div class="">
                    <label>Balance Rs.</label>
                    <input type="number" id="dbalance" name="dbalance" class="form-control" value="" readonly>
                </div>
                <div>
                    <label>Lease Period</label>
                    <select class="form-control" name="lease_period" id="lease_period">
                        <option value="6">6 Month</option>
                        <option value="12">12 Month</option>
                        <option value="18">18 Month</option>
                        <option value="24">24 Month</option>
                        <option value="30">30 Month</option>
                        <option value="36">36 Month</option>
                        <option value="42">42 Month</option>
                        <option value="48">48 Month</option>
                        <option value="54">54 Month</option>
                        <option value="60">60 Month</option>
                        <option value="66">66 Month</option>
                        <option value="72">72 Month</option>
                    </select>
                </div>
                <div class="">
                    <label><b>Installment Rs.</b></label>
                    <input type="number" id="installments" name="installments" class="form-control" value="">
                    <br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="button" class="btn btn-primary" value="calculate" id="calculate"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-3" id="compare_tbl"></div>
            <div class="col-md-1">&nbsp;</div>

    </body>

    </html>

    <!-- jQuery JS -->
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // load default vehicle types
            $.ajax({
                url: "<?php echo base_url('lease_calculator/select_type') ?>",
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
                    url: "<?php echo base_url('lease_calculator/load_brands') ?>",
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
                    url: "<?php echo base_url('lease_calculator/load_models') ?>",
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
            $("#vmodel").change(function() {
                $.ajax({
                    url: "<?php echo base_url('lease_calculator/item') ?>",
                    type: "POST",
                    data: {
                        type1: $("#vtype").val(),
                        brand1: $("#vbrand").val(),
                        model1: $("#vmodel").val(),
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#grade").html(response.data);
                    },
                    error: function(response) {
                        alert(JSON.stringify(response));
                    }
                });

            });
            $("#grade").change(function() {
                $.ajax({
                    url: "<?php echo base_url('lease_calculator/lease_vehicles') ?>",
                    type: "POST",
                    data: {
                        type1: $("#vtype").val(),
                        brand1: $("#vbrand").val(),
                        model1: $("#vmodel").val(),
                        chesis_no: $("#grade").val(),


                    },
                    dataType: "json",
                    success: function(response) {
                        $("#compare_tbl").html(response.data);
                        $("#famount").val(response.full_amo);
                    },
                    error: function(response) {
                        $("#compare_tbl").html('');

                    }
                });
            });



            $(".rate_cal").change(function() {
                $.ajax({
                    url: "<?php echo base_url('lease_calculator/lease_rate') ?>",
                    type: "POST",
                    data: {
                        type1: $("#vtype").val(),
                        brand1: $("#vbrand").val(),
                        model1: $("#vmodel").val(),
                        condition: $("#condition").val(),
                        status: $("#regstatus").val(),


                    },
                    dataType: "json",
                    success: function(response) {
                        $("#rate").val(response.data + ' %');
                    },
                    error: function(response) {
                        $("#rate").val('0');
                    }
                });
            });


            $("#dwnpay").keyup(function() {
                var famount = parseFloat($("#famount").val());
                var dwnpay = parseFloat($(this).val());
                var balance = 0;

                balance = famount - dwnpay;

                $("#dbalance").val(balance);

            });

            $("#calculate").click(function() {

                if ($("#dbalance").val() == "" || $("#dbalance").val() == 0) {
                    alert("Plaase Fill Form Correctly");
                } else {
                    var dbalance = parseFloat($("#dbalance").val());
                    var lease_period = parseFloat($("#lease_period").val());
                    var rate = parseFloat($("#rate").val());
                    var installment = 0;
                    var rateWBalnce = dbalance * (rate / 100);
                    installment = (dbalance + rateWBalnce) / lease_period;


                    $("#installments").val(installment);
                }
            });
        });
    </script>
    </body>
<?php } ?>