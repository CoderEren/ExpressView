<!DOCTYPE html>
<html>
<head>
<title>ExpressView - Learn What Other People Think About Anything!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="w3-theme-l5">

<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:expressview.php');
	}
	
	
	
	$db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");

	$opinionsor = $db->prepare("SELECT * FROM opinions WHERE author_username=:username");
	$opinionsor->execute(array(
		'username' => $_GET['username']
	));
	$opinioncek=$opinionsor->fetch(PDO::FETCH_ASSOC);
?>

Username = <?php echo $opinioncek['author_username'] ?>
<br><br>

<!-- SELECT * FROM opinions WHERE category_id=category_id -->
<h1>Opinions From <?php echo $opinioncek['author_username'] ?></h1>
<br>


<?php

//Getting the opinions from the database
$username = $_GET['username'];
$db = new PDO("mysql:host=localhost;dbname=expressview","root","2005eren07");

$opinionsor = $db->prepare("SELECT * FROM opinions WHERE author_username=:username");
$opinionsor->execute(array(
	'username' => $_GET['username']
));
	  
while($opinioncek=$opinionsor->fetch(PDO::FETCH_ASSOC)) {
	echo $opinioncek['opinion_content']."<b> by ".$opinioncek['author_username']." in ".$opinioncek['category_name']."</b>";
	echo "<br><br>";
}

?>



</body>
</html>