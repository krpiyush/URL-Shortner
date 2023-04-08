<?php
   include('session.php');
?>
<?php
include "functions/count.php";
?>
<!DOCTYPE html>
<html class="full" lang="en">

    <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php
            include "functions/menu.php";
        ?>
        <div class="container animated fadeIn" style="max-width: 950px;">
          <br>
            <form  action="create.php" method="POST" enctype="multipart/form-data">


                <div class="row">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg" id="urlbox" name="longurl" value="http://">
                    <div class="input-group-append">
                      <button class="btn btn-outline-danger" id="submit" type="submit">Shorten!</button>
                    </div>
                  </div>
                </div>
<hr>
<center><p class="text-danger">------------------------ ADVANCE OPTIONS ------------------------</p></center>


                <div class="row" style="margin-top: 8px;">
                    <div class="col-lg-6">
                        <div class="input-group" style="margin-top: 2px;">
                             <b>http://localhost/short1/</b>
                            <input type="text" id="cust"  data-validation="alphanumeric" data-validation-allowing="-_" data-validation-optional="true" data-validation-error-msg=" " name="cust" class=" span5 form-control" placeholder="Custom Link (OPTIONAL)">
                        </div>
                    </div>

                    <div class="col-lg-6" style="margin-top: 2px;">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="text"  data-validation="alphanumeric" data-validation-allowing="-_" data-validation-optional="true" data-validation-error-msg=" " id="pass" name="pass" class="form-control" placeholder="Password (OPTIONAL)">
                        </div>
                    </div>
                </div>
            </form>
            <br>
<hr>
            <div class="row" style="margin-top: 30px; margin-left: 20px;" >


                <div class="card text-white text-center bg-success mb-6 col-lg-4" style="max-width: 18rem;">
                  <div class="card-body">
                    <h1 class="newsize" style="font-weight:bolder;"> Total views </h1>
                    <h2> <?php echo $num_rows3; ?> </h2>
                  </div>
                </div>
                &nbsp;
                &nbsp;
                <br><br><br>
                <div class="card text-white text-center bg-primary mb-6 col-lg-4" style="max-width: 18rem;">
                  <div class="card-body">
                    <h1 class="newsize" style="font-weight:bolder;">Total URLs </h1>
                    <h2> <?php echo $num_rows1; ?> </h2>
                    <br>
                  </div>
                </div>
                &nbsp;
                &nbsp;
<br><br><br>
                <div class="card text-white text-center bg-danger mb-6 col-lg-4" style="max-width: 18rem;">
                  <div class="card-body">
                    <h1 class="newsize" style="font-weight:bolder;">Today URL</h1>
                    <h2> <?php echo $num_rows2; ?></h2>
                  </div>
                </div>

            </div>
        </div>
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.form-validator.min.js"></script>
        <script>
            $.validate({
                modules: 'security'
            });
	    </script>


    </body>

</html>
<?php $db->close_connection(); ?>
