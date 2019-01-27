<?php
if(isset($_POST['email'])){
	$a = $_POST['email'];
	$b = $_POST['first'];
	$c = $_POST['last'];
	$da = $_POST['d'];
	$e = $_POST['gend'];
	$e2 = $_POST['nation'];
	$e1 = $_POST['mob'];
	$e3 = $_POST['passwo'];
	
	
	$con = mysqli_connect("localhost","root","","rozeeroti");
	$q = "insert into personalinformation values ('$a','$b','$c','$da','$e','$e2','$e1','$e3')";
        $l=  "insert into login values('$a','$e3')";
	$re = mysqli_query($con,$q);
        $rl= mysqli_query($con,$l);
}
?>