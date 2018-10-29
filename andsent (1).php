<?php
	
	include("dbConfig.php");


$rid = $_GET['rid'];

//pin name

$sql=" SELECT * FROM uniqueid where id='$rid'";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_assoc ($new);
$uuid=$row['uid'];

$sqls=" SELECT * FROM process where suid='$uuid' OR ruid='$uuid' and status <=2";
$news=mysqli_query( $conn,$sqls );
$numrows=mysqli_num_rows($news);
$i=0;

echo "{'max':".$numrows;
while($rows=mysqli_fetch_assoc ( $news )){
	$i++;
	if($rows['ruid']==$uuid){
		$c=2;
	echo ",'N".$i."':";
echo " {'to':'".$rows['suid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "'}";
}
if($rows['suid']==$uuid){
		$c=1;
	echo ",'N".$i."':";
echo " {'to':'".$rows['ruid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "','status':'".$rows['status']. "'}";
}

}
echo "}";






?>
