<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$date=$_POST['date'];
    $temperature=$_POST['temperature'];
    $heartrate=$_POST['heartrate'];
    $oxygen=$_POST['oxygen'];
    $feeling=$_POST['feeling'];
	$breathing=$_POST['breathing'];
 
	mysqli_query($conn,"update `user` set date='$date', temperature='$temperature', heartrate='$heartrate', oxygen='$oxygen', feeling='$feeling', breathing='$breathing' where userid='$id'");
	header('location:index.php');
?>


