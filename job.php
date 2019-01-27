<?php
if(isset($_POST['titl'])){
	$a = $_POST['titl'];
	$b = $_POST['des'];
	$c = $_POST['skils'];
	$d= $_POST['lvl'];
	$e = $_POST['cval'];
	$f = $_POST['jl'];
	$g = $_POST['stud'];
	$h = $_POST['rnk'];
	$i = $_POST['mexp'];
	$j = $_POST['xexp'];
	$k = $_POST['salary'];
	$l = $_POST['gender'];
	$m = $_POST['name2'];
	$n = $_POST['emails'];
	$o = $_POST['organiz'];
	$p = $_POST['pswd'];
	$q = $_POST['resmobile'];
	$r = $_POST['cty'];
	$s = $_POST['cnic'];
//	$e2 = $_POST['emails'];
//$q = "INSERT INTO info VALUES ('$enum','$fname','$lname')";
	$con = mysqli_connect("localhost","root","","rozeeroti");
	$q = "insert into postajob  values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s')";
//mysql_query($q) or die("Query error".mysql_error());
$y = "insert into login values ('$n','$p')";
//	$con = mysql_connect("localhost","root","","rozeeroti");

	$re = mysqli_query($con,$q);
	$re1 = mysqli_query($con,$y);
	if($re){
			echo "Account Created Successfully!!!!";
		}
		else{
			echo "Invalid Account!!!";
			}
	}
?>
