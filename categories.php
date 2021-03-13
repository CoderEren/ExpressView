<!DOCTYPE html>
<html>
<head>
<title>ExpressView - Learn What Other People Think About Anything!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="w3-theme-l5">

<?php
	  $db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");
	  $bilgilerimsor = $db->prepare("SELECT * FROM categories WHERE category_id=:category_id");
	  $bilgilerimsor->execute(array(
		'category_id' => $_GET['category_id']
	  ));
	  
	  $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
	  
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:expressview.php');
	}
	
?>

Category ID = <?php echo $bilgilerimcek['category_id'] ?>
<br>
Category Name = <?php echo $bilgilerimcek['category_name'] ?>
<br><br>


<form action="#" method="POST">
	<textarea name="opinion" placeholder="What's your opinion?"></textarea>
	<br>
	<input name="opinionsubmit" type="submit" value="Submit">
</form>




<!-- SELECT * FROM opinions WHERE category_id=category_id -->
<h1>Opinions About <?php echo $bilgilerimcek['category_name'] ?></h1>
<br>
<?php

//Getting the opinions from the database
$categoryid = $_GET['category_id'];
$db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");

$opinionsor = $db->prepare("SELECT * FROM opinions WHERE category_id='$categoryid'");
$opinionsor->execute();
	  
while($opinioncek=$opinionsor->fetch(PDO::FETCH_ASSOC)) {
	echo $opinioncek['opinion_content']."<b> by ".$opinioncek['author_username']."</b>";
	echo "<br><br>";
}




//Inserting a new opinion

$con = mysqli_connect('localhost','root','2005eren07');

mysqli_select_db($con, 'expressview');

$opinion = $_POST['opinion'];

if(isset($_POST['opinionsubmit']) && $opinion != '') {
	$opinion = $_POST['opinion'];
	$categoryid = $_GET['category_id'];
	$currentusername = $_SESSION['username'];
	$categoryname = $bilgilerimcek['category_name'];
	//$submit = "INSERT INTO opinions (opinion_content, author_username, category_id) VALUES ('$opinion', '$_SESSION['username']', '$categoryid')";
	$submit = "INSERT INTO opinions (opinion_content, author_username, category_id, category_name) VALUES ('$opinion', '$currentusername', '$categoryid', '$categoryname')";
	 mysqli_query($con, $submit);
	 echo "Successfully created a new opinion!";
}






/*
$categoryid = $_GET['category_id'];
$db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");

$opinionsor = $db->prepare("SELECT * FROM opinions WHERE category_id='$categoryid'");
$opinionsor->execute();
	  
$opinioncek=$opinionsor->fetch(PDO::FETCH_ASSOC) 

echo "Opinion Content: ".$opinioncek['opinion_content'];
echo "<br><br>Opinion ID: ".$opinioncek['opinion_id'];
*/


/*
//Getting opinions
$categoryid = $_GET['category_id'];

$opinionsor = $db->prepare("SELECT * FROM opinions WHERE category_id=:catid");
$opinionsor->execute(array(
	'catid' => $categoryid
));

//Getting the name of the author
$opinioncektwo = $opinionsor->fetch(PDO::FETCH_ASSOC);

$authorid = $opinioncektwo['author_id'];
$authorsor = $db->prepare("SELECT * FROM users WHERE user_id=:userid");
$authorsor->execute(array(
	'userid' => $authorid
));
$authorcek = $authorsor->fetch(PDO::FETCH_ASSOC);


//Writing the results
while($opinioncek = $opinionsor->fetch(PDO::FETCH_ASSOC)) {
	echo $opinioncek['opinion_content']." by ".$authorcek['user_username'];
	echo "<br>";
}

*/



/*
//I need to get all of the authors instead of only 1 so I need to call the 
//users database in the while loop of the opinions

//Getting opinions
$categoryid = $_GET['category_id'];

$opinionsor = $db->prepare("SELECT * FROM opinions WHERE category_id=:catid");
$opinionsor->execute(array(
	'catid' => $categoryid
));


//Writing the results
while($opinioncek = $opinionsor->fetch(PDO::FETCH_ASSOC)) {
	
	//Getting the name of the author
	global $opinionsor, $db;
	$opinioncektwo = $opinionsor->fetch(PDO::FETCH_ASSOC);

	$authorid = $opinioncektwo['author_id'];
	$authorsor = $db->prepare("SELECT * FROM users WHERE user_id=:userid");
	$authorsor->execute(array(
		'userid' => $authorid
	));
	
	$authorcek = $authorsor->fetch(PDO::FETCH_ASSOC);
	
	echo $opinioncek['opinion_content']."<b> by ".$authorcek['user_username']."</b>";
	echo "<br><br>";
	
}

*/
?>




</body>
</html>