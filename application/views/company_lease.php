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
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- CS ============================================ -->

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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/register_css.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body>
    <br /></br><br /><br />
    <div class="header-text">
    <div class="col-sm-16 col-md-16 col-lg-12 col-xs-24">
        <form action="#">
            <div class="login-form">
                <h4 class="login-title">Requirments</h4>
                <div class="row">
                    <div class="col-md-12">
                        <label>Company Name</label>
                        <input type="text" placeholder="Company Name">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Company Registration Number</label>
                        <input type="text" placeholder="Company Registrastion Number">
                    </div>

                    <div class="col-md-6 col-12 mb--20">
                        <label>Company Email Address*</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <label>Company Address</label>
                        <input type="address" placeholder="Address">
                    </div>
                    <br><br><br>                   
    
                    <!-- Director 1 -->
                    <div class="col-md-12">
                        <label>Full Name(Director 1)</label>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Name wih initials</label>
                        <input type="text" placeholder="with initials">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC</label>
                        <input type="text" placeholder="National Identity Card">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(front)</label>
                        <input type="file">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(back)</label>
                        <input type="file">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Birth Date</label>
                        <input type="date">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="address" placeholder="Address">
                    </div>
                    <div class="col-md-12">
                        <label>Gender</label>
                        <div class="col-md-4">
                            Male<input type="radio" name="gender" value="male">
                            Female<input type="radio" name="gender" value="female">
                        </div>
                    </div>

                    <!--Director 2-->
                    <div class="col-md-12">
                        <label>Full Name(Director 2)</label>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Name wih initials</label>
                        <input type="text" placeholder="with initials">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC</label>
                        <input type="text" placeholder="National Identity Card">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(front)</label>
                        <input type="file">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>NIC(back)</label>
                        <input type="file">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Birth Date</label>
                        <input type="date">
                    </div>
                    <div class="col-md-6 col-12 mb--20">
                        <label>Email Address*</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="address" placeholder="Address">
                    </div>
                    <div class="col-md-12">
                        <label>Gender</label>
                        <div class="col-md-4">
                            Male<input type="radio" name="gender" value="male">
                            Female<input type="radio" name="gender" value="female">
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="uren-register_btn">Apply</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
<?php } ?>