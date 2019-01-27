<?php

session_start();
$u =$_POST['user'];
$p =$_POST['pas'];
$c = mysqli_connect("localhost","root","","rozeeroti");

echo "<script>alert('$u')</script>";
$q = "SELECT * FROM personalinformation WHERE email = '$u' AND password ='$p'";
$re = mysqli_query($c,$q);

if($re->num_rows>=1){
		$_SESSION['email']=$u;
		echo 1;
}
else
{
	echo false;
}
mysqli_close($c);

?>