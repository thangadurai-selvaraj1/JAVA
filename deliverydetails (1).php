<?php
	
	include("dbConfig .php");


$id = $_GET['id'];



$sql=" SELECT * FROM uniqueid where id=$id ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);

$row=mysqli_fetch_assoc ( $new );

$uid=$row["uid"];
 $build= $row["build"];
  $locality= $row["locality"]; 	
  $city= $row["city"]; 	
  $ph= $row["phone"];
echo " {'uid':'".$uid."','build':'" .   $row['build']   . "','locality':'".$row['locality']."','city':'".$row['city'] ."','ph':'".$row['phone']."'}";
?>
