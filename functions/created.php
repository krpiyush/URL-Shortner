<!DOCTYPE html>
<html class="full" lang="en">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>

    <body>

        <?php
            include "functions/menu.php";
        ?>
        <div class="container" style="width:70%;">


        <div class="container animated fadeIn">



            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congrats!</strong> URL shorted successfully...!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>



            <div class="row">
                <div class="col-lg-12">


                      <div class="row">
                        <div class="input-group mb-12">
                          <input type="text" class="form-control form-control-lg" id="urlbox" readonly name="url" value="<?php echo $created_link; ?>"  type="text">
                          <div class="input-group-append">
                            <button class="btn btn-outline-danger" id="copy-button" type="submit">Copy!</button>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-5 text-center">


                  <div class="card border-info">
                    <div class="card-header  border-info"><h3>QR Code</h3></div>
                    <div class="card-body text-success">
                    <img src="https://chart.googleapis.com/chart?chs=260x260&cht=qr&chl=<?php echo $created_link; ?>">
                    </div>
                  </div>
                </div>

                <div class="col-lg-7 text-center">
                    <div class="row">




                      <div class="card border-success">
                        <div class="card-header  border-success"><h3>Share</h3> </div>
                        <div class="card-body text-success">
                          <a target="_blank"  href="http://www.facebook.com/sharer.php?u=<?php echo $created_link; ?>"><img src="images/fb.png" style="width:13%;"></a> &nbsp;
                          <a target="_blank"  href="https://twitter.com/share?url=<?php echo $created_link; ?>"><img src="images/tw.png" style="width:10%;"></a>    &nbsp; &nbsp;
                          <a  target="_blank"  href="https://plus.google.com/share?url=<?php echo $created_link; ?>"> <img src="images/gp.png" style="width:10%;"> </a> &nbsp; &nbsp;
                          <a target="_blank"  href="http://pinterest.com/pin/create/button/?url=<?php echo $created_link; ?>"><img src="images/pin.png" style="width:9%;"></a>
                        </div>
                      </div>



                    </div>
                    <!-- row -->
                    <div class="row" style="margin-top: 10px; ">

                      <div class="card border-danger">
                        <div class="card-header  border-danger"><h3>Stats</h3></div>
                        <div class="card-body text-success">
                          <a href="<?php echo ''.'/short1/stats.php?id=' . $rand1; ?>"> <h3><?php echo 'http://localhost' . '/short1/stats.php?id=' . $rand1; ?></h3></a>
                        </div>
                      </div>
                    </div>
                    <!-- row -->
                </div>

            </div>
        </div>
        </div>
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.zclip.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#copy-button").click(function () {
                    $(this).html("Copied!");
                    $("#urlbox").select();
                    document.execCommand("copy");
                });
            });
            $('.alert').alert()
        </script>
    </body>

</html>
