<?php

   session_start();
   $db = mysqli_connect("localhost","root","","piyush");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);


      $query = "SELECT id FROM signup WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>URL SHORTENER HOME PAGE </title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="main-content">
			<div class="contect_left_form">
				<div class="left_grid_info">
					<h1>Manage Your URL</h1>
					<p><h3>Short URL, Copy it & Share...</h3></p>
					<img src="image/image.jpg" alt="" />
				</div>
			</div>
			<div class="login_info">
				<h2>Login to your Account</h2>
				<p>Enter your details to login.</p>
				<form action="" method="post">
					<label>Email Address</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="email" name = "email" placeholder="Enter Your Email" required="">
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name = "password" placeholder="Enter Password" required="">
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Remember me</label>
					</div>
						<button class="btn btn-danger btn-block" type="submit">Login</button >
				</form>
				<p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
				<p class="account1">Dont have an account? <a href="signup.html">Register here</a></p>
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!-- footer -->
	<div class="footer">
		<p>&copy; 2019 URL Shortener. All Rights Reserved.</p>
	</div>
	<!-- footer -->
</div>

</body>
</html>
