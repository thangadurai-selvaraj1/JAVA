<?php
	
	include("dbConfig .php");


$id = $_GET['id'];
$pid = $_GET['pid'];


$sql=" SELECT * FROM uniqueid where id=$id ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);

$row=mysqli_fetch_assoc ( $new );

$uid=$row["uid"];
 $build= $row["build"];
  $locality= $row["locality"]; 	
  $city= $row["city"]; 	
  $ph= $row["phone"];
  $sqls=" SELECT * FROM process where id=$pid ";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);
$rows=mysqli_fetch_assoc ( $news );
$pin= $rows['pin'];
echo " {'uid':'".$uid."','build':'" .   $row['build']   . "','locality':'".$row['locality']."','city':'".$row['city'] ."','ph':'".$row['phone']."','lat':'".$row['lat']."','lon':'".$row['lon']."','pin':'".$rows['pin']."'}";


?>
