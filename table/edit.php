<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="edit.css">
<title>Basic MySQLi Commands</title>
</head>
<body>
<h1 class="heading"><span>Co-heal</span><br>Self Monitoring Chart</h1>
	<h2>EDIT</h2>

	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Date:</label><input type="date" value="<?php echo $row['date']; ?>" name="date"><br>
		<label>Temperature:</label><input type="number" value="<?php echo $row['temperature']; ?>" name="temperature"><br>
        <label>Heart Rate:</label><input type="number" value="<?php echo $row['heartrate']; ?>" name="heartrate"><br>
        <label>SPO2:</label><input type="number" value="<?php echo $row['oxygen']; ?>" name="oxygen"><br>
        <label>Feeling:</label><input type="text" value="<?php echo $row['feeling']; ?>" name="feeling"><br>
        <label>Breathing:</label><input type="text" value="<?php echo $row['breathing']; ?>" name="breathing"><br>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>
