<?php

$con=mysqli_connect("localhost","root","","khojo_db");
   
if($con)
{
	$id=$_GET['email_Phone'];
	$q="SELECT AdminName FROM admin WHERE Email_Phone='$id'";
	$res= mysqli_query($con,$q);
	if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) { 
            echo $row['AdminName']; 
			#echo "\n"; 
        }  
         
    }
	
}else
{
	echo "conn fail";
}
mysqli_close($con);
?>
