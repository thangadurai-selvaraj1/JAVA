<?php
include("dbConfig.php");




	
if(ISSET($_POST["submit"])=="Continue")
	
{


	$uid= $_POST["uid"];
	$pass=$_POST["password"];
	$sql=" SELECT * FROM login WHERE uid='$uid' ";
	$new=mysqli_query( $conn,$sql );
	$numrow=mysqli_num_rows($new);
	$row=mysqli_fetch_assoc ( $new );
	$role=$row ["role"];

	
	


	if ($role=="admin") 
	{
		if($numrow!==0)
  			 {
   	
   	 	$id=$row["id"];
   	 	$rid=$row["rid"];
   	 	$dbuid=$row["uid"];
   	 	$dbpass=$row["phn"];
   	 	   
			if($dbuid==$uid && $dbpass==$pass )
				{
				session_start();
				$_SESSION["user"] = $rid;
				

				header("location:home.php");
		
		
				}
				else
				{		?>
				<script type="text/javascript">
				alert("INCORRECT PASSWORD ");
				window.location="index.php"	;			</script>
				<?php

				}
			}

		}	

	elseif ($role=="sub post office"||$role=="branch post office"||$role=="head post office") 
	{
		if($numrow!==0)
  			 {
   	
   	 	$id=$row["id"];
   	 	$rid=$row["rid"];

   	 	$dbuid=$row["uid"];
   	 	$dbpass=$row["phn"];
   	 	   
			if($dbuid==$uid && $dbpass==$pass )
				{
				session_start();
				$_SESSION["user"] = $rid;
				

				header("location:homep.php");
		
		
				}
				else
				{		?>
				<script type="text/javascript">
				alert("INCORRECT PASSWORD ");
				window.location="index.php"	;			</script>
				<?php

				}
			}

		}	












		else
					{
			
					?>
				<script type="text/javascript">
				alert("INCORRECT UNIQUE ID ");
				window.location="index.php"	;
				</script>
				<?php
		
	
		
		}	






}











////post



?>