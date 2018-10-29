<?php
	
	include("dbConfig.php");


$name = $_GET['name'];
$pin=$_GET['pin'];
//pin name

$sql=" SELECT * FROM postoffice where name='$name' and pin='$pin'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_assoc ( $new );
$id=$row['upid'];

$sqls=" SELECT * FROM locality where pid='$id'";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);

echo "select locality,";
while($row=mysqli_fetch_assoc ( $news )){
echo $row['name'].",";

}

?>
