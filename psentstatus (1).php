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

</style>
<!-- /js files -->
</head>
<body>
<!-- navigation -->
</style>

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
  width: 900px;
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
.tt{
  text-align: center;
  border-right: 5px;

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
  padding: 25px;

}
tr:nth-child(even)
{
  background-color: #f2f2f2;
}
table{
  
  border: solid gray 1px;
  border-radius:5px;
 width: 700px;
 overflow: auto;
display:text-align: ;
  opacity: 0.8;
  filter: alpha(opacity=60);
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
float: center;
  text-align:center;
  background:#fff;
  padding:24px;
  cursor:pointer;

}


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
        <li  ><a href="homep.php">Home</a></li>
        
        <li  ><a href="add.php">Locality</a></li>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROCESS<b class="caret"></b></a>
          <div class="dropdown-menu">
            <div class="track-w3ls">
              <a href="psent.php">SENT</a><br>
              <a href="posearch.php">SEARCH</a>
            </div>
          </div>
        </li>
        <li class="active" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">STATUS<b class="caret"></b></a>
          <div class="dropdown-menu">
            <div class="track-w3ls">
              <a href="psentstatus.php">SENT STATUS</a><br>
              <a href="rsentstatus.php">RECEIVE STATUS</a>
            </div>
          </div>
        </li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">UNIQUE ID<b class="caret"></b></a>
          <div class="dropdown-menu">
            <div class="track-w3ls">
              <a href="uidsearch.php">UPDATE</a><br>
              <a href="uidsearchp.php">SEARCH</a>
            </div>
          </div>
        </li>
                
                
        
        <li><a href="logout.php">logout</a></li>
        
      </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>




<div>
<body>
    <h1 style="color: #33accc">India Post Office register</h1>
<center>
<center>
<div class="cbImage">
  <h1>Postal Order status</h1>
  <br>
  
  



<?php
  $start=0;
$limit=20;

    if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
}
else{
  $id=1;
}


$iiid=$_SESSION['user'];

$sql="Select * FROM admin Where id='$iiid'  ";
$new=mysqli_query( $conn,$sql );
  $numrows=mysqli_num_rows($new);
  $rows=mysqli_fetch_array($new);
  $pid=$rows['ppin'];
$sqls="Select * FROM process Where spid='$pid' ORDER BY id DESC LIMIT $start,$limit";
$news=mysqli_query( $conn,$sqls );
  $numrows=mysqli_num_rows($news);

 if($numrows!==0)
   {
    echo "<center><table cellpadding='5px' border='5px' cellspacing='5px'>";
     echo "<center>";
  echo "<tr>";
           
            echo "<th>"."FROM"."</th>";
            echo "<th>"."TO"."</th>";
            echo "<th>"."FROM POST"."</th>";
            echo "<th>"."TO POST"."</th>";
            echo "<th>"."STATUS"."</th>";
            echo "<th>"."SENT DATE"."</th>";
while($row=mysqli_fetch_array($news))
{ echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 echo "<tr>";
 if($row["status"]==1){
              $st="Sented";}
              if($row["status"]==2){
             $st="Received";}
              if($row["status"]==3){
              $st="Delivered";}
           
            echo "<td>".$row["suid"]."</td>";
            echo "<td>".$row["ruid"]."</td>";
             echo "<td>".$row["spid"]."</td>";
            echo "<td>".$row["rpid"]."</td>";
            echo "<td>".$st."</td>";
            echo "<td>".$row["sdate"]."</td>";
            

}


}


?>
<center>
<div class="cbImage2" >
<?php

  

$ssql="Select * FROM process Where spid='$pid'";
$query=mysqli_query($conn,$ssql);
$rows=mysqli_num_rows($query);

$total=ceil($rows/$limit);
?>
<ul class="pagination">
<?php

if($id>1)
{

  echo "<br>";
  echo "<li style color:#28a7e9;><h3><a  href='?id=".($id-1)."' class='button'>finish</a></h3></li>";
}
if($id!=$total)
{

  echo "<li><h3><a style color:#28a7e9; href='?id=".($id+1)."' class='button'>>></a></li>";
}


for($i=1;$i<=$total;$i++)
    {
      if($i==$id) { echo "<li ><a   class='button'>$i</li>"; }
      
      else { echo "<li class='active'; style color:#28a7e9;><a href='?id=".($i)."'>".$i."</a></h3></li>"; }
    
}

      
      ?>
 
 </ul> </div>



</div>

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
    