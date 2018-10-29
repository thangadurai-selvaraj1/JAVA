<?php
	
	include("dbConfig .php");


$rid = $_GET['rid'];

//pin name

$sql=" SELECT * FROM uniqueid where id='$rid'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_assoc ($new);
$uuid=$row['uid'];

$sqls=" SELECT * FROM process where ruid='$uuid'";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);
$i=0;

echo "{'m':{'max':'".$numrows."'}";
while($rows=mysqli_fetch_assoc ( $news )){
	$i++;
	echo ",'N".$i."':";
echo "{'to':'".$rows['suid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']. "'}";

}
echo "}";






?>
