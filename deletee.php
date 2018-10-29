<?php
session_start();
include("dbConfig.php");
if(!isset($_SESSION['user']))
{
  header("Location: signin.php");
}
$res=mysqli_query($conn,"SELECT * FROM admin WHERE id=".$_SESSION["user"]);
$userRow=mysqli_fetch_array($res);


?>

<?php



$id = $_GET['id'];


$result = mysqli_query($conn, "DELETE FROM admin WHERE id=$id");


header("Location:upemp.php");
?>

