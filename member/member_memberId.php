<?php

$con=mysqli_connect("localhost","root","","khojo_db");
   
if($con)
{
	$q="SELECT MemberId FROM member";
	$res= mysqli_query($con,$q);
	if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) { 
            echo $row['MemberId']; 
			echo "##";  #tokenizing seperator 
        }  
         
    }
	
}else
{
	echo "conn fail";
}
mysqli_close($con);
?>
