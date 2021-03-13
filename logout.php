<!DOCTYPE html>
<html>
<head>
<title>ExpressView - Learn What Other People Think About Anything!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   


<?php
session_start();
session_destroy();

header('location:expressview.php');
?>


<a href="logout.php">Logout</a>

<h1>Welcome <?php echo $_SESSION['username'] ?></h1>


</body>
</html>