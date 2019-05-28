<?php

$con=mysqli_connect("localhost","root","","khojo_db");
   
if($con)
{
	$id=$_GET['adminId'];
	$q="SELECT Login_stat FROM admin WHERE AdminId='$id'";
	$res= mysqli_query($con,$q);
	if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) { 
            echo $row['Login_stat']; 
			#echo "\n"; 
        }  
         
    }
	
}else
{
	echo "conn fail";
}
mysqli_close($con);
?>