<?php
	
	include("dbConfig.php");


$pin = $_GET['pin'];
$result="";


$sql=" SELECT * FROM postoffice where pin=$pin";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);


while($row=mysqli_fetch_assoc ( $new )){
echo $row['name'].",";

}

?>
