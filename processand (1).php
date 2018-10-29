<?php
	
	include("dbConfig .php");


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

echo "{'m':{'max':'".$numrows."'}";
while($rows=mysqli_fetch_assoc ( $news )){
	$i++;
	if($rows['ruid']==$uuid){
		$c="RECEIVE";
$e="FROM";
	echo ",'N".$i."':";
if($rows['status']==1){
	$ss="ORDER PLACED";
echo " {'to':'".$rows['ruid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "','status':'".$ss. "','e':'".$e. "'}";
}
if($rows['status']==2){
	$ss="NEAR TO YOU";
echo " {'to':'".$rows['ruid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "','status':'".$ss. "','e':'".$e. "'}";
}
}
if($rows['suid']==$uuid){
		$c="SEND";
$e="TO";
	echo ",'N".$i."':";

	if($rows['status']==1){
		$ss="ORDER PLACED ";
echo " {'to':'".$rows['ruid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "','status':'".$ss. "','e':'".$e. "'}";
}
if($rows['status']==2){
	$ss="GOING TO DELIVERY";
echo " {'to':'".$rows['ruid']."','date':'" .   $rows['sdate']   . "','type':'".$rows['type']."','tt':'".$c. "','status':'".$ss. "','e':'".$e. "'}";
}
}

}
echo "}";






?>
