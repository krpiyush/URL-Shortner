<?php
   include('session.php');
?>
<?php
include "functions/database.php";
include "functions/time.php";

$data = $db->query("SELECT * FROM settings");
$info = $db->fetch_array($data);

$shr = $db->escape_value($_GET['id']);

$sql = $db->query("SELECT URL, date, hits, id, pass, last_visit FROM links WHERE BINARY link = '$shr'");
$sql = $db->fetch_array($sql);
$url = $sql["URL"];
$date = $sql["date"];
$hits = $sql["hits"];
$id = $sql["id"];
$pass = $sql["pass"];
$last_visit = $sql["last_visit"];

if ($url == '') {
    $error_msg = "Link you followed is not found";
  //  include "functions/error.php"; //error page
    $db->close_connection();
    exit;
} else {
    $myweb = $info['URL'];
    $created_link = $myweb . '/' . $shr;
    ?>
    <!DOCTYPE html>
    <html class="full" lang="en">

    <head>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        </head>

        <body>

            <?php
            include "functions/menu.php";
            ?>

                <div class="container" style=" width:80%;" >

                  <button onclick="goBack()" class="btn btn-default">Go Back</button>

                  <script>
                  function goBack() {
                    window.history.back();
                  }
                  </script><br><br>



                      <div class="row">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control form-control-lg" id="urlbox" name="url" value="<?php echo $created_link; ?>">
                          <div class="input-group-append">
                            <button class="btn btn-info" id="copy-button" type="submit">Copy!</button>
                          </div>
                        </div>
                      </div>

                    <br>
                    <div class="row">
                      <div class="col-lg-5 container">
                        <div class="card border-success" >
                          <div class="card-header border-success"><h3>QR Code</h3></div>
                          <div class="card-body text-success">
                          <div ><center><img alt="QR Code" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $created_link; ?>" class="size center-block"/></center></div>
                          </div>
                        </div>
                      </div>

                  <div class="col-lg-5 container">
                  <div class="card text-dark bg-info" >
                    <div class="card-body">
                      <div class="col-lg-12">
                        <br>
                          <h2 class="text-center"><strong>Total Hits</strong></h2>
                          <h3 class="text-center"><?php echo $hits; ?></h3>
                          <hr size="50px" noshade>
                          <h2 class="text-center"><strong>Last Visit</strong></h2>
                          <h3 class="text-center" title="<?php echo $last_visit; ?>"><?php echo time_ago($last_visit); ?></h3>
                          <hr size="50px" noshade>
                          <h2 class="text-center col-lg-12"><strong>Date Created</strong></h2>
                          <h3 class="text-center col-lg-12" title="<?php echo $date; ?>"><?php echo date('d M Y', strtotime($date)); ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
<center>


        <!-- JavaScript -->


        <script type="text/javascript">
            $(document).ready(function() {
                $("#copy-button").click(function () {
                    $(this).html("Copied!");
                    $("#urlbox").select();
                    document.execCommand("copy");
                });
            });
        </script>
<br>
<br><br>


    </body>

    </html>
    <?php
}
$db->close_connection();
?>
