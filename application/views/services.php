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
                    <a href="<?php base_url(); ?>"><button type="button" class="btn btn-outline-warning btn-lg" style="margin-top:10px;margin-left:150px;">Book an Appointment</button></a>
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
    </body>

    </html>
<?php } ?>