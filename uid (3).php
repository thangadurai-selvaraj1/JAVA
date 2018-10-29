<?php
	
	include("dbConfig .php");


$id = $_GET['id'];


$sql=" SELECT * FROM login where uid='$id' ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
$row=mysqli_fetch_array($new);

if($numrow>=1){
	echo "true";
	$pp=rand(1111,9999);
	$result = mysqli_query($conn, "UPDATE login SET pass='$pp' where uid='$id'" );
	$user = "srikrishna";
$pass = "srikrishna";
$senderid = "TSTMSG";
$channel = "Trans";
$DCS = 0;
$flashsms =0;
$number = (int)$row["phn"];
$loginmessage =" is your OTP";
$otplog=strval($pp);
$startmsg="please%20login%20with%20OTP%20";
$otplog=$startmsg.$otplog;
$otplog .= "%20,OTP%20will%20Expiry%20in%2010%20min.Please%20Dont%20share%20with%20anyone.";
$message =$otplog;//.$loginmessage;
echo $message;
$route = 6;
$ch=curl_init('http://panel.smsmessenger.in/api/mt/SendSMS?user='.$user.'&password='.$pass.'&senderid='.$senderid.'&channel='.$channel.'&DCS='.$DCS.'&flashsms='.$flashsms.'&number='.$number.'&text='.$message.'&route='.$route.'');
$data = curl_exec($ch);
}

   	 	
//echo " {'id':'".$uid."','role':'" .   $row['role']   . "','rid':'".$row['rid']. "'}";
?>
