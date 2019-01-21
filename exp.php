<?php
if(isset($_POST['exper'])){
	$a = $_POST['exper'];
	$b = $_POST['salar'];
	$c = $_POST['leve'];
	$d = $_POST['skls'];
	$e = $_POST['lookg'];
	$f = $_POST['ids'];
	$g = $_POST['cts'];
	$h = $_POST['mail'];

	$con = mysqli_connect("localhost","root","","rozeeroti");
	$q = "insert into professionalskills values ('$a','$b','$c','$d','$e','$f','$g','$h')";
	$re = mysqli_query($con,$q);
}
?>