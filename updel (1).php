<?php
	
	include("dbConfig .php");


$pid = $_GET['pid'];



$result = mysqli_query($conn, "UPDATE process SET status=3 where id='$pid'");
?>
