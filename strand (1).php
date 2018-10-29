<?php
	
	include("dbConfig .php");


$name = $_GET['name'];
$pin=$_GET['pin'];
$sname = $_GET['sname'];
//pin name

$sql=" SELECT * FROM postoffice where name='$name' and pin='$pin'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_assoc ( $new );
$id=$row['upid'];

$sqls=" SELECT * FROM locality where pid='$id' and name='$sname'";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);
$rows=mysqli_fetch_assoc ( $news );
$lid=$rows['id'];

$sqlss=" SELECT * FROM street where lid='$lid' ";
$newss=mysqli_query( $conn,$sqlss );
$numrowss=mysqli_num_rows($newss);


echo "select Street,";
while($rowss=mysqli_fetch_assoc ( $newss )){
echo $rowss['name'].",";

}

?>
