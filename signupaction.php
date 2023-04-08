<?php
      //  require_once 'dbConfig.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $mob = $_POST['mob'];
      //  $image = $_FILES['image']['name'];
    //    $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"images/$image");
        $datetime = date("Y-m-d H:i:s");

        $con = mysqli_connect('localhost','root','');

        if(!$con)
        {
          echo 'not connect to the server';
        }
        if(!mysqli_select_db($con,'piyush'))
        {
          echo 'database not selected';
        }

        $query = "INSERT INTO signup (name,email,password,mobile,created) VALUES ('$name','$email','$password','$mob','$datetime')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {
        echo "<center>";

        echo "<br><h1><font color=green>"."Signup Successful"."</h2><br></font>";
        echo "<br></center>";

        }
        else {
                      echo "<br>"."<h1>"."<font color=red>"."Signup Failed"."</font>"."</h2>"."<br>"."</center>";


             }

?>
