<?php
	
	include("dbConfig .php");


$name = $_GET['name'];
$pin=$_GET['pin'];
$sname = $_GET['sname'];
$stname = $_GET['stname'];
$city=$_GET['city'];
$loc=$_GET['loc'];
$build=$_GET['build'];
$state=$_GET['state'];
$lat=$_GET['lat'];
$lon=$_GET['lon'];
$con=$_GET['con'];
$phn=$_GET['phn'];
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
$localityid=$rows['lc'];

$sqlss=" SELECT * FROM street where lid='$lid' and name='$stname' ";
$newss=mysqli_query( $conn,$sqlss );
$numrowss=mysqli_num_rows($newss);
$rowss=mysqli_fetch_assoc ( $newss );
$streetid=$rowss['sc'];


$sqlsss=" SELECT * FROM uniqueid where loid='$localityid' and postid='$id' and stid='$streetid' ";
$newsss=mysqli_query( $conn,$sqlsss );
$numrowsss=mysqli_num_rows($newsss);
if($numrowsss<=8){
	$numrowsss=$numrowsss+1;
	$ss=(string)00;
	$iid=$ss.$ss.(string)$numrowsss;
}
if($numrowsss>=9&& $numrowsss<=98){
	$ss=(string)00;
	$iid=$ss.(string)$numrowsss;
}
if($numrowsss>=98&& $numrowsss<=998){
	$ss=(string)00;
	$iid=(string)$numrowsss;
}
$uid=$id.(string)$localityid.(string)$streetid.(string)$iid;


$in="insert into uniqueid ( lat,lon,uid,build,locality,city,state,country,pin,postid,loid,stid,phone) values ('$lat','$lon','$uid','$build','$loc','$city','$state','$con','$pin','$id','$localityid','$streetid','$phn')";
$new=mysqli_query( $conn,$in );


$rol="public";
$user = "srikrishna";
$pass = "srikrishna";
$senderid = "TSTMSG";
$channel = "Trans";
$DCS = 0;
$flashsms = 0;
$number = (int)$row["phn"];

$message = $uid."is your Digital Address to proceed on POST OFFICE ";
$route = 6;

$ch=curl_init('http://panel.smsmessenger.in/api/mt/SendSMS?user='.$user.'&password='.$pass.'&senderid='.$senderid.'&channel='.$channel.'&DCS='.$DCS.'&flashsms='.$flashsms.'&number='.$number.'&text='.$message.'&route='.$route.'');
$data = curl_exec($ch);

$r=" SELECT * FROM uniqueid where uid='$uid'";
$rr=mysqli_query( $conn,$in );
$f=mysqli_fetch_assoc ( $rr );
$rid=$f['id'];




$lo="insert into login ( uid,role,phn,rid) values ('$uid','$rol','$phn',$rid)";
$new=mysqli_query( $conn,$lo);











?>
