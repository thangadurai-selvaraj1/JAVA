<?php

session_start();
include("dbConfig.php");
if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
if(ISSET($_POST["CREATE"])=="CREATE")
{
		$pin = $_POST["pin"];
$name= $_POST["name"];
$address=$_POST["address"];
$st = $_POST["state"];
$dst = $_POST["District"];
$ty = $_POST["type"];
if($ty=="head post office"||$ty=="sub post office"){
	$a=chr(65);
	$aa=(string)$pin;
	$upid=$aa.$a;
	$sql="insert into postoffice (pin,name,ad,state,distr,type,upid) values ('$pin','$name','$address','$st','$dst','$ty','$upid')";
$query=mysqli_query($conn,$sql);
}
if($ty=="branch post office"){
	$sql=" SELECT * FROM postoffice WHERE pin='$pin' ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
if($numrow<=0){
	?>
				<script type="text/javascript">
				alert("CREATE SUB OFFICE FIRST");
						</script>
				<?php
}
else{
	$c=65+$numrow;
	$a=chr($c);
	$aa=(string)$pin;
	$upid=$aa.$a;

$sql="insert into postoffice (pin,name,ad,state,distr,type,upid) values ('$pin','$name','$address','$st','$dst','$ty','$upid')";
$query=mysqli_query($conn,$sql);
}

}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Indian Post</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Courier Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /font files -->
<!-- js files -->

</script>
<style type="text/css">
	 a:hover{
  background-color: #33accc;
    color: #fff;
  text-align: center;
  padding: 10px 10px;
  letter-spacing: 1px;
  text-decoration: none;
 
 }

</style>
<!-- /js files -->
</head>
<body>
<!-- navigation -->
</style>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php"><h1><span class="fa fa-smile-o"  aria-hidden="true"></span>India Post</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li ><a href="home.php">Home</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Employee<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="admin.php">REGISTER</a><br>
							<a href="headpo.php">UPDATE</a><br>
							<a href="headpo.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="active" class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post office<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="admin.php">REGISTER</a><br>
							<a href="headpo.php">UPDATE</a><br>
							<a href="headpo.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">unique id<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="admin.php">REGISTER</a><br>
							<a href="headpo.php">UPDATE</a><br>
							<a href="headpo.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li ><a href="home.php">Profile</a></li>
				
				<li><a href="logout.php">logout</a></li>
				
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
<!-- banner section -->


<style type="text/css">


body{
	margin:0;
	font-family: 'Roboto Condensed', sans-serif;
	
text-align:center;
background: url('images/home.jpg') no-repeat;
background-position: right top;
background-attachment: fixed;
background-repeat: no-repeat;
background-size: 100% 100%;

}
select{
width:80%;
	padding:10px;
	border:none;
	outline:none;
	border-top:1px solid #003b64;
	border-bottom:1px solid #003b64;
	background:transparent;
	margin:0 0px 40px 0px;
	color:#28a7e9;
}
	.cbImage {
  width: 500px;
  height: 800px;
  float: center;
  margin: 95px 0px 25px 0px;
  border: solid gray 1px;
  border-radius:5px;
  opacity: 0.9;
  filter: alpha(opacity=60);
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  text-align:center;
  background:#fff;
  padding:24px;
  cursor:pointer;
}
.cbImage h3{
	color:#003b64;
	font-size:25px;
	text-align:center;
	margin-bottom:40px;
	font-weight:400;
	text-transform:uppercase;
}
input[type="text"]{
	width:80%;
	padding:10px;
	border:none;
	outline:none;
	border-top:1px solid #003b64;
	border-bottom:1px solid #003b64;
	background:transparent;
	margin:0 0px 40px 0px;
	color: #28a7e9;
}
input[type="password"]{
	width:80%;
	padding:10px;
	border:none;
	outline:none;
	border-top:1px solid #003b64;
	border-bottom:1px solid #003b64;
	background:transparent;
	margin:0 0px 40px 0px;
	color:#28a7e9;
}
 ::-webkit-input-placeholder{
color: #28a7e9!important;
font-weight: 100px;
}
input[type="submit"]{
padding:8px 25px;
	background: #003b64;
	border:none;
	outline:none;
	border-top:2px solid #39eac3;
	border-bottom:2px solid #39eac3;
	display:block;
	width:30%;
	margin:0 auto;
	color: #fff;
	font-size:14px;
	cursor:pointer;
}
input[type="submit"]:hover{
border-top:2px solid #003b64;
	border-bottom:2px solid #003b64;
	background: #39eac3;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}
input[type="button"]{
	padding:8px 25px;
	background: #003b64;
	border:none;
	outline:none;
	border-top:2px solid #33accc;
	border-bottom:2px solid #33accc;
	display:block;
	width:60%;
	margin:0 auto;
	color: #fff;
	font-size:14px;
	cursor:pointer;
}
input[type="button"]:hover{
	border-top:2px solid #33accc;
	border-bottom:2px solid #33accc;
	background: #39eac3;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}
ul.bottom{
	margin-top:50px;
}
.cbImage ul li{
	display:inline;
}
.cbImage ul li a{
	display:inline-block;
	color:#ce3c31;
	font-size:14px;
}
.cbImage ul li a:hover{
	text-decoration:underline;
}
</style>









<div>
<body>
    <h1 style="color: #33accc">India Post Office register</h1>
<center>
                 <div class="cbImage " >
		<h3>Register</h3>
		<form action="#" method="post">
            <input type="text" name="pin"  placeholder="Enter pincode" required="">
			<input type="text" name="name"  placeholder="Enter Name" required="">
			<textarea    name="address" rows="2" cols="50" placeholder=" Address of postoffice" wrap="soft"></textarea><br><br>
			<input type="text" name="state"  placeholder="Enter state" required="">
			<input type="text" name="District"  placeholder="Enter District" required="">
			<select name="type" required=""> 
<option value="">Select type</option>
  
<option value="head post office">Head Post Office </option>
               
<option value="sub post office">Sub Post Office</option>
              
<option value="branch post office">Branch Post Office</option>
</select>
			<input type="submit" name="CREATE"   value="CREATE"><br>

                                                      

			
		</form>
	</div>







<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<script src="js/bgfader.js"></script>

<!-- /js files -->
</body>
</html>
		