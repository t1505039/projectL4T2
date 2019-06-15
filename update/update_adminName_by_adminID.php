<?php

$con=mysqli_connect("localhost","root","","khojo_db");
   
if($con)
{
	$id=$_GET['adminId'];
        $name=$_GET['adminName'];
	$q="UPDATE admin SET AdminName='$name' WHERE AdminId=$id";
	
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
