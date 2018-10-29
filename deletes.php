<?php
session_start();
include("dbConfig.php");
if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}



?>

<?php



$id = $_GET['id'];
	$sql=" SELECT * FROM street where id='$id'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_array($new);
$lid=$row['lid'];

$result = mysqli_query($conn, "DELETE FROM street WHERE id=$id");

header("location:adds.php?id=$lid");
?>

