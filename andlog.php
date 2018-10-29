<?php
	
	include("dbConfig .php");


$id = $_GET['id'];
$ph = $_GET['ph'];


$sql=" SELECT * FROM login where uid='$id' and pass=$ph ";

$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);

$row=mysqli_fetch_assoc ( $new );

$uid=$row["uid"];
 $phd= $row["phn"];
   	 	
echo " {'id':'".$uid."','role':'" .   $row['role']   . "','rid':'".$row['rid']. "'}";
?>
