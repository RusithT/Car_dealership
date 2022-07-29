<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <style>
            .promo1 {
                height: 180px;
                background-color: #2d2d2d;
            }

            ul.a {
                list-style-type: circle;
            }

            .container {
                position: relative;
                font-family: Arial;
                padding: 0px;
                /* height: 440px; */
            }

            .top-left {
                position: absolute;
                margin-left: 60px;
                margin-top: 30px;
                color: antiquewhite;
            }

            .centered {
                position: absolute;
                margin-top: 60px;
                left: 40%;
                color: antiquewhite;
                font-size: 18px;
            }

            .top-right {
                position: absolute;
                margin-top: 60px;
                right: 16px;
                font-size: 18px;
                color: antiquewhite;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php base_url(); ?>assets/images/service2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php base_url(); ?>assets/images/service3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row promo1">
                <div class="col-md-4">
                    <p style="margin-left:60px;margin-top:30px;color:ghostwhite;font-size:40px;">After Hours</p>
                    <p style="margin-left:120px;margin-top:20px;color:yellow;font-size:40px;">Drop-Off</p>
                </div>
                <div class="col-md-4">
                    <p style="color:ghostwhite;margin-top:50px;font-size:20px;">We realize that you lead a busy life, so we have made it easy for you to drop off your vehicle 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="<?php base_url(); ?>contact"><button type="button" class="btn btn-warning btn-lg" style="margin-top:56px;margin-left:170px;">Get Estimate</button></a>
                </div>
            </div>
            <div class="row" style="margin-top:120px;">
                <h1 class="text-center" style="color:#2d2d2d;"><b>What We Do</b></h1>
                <h5 class="text-center" style="color:#2d2d2d;">We offer full service auto repair & maintenance</h5>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg1.jpg">
                </div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg2.jpg">
                </div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg3.jpg">
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg4.jpg">
                </div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg5.jpg">
                </div>
                <div class="col-md-3">
                    <img src="<?php base_url(); ?>assets/images/servicebg6.jpg">
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <div class="row promo1" style="margin-top:120px;">
                <div class="col-md-4">
                    <p style="margin-left:60px;margin-top:30px;color:ghostwhite;font-size:40px;">AUTOMOBILE</p>
                    <p style="margin-left:120px;margin-top:20px;color:yellow;font-size:40px;">SPARE PARTS</p>
                </div>
                <div class="col-md-4">
                    <p style="color:ghostwhite;margin-top:50px;font-size:20px;">Find the Right Parts Faster</p>
                </div>
                <div class="col-md-4">
                    <a href="<?php base_url(); ?>parts"><button type="button" class="btn btn-warning btn-lg" style="margin-top:56px;margin-left:170px;">Get Spare Parts</button></a>
                </div>
            </div>
            <div class="row" style="margin-top:100px;">
                <h1 class="text-center" style="color:#2d2d2d;"><b>100% Result Guarantee</b></h1>
                <h5 class="text-center" style="color:#2d2d2d;">We offer full service auto repair & maintenance</h5>
            </div>
            <div class="row" style="margin-top:40px;margin-bottom:100px;">
                <div class="col-md-4">
                    <h3 style="margin-left:60px;margin-top:30px;color:#2d2d2d;">All Vehicle Makes</h3>
                    <p class="fs-5" style="margin-left:60px;margin-top:30px;color:#2d2d2d;">We provide a variety of repair and maintenance services for all vehicle makes and models, even for exotic and vintage ones.</p>
                </div>
                <div class="col-md-4">
                    <h3 style="margin-left:60px;margin-top:30px;color:#2d2d2d;">Variety Services</h3>
                    <p class="fs-5" style="margin-left:60px;margin-top:30px;color:#2d2d2d;">The main principle of our work is to offer a wide range of quality car repair services and we’ve been doing it since our first day.</p>
                </div>
                <div class="col-md-4">
                    <h3 style="margin-left:60px;margin-top:30px;color:#2d2d2d;">Quality Support</h3>
                    <p class="fs-5" style="margin-left:60px;margin-top:30px;color:#2d2d2d;">Vehicle Repair Services offers quality support programs for any vehicles that allow them to always stay fully functional.</p>
                </div>
            </div>
            <div class="row container" style="margin-bottom:80px;">
                <img src="<?php base_url(); ?>assets/images/sevicebg.jpg">
                <div class="col-md-4 top-left">
                    <h1 style="color:gold"><b>Repair Services That We Offer</b></h1>
                    <p style="font-size:20px;color: antiquewhite;">We provide a full range of front end mechanical repairs for all makes and models of cars, no matter the cause. This includes everything from struts, shocks, and tie rod ends to ball joints, springs, and basically everything that is included in repairing the front end of the vehicle.</p>
                    <button type="button" class="btn btn-outline-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Book an Appointment</button>

                </div>
                <div class="col-md-4 centered">
                    <ul class="a">
                        <li>FREE Loaner Vehicles</li>
                        <li>FREE Shuttle Service</li>
                        <li>General Auto Repair & Maintenance</li>
                        <li>Transmission Repair & Replacement</li>
                        <li>Fuel System Repair</li>
                        <li>Exhaust System Repair</li>
                        <li>Engine Cooling System Maintenance</li>
                        <li>Electrical Diagnostics</li>
                        <li>Starting and Charging Repair</li>
                        <li>Wheel Alignment</li>
                        <li>CV Axles</li>
                        <li>Computer Diagnostic Testing</li>
                    </ul>
                </div>
                <div class="col-md-4 top-right">
                    <ul class="a">
                        <li>Manufacturer Recommended Service</li>
                        <li>Brake Repair and Replacement</li>
                        <li>Air Conditioning A/C Repair</li>
                        <li>Tire Repair and Replacement</li>
                        <li>Vehicle Preventative Maintenance</li>
                        <li>State Emissions Inspection</li>
                        <li>Emission Repair Facility</li>
                        <li>Tune Up</li>
                        <li>Oil Change</li>
                        <li>Brake Job / Brake Service</li>
                        <li>Engine Cooling System Flush & Repair</li>
                        <li>Steering and Suspension Work</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center" style="color:#2d2d2d;"><b>Why Choose Certified Service?</b></h1>
                <h5 class="text-center" style="color:#2d2d2d;">We partnered with RepairPal to bring you the most sophisticated fair-price estimates</h5>
            </div>
            <div class="row" style="margin-bottom:80px;">
                <div class="col-md-4 text-center">
                    <img src="<?php base_url(); ?>assets/images/trust1.jpg">
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php base_url(); ?>assets/images/trust2.jpg">
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php base_url(); ?>assets/images/trust3.jpg">
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </body>

    </html>



<?php } ?>

<style type="text/css">
            .error {
                color: #d92550;
                padding-top: 10px;
            }
        </style>

<form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="POST" action="javascript:void(0)">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content" style="font-family: 'Roboto', sans-serif;">
            <div class="modal-header">
                <h3 class="modal-title font-weight-bold" id="exampleModalLabel">Schedule <font color='#ffc513'>Auto Service</font>
                </h3>
            </div>
            <div class="modal-body" style="padding:40px!important;">
                <div>
                    <h6>To schedule an appointment fill out the form below with your information and requested services.</h6>
                </div>
                <div class="row" style="padding-top:10px;padding-bottom:10px;">
                    <div class="col-md-4 font-weight-bold">Contact Info</div>
                    <div class="col-md-4 font-weight-bold">Vehicle Detail</div>
                    <div class="col-md-4 font-weight-bold">Appointment Details</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><input type="text" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="fname" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Your name"></div>
                    <div class="col-md-4"><input type="text" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="vehitype" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Vehicle Type"></div>
                    <div class="col-md-4"><input type="date" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="appdate" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Date"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"><input type="text" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="yourphone" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Phone number"></div>
                    <div class="col-md-4"><input type="text" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="vehimodel" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Vehicle Model"></div>
                    <div class="col-md-4"><select  style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" value=""  name="service_type" class="form-control required" aria-required="true" aria-invalid="false" required >
                            <option value="">Service</option>
                            <option value="N">Normal Service</option>
                            <option value="Q">Quick Service</option>
                        </select></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"><input type="email" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="youremail" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="address@youremail.com"></div>
                    <div class="col-md-4"><input type="text" style="border-radius:0!important;border:none;background-color:rgba(237, 237, 237,0.8)" name="vehiyear" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Year"></div>
                    <div class="col-md-4"><button type="submit" name="submit" id="submit" style="border-radius:0!important;width:100%" class="btn btn-border btn-secondary"><span>Submit</span></button></div>
                </div>
            </div>

        </div>
    </div>
</div>
</form>

<div class="form-row">
                        <div id="msg_div">
                            <span id="res_message">
                            </span>
                        </div>
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
                    fname: {
                        required: true
                    },
                    yourphone: {
                        required: true
                    },
                    youremail: {
                        required: true
                    },
                    vehitype: {
                        required: true
                    },
                    vehimodel: {
                        required: true
                    },
                    vehiyear: {
                        required: true
                    },
                    appdate: {
                        required: true
                    },
                    service_type: {
                        required: true
                    }
                },
                messages: {

                    fname: {
                        required: "Please provide a valid Name",
                    },
                    yourphone: {
                        required: "Please provide a valid Phone number ",
                    },
                    youremail: {
                        required: "Please provide a valid email",
                    },
                    vehitype: {
                        required: "Please provide a valid vehicle Type ",
                    },
                    vehimodel: {
                        required: "Please provide a valid vehicle model",
                    },
                    vehiyear: {
                        required: "Please select a vehicle year ",
                    },
                    appdate: {
                        required: "Please provide a valid appoinment date",
                    },
                    service_type: {
                        required: "Please provide a valid service type",
                    }

                },
                
                submitHandler: function(form) {
                    $('#send_form').html('Sending..');
                    $.ajax({
                        url: "<?php echo base_url('Services/create') ?>",
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