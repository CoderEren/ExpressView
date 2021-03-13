<!DOCTYPE html>
<html>
<head>
<title>ExpressView - Learn What Other People Think About Anything!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body class="w3-theme-l5">
   


<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:expressview.php');
}
?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ExpressView</a>
  
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="My Account"><i class="fa fa-user"></i> My Account</button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
      <a href="#" class="w3-bar-item w3-button">Account Details</a>
    </div>
  </div>
  
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Account Details</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:60px;">    
  <!-- The Grid -->
  <div class="w3-row">
    
    <!-- Left Column -->
    <div class="w3-col m9">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
		
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2>Create A New Category</h2>
			  
			  <hr>
			  <p>Before creating a new category, check if that category already exists!</p>
			  <form action="#" method="POST">
			  <input type="text" placeholder="Enter the name of the category..." name="category" style="width:100%;">
			  
			  <input type="submit" value="Submit" class="w3-button w3-block w3-blue" name="categorysubmit">
			  </form>

            </div>
          </div>
		  <br>
        </div>
      </div>
      
    <!-- End Left Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m3">
	
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div><br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div><br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div><br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<?php
$con = mysqli_connect('localhost','root','2005eren07');

mysqli_select_db($con, 'expressview');

$category = $_POST['category'];

if(isset($_POST['categorysubmit']) && $category != '') {
	$submit = "INSERT INTO categories (category_name) VALUES ('$category')";
	 mysqli_query($con, $submit);
	 echo "Successfully created a new category!";
}


/*
try {
    $conn = new PDO("mysql:host=localhost;dbname=expressview", 'root', '2005eren07');
	
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$category = $_POST['category'];
	
    $sql = "INSERT INTO categories (category_name)
    VALUES ('$category')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
*/

/*
$con = mysqli_connect('localhost','root','2005eren07');

mysqli_select_db($con, 'expressview');

$categoryname = $_GET['category'];
try {
	$db = new PDO("mysql:host=localhost;dbname=expressview", 'root', '2005eren07');
	if(isset($_GET['categorysubmit'])) {
		$save = $db->prepare("INSERT INTO categories SET category_name=:name");
		$insert = $save->execute(array('name' => $_GET['category']))
}
} catch(PDOException $e) {
	
}


$submit = "INSERT INTO categories (category_name) VALUES ('$categoryname')";
mysqli_query($con, $reg);
echo "A new category is added successfully!";
*/
?>



<!-- Footer 
<footer class="w3-container w3-theme-d5">
  <p>Made by Eren Geridonmez</p>
</footer>
 -->
 
<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
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