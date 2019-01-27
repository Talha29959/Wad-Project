<?php

if(isset($_POST['user'])){
	$use = ($_POST['user']);
	$passwor = ($_POST['passw']);
	
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "select username from login where username = '$use' and password ='$passwor'";
$re = mysqli_query($c,$q);
if($re){
		if($da=$re->fetch_object()){
			$_SESSION['sesName'] = $da->username;
					return true;
		}
		else{
			echo "<script>alert('INVALID USERNAME AND PASSWORD');</script>";
			return false;
		}
}
mysqli_close($c);
}
}

?>