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

    <body> <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>All Car Models</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Bidder</th>
                                        <th>Vehicle</th>
                                        <th>Start Bid Amount</th>
                                        <th>Bid Amount</th>
                                        <th>Bid Date</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Bidder</th>
                                        <th>Vehicle</th>
                                        <th>Start Bid Amount</th>
                                        <th>Bid Amount</th>
                                        <th>Bid Date</th>

                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php foreach ($bidders as $vehicle) : ?>

                                        <tr>

                                            <td><?php echo $vehicle['id']; ?></td>
                                            <td><?php echo $vehicle['fname'].''.$vehicle['lname']; ?></td>
                                            <td><?php echo $vehicle['brand'].''.$vehicle['model']; ?></td>
                                            <td><?php echo $vehicle['start_bid_amo']; ?></td>
                                            <td><?php echo $vehicle['bid_amount']; ?></td>
                                            <td><?php echo $vehicle['bid_date']; ?></td>
                                                                                    

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
<?php } ?>



<!--Import jQuery before export.js-->
<script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/jszip/dist/jszip.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">

<script>
    $(document).ready(function() {
        var handleDataTableButtons = function() {
            if ($("#datatable-responsive").length) {
                $("#datatable-responsive").DataTable({
                    aaSorting: [
                        [0, 'desc']
                    ],

                    dom: "Blfrtip",
                    buttons: [{
                            extend: "copy",
                            className: "btn-sm",
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17]
                            }
                        },
                        {
                            extend: "csv",
                            className: "btn-sm",
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17]
                            }
                        },
                        {
                            extend: "excel",
                            className: "btn-sm",
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17]
                            }
                        },
                        {
                            extend: "pdf",
                            className: "btn-sm",
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17]
                            }
                        },
                        {
                            extend: "print",
                            className: "btn-sm",
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 17]
                            }
                        },
                    ],
                    responsive: true,
                });
            }
        };

        TableManageButtons = function() {
            "use strict";
            return {

                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        TableManageButtons.init();
    });
</script>