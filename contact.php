<?php
if(isset($_POST['name1'])){
	$name = $_POST['name1'];
	$email = $_POST['mail'];
	$num = $_POST['number'];
	$categ = $_POST['categor'];
	$msg = $_POST['mag'];

	$con = mysqli_connect("localhost","root","","rozeeroti");
	$q = "insert into contactus values ('$name','$email','$num','$categ','$msg')";
	$re = mysqli_query($con,$q);
}
?>