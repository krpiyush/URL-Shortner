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
<br>
<br>
<br>
        <div class="container animated flipInY col-lg-7">

            <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="alert alert-danger" role="alert">

                    <h3> <b>You will be redirected <span id="cz"> in <span id="counter">5</span> second(s).</span></b></h3>
                  </div>
                </div>
            </div>
            <br><br>
          <center>  <img src="http://localhost/short1/images/wait.gif" alt="Loading image" width="30%"></center>

        </div>
        <!-- JavaScript -->
<!--   <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script> -->

        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 0) {
				    document.getElementById("cz").innerHTML = "Now !";
                    location.href = '<?php echo str_replace("'", "",$url); ?>';
                }
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
            setInterval(function() {
                countdown();
            }, 1000);
        </script>

    </body>

</html>
