
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

        <div class="container animated shake">

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1" style="margin-top: 100px;">
                    <div class="alert alert-dismissable alert-danger text-center">
                        <h3  style="color: #707070;"><p class="text-danger"> Opps!, Error Occured..!!! </p> </h3>
                        <h4> <?php echo $error_msg; ?></h4>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
