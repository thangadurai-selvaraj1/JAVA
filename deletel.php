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


$result = mysqli_query($conn, "DELETE FROM locality WHERE id=$id");


header("Location:add.php");
?>

