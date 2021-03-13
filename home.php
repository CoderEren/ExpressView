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

<h1 style="padding:40px;text-align:center;">Welcome <?php echo $_SESSION['username'] ?></h1>




<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ExpressView</a>
  <a href="category.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Create A New Category"><i class="fa fa-plus"></i> Create A New Category</a>
  
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="My Account"><i class="fa fa-user"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
      <a href="#" class="w3-bar-item w3-button">Account Details</a>
    </div>
  </div>
  
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Create A New Category</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Account Details</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:0px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      
      <!-- Accordion 
      <div class="w3-card w3-round">
        <div class="w3-white">
		  <h3 style="text-align:center;padding:10px;">Popular Categories</h3>	
          <button class="w3-button w3-block w3-theme-l1 w3-left-align">Fortnite</button>
          <button class="w3-button w3-block w3-theme-l1 w3-left-align">Cooking</button>
          <button class="w3-button w3-block w3-theme-l1 w3-left-align">Harvard University</button>
        </div>      
      </div>
      <br>
    -->
	
	<div class="w3-card w3-round">
        <div class="w3-white">
		  <h3 style="text-align:center;padding:10px;">Popular Categories</h3>	
		  
		  <?php 
	  $db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");
	  $bilgilerimsor = $db->prepare("SELECT * FROM categories");
	  $bilgilerimsor->execute();
	  
	  while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { ?>
	  
          <a href="<?php echo "categories.php?category_id=".$bilgilerimcek['category_id'] ?>"><button class="w3-button w3-block w3-theme-l1 w3-left-align"><?php echo $bilgilerimcek['category_name'] ?></button></a>
		  
	  <?php } ?>
	  
        </div>      
      </div>
      <br>
	  
	  
	
	
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
		
		<div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <button class="w3-button w3-block w3-blue" type="submit"><i class="fa fa-search"></i> Search Categories</button>
			</div>  
		</div><br>
		
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2>Popular Opinions</h2>
			  <hr>
			  <?php
			  
				$db2 = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");
				$opinionssor = $db2->prepare("SELECT * FROM opinions WHERE opinion_id < 50");
				$opinionssor->execute();
	  
				while($opinionscek=$opinionssor->fetch(PDO::FETCH_ASSOC)) { ?>
				
			  <h5><?php echo $opinionscek['opinion_content'] ?></h5>
			  <h6>by 
				  <a href="user.php?username=<?php echo $opinionscek['author_username'] ?>">
					<?php echo $opinionscek['author_username'] ?>
				  </a> 
				  in 
				  <a href="categories.php?category_id=<?php echo $opinionscek['category_id'] ?>">
					<?php echo $opinionscek['category_name'] ?>
				  </a>
			  </h6>
			  <hr>
			  
				<?php } ?>
			  
            </div>
          </div>
        </div>
      </div>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
	
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

<!-- Footer -->
<footer class="w3-container w3-theme-d5">
  <p>Made by Eren Geridonmez</p>
</footer>
 
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