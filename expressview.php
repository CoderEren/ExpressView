<!DOCTYPE html>
<html>
<head>
<title>ExpressView - Learn What Other People Think About Anything!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--
<h1>Login</h1>
	<form action="validation.php" method="POST">
		<input type="text" placeholder="Enter your username..." name="loginusername" required>
		<input type="password" placeholder="Enter your password..." name="loginpassword" required>
		<input type="submit" value="Login" name="login">
	</form>
  
<br><br><hr><br><br>

<h1>Create A New Account</h1>
<form action="registration.php" method="POST">
	<label>Full Name</label>
	<input type="text" name="registername" placeholder="Enter your full name..." required>
	
	<label>Email Address</label>
	<input type="email" name="registeremail" placeholder="Enter your email..." required>
	
	<label>Username</label>
	<input type="text" name="registerusername" placeholder="Enter your username..." required>
	
	<label>Password</label>
	<input type="password" name="registerpassword" placeholder="Enter your password..." required>
	
	<p><button class="w3-button w3-blue">Create Account</button></p>
</form>

-->

<style>
@media only screen and (max-width: 1000px) {
  /* For mobile phones: */
  #registrationform {
    width: 100%;
  }
}
</style>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">ExpressView</a>
	
	<form style="float:right;padding:4px;" class="w3-hide-small" action="validation.php" method="POST">
		<input type="text" placeholder="Enter your username..." name="loginusername" required>
		<input type="password" placeholder="Enter your password..." name="loginpassword" required>
		<input class="w3-blue w3-btn" type="submit" value="Login" name="login">
	</form>
	
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <form style="float:right;padding:4px;" action="validation.php" method="POST">
		<input type="text" placeholder="Enter your username..." name="loginusername" required>
		<input type="password" placeholder="Enter your password..." name="loginpassword" required>
		<input class="w3-blue w3-btn" type="submit" value="Login" name="login">
	</form>
  </div>
</div>


<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">ExpressView</h1>
  <p class="w3-xlarge">Learn What Other People Think About Anything!</p>
  <h1>Create A New Account</h1>
<form action="registration.php" method="POST">
<div id="registrationform" style="width:30%;margin:auto;">
	<label style="float:left;">Full Name</label><br>
	<input type="text" style="width:100%;" name="registername" placeholder="Enter your full name..." required>
	<br>
	<label style="float:left;">Email Address</label><br>
	<input type="email" style="width:100%;" name="registeremail" placeholder="Enter your email..." required>
	<br>
	<label style="float:left;">Username</label><br>
	<input type="text" style="width:100%;" name="registerusername" placeholder="Enter your username..." required>
	<br>
	<label style="float:left;">Password</label><br>
	<input type="password" style="width:100%;" name="registerpassword" placeholder="Enter your password..." required>
	
	<p><button class="w3-button w3-blue" style="width:100%;">Create Account</button></p>
</div>
</form>
<p>If you get redirected to this page after registration, that means the username you entered already exists.</p>
<p>If you get redirected to this page after login, that means the username and password combination is wrong.</p>
</header>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>






</body>
</html>