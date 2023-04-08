
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>



    <body>
        <?php
            include "functions/menu.php";
        ?>

        <div class="container col-lg-5">

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>SORRY!</strong> This URL Is Password Protected...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <div class="card border-dark ">
          <div class="card-header border-dark ">
            <h4> Protected Link </h4>
          </div>
          <div class="card-body text-success">
            <div class="">
              <form name="form" method="post" action="">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Password</div>
                  </div>
                    <input type="password" name="txtpass" placeholder="Please Enter Password" class="form-control">
                </div>
            </div>

          </div>
          <div class="card-footer bg-transparent border-success">
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-dark " style="width:100%;">
            </form>
          </div>
        </div>
        </div>



        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>
</html>
