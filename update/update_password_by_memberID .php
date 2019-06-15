<?php

$con=mysqli_connect("localhost","root","","khojo_db");
   
if($con)
{
	$id=$_GET['memberId'];
        $name=$_GET['password'];
	$q="UPDATE member SET Password='$name' WHERE MemberId=$id";
	
	if ($con->query($q) === TRUE) {
		echo "success";
	} else {
		echo "fail";
	}
	
}else
{
	echo "conn fail";
}
mysqli_close($con);
?>
