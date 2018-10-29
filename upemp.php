<?php

session_start();
include("dbConfig.php");
if(!isset($_SESSION['user']))
{
  header("Location: index.php");
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
u{
  color: #28a7e9;
}

ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: #28a7e9;
    font-weight: 1000px;
    float: left;
    font-weight: 1000px;
    padding: 8px 16px;
    opacity: 1px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination li:first-child a {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination li:last-child a {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

ul.pagination li a.active {
    background-color: #28a7e9;
    color: white;
     text-decoration: none;
    border: 1px solid: #28a7e9;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;
text-decoration: none;}

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
				<li  ><a href="home.php">Home</a></li>
				
				<li  class="active" class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Employee<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="admin.php">REGISTER</a><br>
							<a href="upemp.php">UPDATE</a><br>
							<a href="upemps.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post office<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="posta.php">REGISTER</a><br>
							<a href="psearch.php">UPDATE</a><br>
							<a href="search.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">unique id<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							
							<a href="auidsearch.php">UPDATE</a><br>
							<a href="auidsearchp.php">SEARCH</a>
						</div>
					</div>
				</li>
								
				
				<li><a href="logout.php">logout</a></li>
				
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


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
  height: 300px;
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
.cbImage2 {
  width: 800px;
  height: 400px;
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
th{
	background-color: #28a7e9;
	color: #fff

}
tr
{
	color: #28a7e9;
	max-height: 3px;
	overflow: scroll;

}

th,tr
{
	text-align: center;
	padding: 15px;

}
tr:nth-child(even)
{
	background-color: #f2f2f2;
}
 border: solid gray 1px;
  border-radius:5px;
 width: 700px;
 overflow: auto;
display:inline-table;
  opacity: 0.8;
  filter: alpha(opacity=60);
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
float: left;
  text-align:center;
  background:#fff;
  padding:24px;
  cursor:pointer;


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
<center>
<div class="cbImage " >
   <?phpif(ISSET($_POST["find"])!="find" ){?>
		<form action="#" method="post">
<select name="value" required=""> 
 <option value="">Select type</option> 
<option value="usid">User ID code </option>
<option value="phn">Phone No</option>
<option value="ppin">Post Pin</option>


</select>
<input type="submit" name="search" value="search">
	</form>

	<br>
<?php
if(ISSET($_POST["search"])=="search"){

if ($_POST["value"]=="usid") {
	?>
	<form action="#" method="post"> 
	<input type="hidden" name="hh" value ="<?php echo$_POST["value"]  ;?>">
		<input type="text" name="vv" placeholder="User ID">
<input type="submit" name="find" value="find">

	</form>

<?php }?>
<?php

if ($_POST["value"]=="ppin") {
	?>
	<form action="#" method="post"> 
	<input type="hidden" name="hh" value ="<?php echo$_POST["value"]  ;?>">
		<input type="text" name="vv" placeholder="Post Pin">
<input type="submit" name="find" value="find">

	</form>

<?php }?>
<?php

if ($_POST["value"]=="phn") {
	?>
	<form action="#" method="post"> 
	<input type="hidden" name="hh" value ="<?php echo$_POST["value"]  ;?>">
		<input type="text" name="vv" placeholder="Phone No">
<input type="submit" name="find" value="find">

	</form>

<?php }}?>



</div>
</center>

	</div>

<?php
	$start=0;
$limit=10;

    if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
}
else{
  $id=1;
}





if(ISSET($_POST["find"])=="find"||isset($_GET['id'])){

 if(isset($_GET['hh']))
{
  $h=$_GET['hh'];
  $v=$_GET['vv'];
}
else{
  $h=$_POST["hh"];

$v=$_POST["vv"];

}


$sql=" SELECT * FROM admin where $h='$v' LIMIT $start,$limit ";
$new=mysqli_query( $conn,$sql );
$numrow=mysqli_num_rows($new);
?>
<center>
<div class="cbImage2" >
<?php
echo "<br><br><br>";
    if($numrow!==0)
   {  echo "<tbody>";
   	echo "<center><table  cellpadding='3px' cellspacing='3px'><tr><th>ID</th><th>NAME</th><th>ROLE</th><th>PHONE</th><th> POST ID</th><th>UPDATE</th>";
    
while($row=mysqli_fetch_array($new)) {         
            echo "<tr>";
            echo "<td>".$row['usid']."</td>";
            echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['role']."</td>";
            echo "<td>".$row['phn']."</td>";  
            echo "<td>".$row['ppin']."</td>";  
             
                  
            echo "<td><a class='up' href=\"edite.php?id=$row[id]\" >Edit</a> | <a class='up' href=\"deletee.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
   

  	echo "</tbody>";
   	        echo "</table><br><br>";

$ssql="SELECT * FROM admin where $h='$v' ";
$query=mysqli_query($conn,$ssql);
$rows=mysqli_num_rows($query);

$total=ceil($rows/$limit);
?>
<ul class="pagination">
<?php

if($id>1)
{

  echo "<br>";
  echo "<li style color:#28a7e9;><h3><a  href='?id=".($id-1)."&&hh=".$h."&&vv=".$v."' class='button'>finish</a></h3></li>";
}
if($id!=$total)
{

  echo "<li><h3><a style color:#28a7e9; href='?id=".($id+1)."&&hh=".$h."&&vv=".$v."' class='button'><<</a></li>";
}


for($i=1;$i<=$total;$i++)
    {
      if($i==$id) { echo "<li ><a   class='button'>$i</li>"; }
      
      else { echo "<li class='active'; style color:#28a7e9;><a href='?id=".($i)."&&hh=".$h."&&vv=".$v."'>".$i."</a></h3></li>"; }
    }
}

      }
      ?>
 
 </ul> </div>

<?php}?>


</center>


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
		