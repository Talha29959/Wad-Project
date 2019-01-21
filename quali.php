<?php
if(isset($_POST['email'])){
	$a = $_POST['email'];
	$b = $_POST['first'];
	$c = $_POST['last'];
	$da = $_POST['d'];
	$e = $_POST['gend'];
	$f = $_POST['mi'];
	
	$con = mysqli_connect("localhost","root","","rozeeroti");
	
	$q = "insert into qualfication values ('$a','$b','$c','$da','$e','$f')";
	$re = mysqli_query($con,$q);
	
}
?>