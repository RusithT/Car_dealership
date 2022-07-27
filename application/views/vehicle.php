<?php { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
  </head>

  <body>
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Vehicles</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <?php foreach($vehicles as $vehicle ) {?>
          <div class="col-md-4">
            <div class="service-item">
              <div style="width: 100%!important; height:260px !important;">
              <img src="<?= $vehicle['image']?>" alt="" style='100%'>
              </div>
              <div class="down-content">
                <h4><?= $vehicle['brand'].' - '.$vehicle['model']?></h4>
                <div style="margin-bottom:10px;">
                  <span>from <sup>Rs.</sup><?= $vehicle['selling_price']?></span>
                </div>
                <p>
                  <i class="fa fa-user" title="passegengers"></i> <?= $vehicle['seats']?> &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog" title="Gears"></i> <?= $vehicle['gear']?> &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-sign-out" title="doors"></i> <?= $vehicle['doors']?>&nbsp;&nbsp;&nbsp;
                  
                </p>
              </div>
            </div>

            <br>
          </div>
          <?php }?>


        </div>

        <br>
        <br>

      

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
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

    <!-- Footer Starts Here -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" id="contact">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up location" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return location" required="">
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return date/time" required="">
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">
                </fieldset>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter email address" required="">
                    </fieldset>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter phone" required="">
                    </fieldset>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php } ?>