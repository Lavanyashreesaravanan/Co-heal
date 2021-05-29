<?php
	include('conn.php');
 
    $date=$_POST['date'];
    $temperature=$_POST['temperature'];
    $heartrate=$_POST['heartrate'];
    $oxygen=$_POST['oxygen'];
    $feeling=$_POST['feeling'];
	$breathing=$_POST['breathing'];
 
	mysqli_query($conn,"insert into `user` (date,temperature,heartrate,oxygen,feeling,breathing) values ('$date','$temperature', '$heartrate', '$oxygen', '$feeling', '$breathing')");
	header('location:index.php');
 
?>
