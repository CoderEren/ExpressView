<!DOCTYPE html>
<html>
<head>
<title>Database with PHP and MySQL</title>
</head>

<body>

<h3>List of Records</h3>
<?php
	try{
		
		$connection = new PDO("mysql:host=localhost;dbname=test","root","2005eren07");
		
		$bilgilerimsor = $connection->prepare("SELECT * FROM details");
		$bilgilerimsor->execute();
		
		while($bilgilerimcek = $bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {
			echo $bilgilerimcek['details_name']."<br>";
		}
		
	} catch(PDOException $e) {
		
		echo $sql."<br>".$e->getMessage();
		
	}
?>

<br><br><br>
<table border="2px" style="width:100%;">
	<tr>
		<th>Position</th>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Time</th>
		<th>Functions</th>
	</tr>
	<?php
	$bilgilerimsor = $connection->prepare("SELECT * FROM details");
		$bilgilerimsor->execute();
		
		$count = 0;
		
		while($bilgilerimcek = $bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $count++;?>
	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $bilgilerimcek['details_id']; ?></td>
		<td><?php echo $bilgilerimcek['details_name']; ?></td>
		<td><?php echo $bilgilerimcek['details_mail']; ?></td>
		<td><?php echo $bilgilerimcek['details_age']; ?></td>
		<td><?php echo $bilgilerimcek['details_time']; ?></td>
		<td align="center"><button>Delete</button></td>
	</tr>
	
		<?php } ?>
</table>


</body>
</html>