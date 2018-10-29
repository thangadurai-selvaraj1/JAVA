<?php
	
	include("dbConfig .php");


$id = $_GET['id'];


echo $id;
$sql=" SELECT * FROM login where uid=$id ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);

if($numrow<=1){
	echo "true";
}
   	 	
//echo " {'id':'".$uid."','role':'" .   $row['role']   . "','rid':'".$row['rid']. "'}";
?>
