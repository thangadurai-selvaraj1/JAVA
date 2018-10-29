<?php
	
	include("dbConfig.php");


$rid = $_GET['rid'];

//pin name

$sql=" SELECT * FROM admin where id='$rid'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_assoc ($new);
$uuid=$row['ppin'];

$sqls=" SELECT * FROM process where rpid='$uuid' AND status=2";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);
$i=0;

echo "{'m':{'max':'".$numrows."'}";
while($rows=mysqli_fetch_assoc ( $news )){
	$i++;


$ruid=$rows['ruid'];
	
$u="SELECT * FROM uniqueid where uid='$ruid'";
$uu=mysqli_query( $conn,$u);
$uuu=mysqli_fetch_assoc ($uu );	
	echo ",'N".$i."':{";
	
    echo "'id':'".$uuu['id'];
    echo "','duid':'".$rows['ruid']."'}";

}
echo "}";






?>
