<!DOCTYPE html>
<?php
   include('../session.php');
?>
<html>

    <head>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>


    <body>

      <?php
          include "../functions/menu.php";
          include "../functions/time.php";
      ?>

        <div id="services" class="services-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered table-hover table-striped tablesorter">			<!--we create here table heading-->
                                <thead>
                                    <tr>
                                        <th>ID <i class="fa fa-sort"></i></th>
                                        <th>URL <i class="fa fa-sort"></i></th>
                                        <th>Short <i class="fa fa-sort"></i></th>
                                        <th>Hits <i class="fa fa-sort"></i></th>
                                        <th>Date <i class="fa fa-sort"></i></th>
                                        <th>Last Visit <i class="fa fa-sort"></i></th>


                                    </tr>
                                </thead>

                                <tbody>
<?php

include "../functions/database.php";
//number of results to show per page
$rec_limit = 10;


/* Get total number of records */
$sql = "SELECT count(id) FROM links";
$retval = $db->query($sql);
if (!$retval) {
    die('Error: Could not retrieve data.');
}

$row = $db->fetch_array($retval);
$rec_count = $row['count(id)'];

if (isset($_GET{'page'})) { //get the current page
    $page = $_GET{'page'} + 1;
    $offset = $rec_limit * $page;
} else {
    // show first set of results
    $page = 0;
    $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);
//we set the specific query to display in the table
$sql = "SELECT id, URL, hits, link, date, last_visit " . "FROM links " . "ORDER BY date DESC LIMIT $offset, $rec_limit ";

$retval = $db->query($sql);
if (!$retval) {
    die('Error: Could not retrieve data.');
}
//we loop through each records
while ($row = $db->fetch_array($retval)) {
    $showdate = date('d M Y', strtotime($row['date']));
		$count01 = mb_strlen( $row['URL']);
		if($count01 > 50){
		    $myurl =  substr($row['URL'],0,50)."...";
		} else {
				$myurl = $row['URL'];
		}

    //populate and display results data in each row
    echo '<tr class="record">';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td><a href="' . $row['URL'] . '">' . $myurl . '</a></td>';
    echo '<td><a href="' . 'http://localhost/short1' . '/' . $row['link'] . '">' . $row['link'] . '</td>';
    echo '<td>' . $row['hits'] . '</td>';
    echo '<td>' . $showdate . '</td>';
    echo '<td>' . time_ago($row['last_visit']) . '</td>';

}

echo '</tr>';
echo '</tbody>';
echo '</table>';
//we display here the pagination
echo "<div class='container'>";
if ($left_rec < $rec_limit) {
    $last = $page - 2;
    echo @"<a href=\"$_PHP_SELF?page=$last\"><button class='btn btn-dark'>Previous</button></a>";
} else if ($page == 0) {
    echo @"<a href=\"$_PHP_SELF?page=$page\"><button class='btn btn-dark'>Next</button></a>";
} else if ($page > 0) {
    $last = $page - 2;
    echo @"<a href=\"$_PHP_SELF?page=$last\"><button class='btn btn-dark'>Previous</button></a> ";
    echo @"<a href=\"$_PHP_SELF?page=$page\"><button class='btn btn-dark'>Next</button></a>";
}
echo '</div>';
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Core JavaScript Files -->
        <script src="../js/jquery-1.10.2.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/alertify.min.js"></script>
        <script src="../js/jquery.tablesorter.js"></script>


    </body>

</html>
