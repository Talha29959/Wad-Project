<!DOCTYPE html>
<html>
<head>
  <title>Login to your account</title>
   <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="cache-control" content="no-cache" />
	  <meta http-equiv="pragma" content="no-cache" />
	  <link rel="stylesheet" href="style1.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function checkemail(){
	var reM = /^\w+([\._]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var emm = document.getElementById('em').value;
	if(!reM.test(emm)){
		document.getElementById('eres').innerHTML = "Inavlid Mail";
	}
	else{
		document.getElementById('eres').innerHTML = "Valid Mail";
	}
	}
  
  </script>
</head>
<body class="sa_body">

<?php include 'header1.php';?>

<div  class="ibt-1">
<a href = "index.php"><h2 >RozeeRoti.pk</h2></a>

<form method="post">

<input type="text"  class="ibt-2" placeholder="Email" id="em"
name="em"  onblur="checkemail()">
<input type="password" class="ibt-2" id ="pass"
name="pass" placeholder="Password">

<input name="submit" type="submit" class="ibt-3" value="Login">

<br><br>
<p >Don't have an account?<p>
<a href = "signup.html"><p >Sign Up</p></a>
<a href = "fogotpassword.html"><p >Forgot Password</p></a>
</form>
</div>
</body>



<?php if(isset($_POST['submit'])){
	session_start();
$uname = $_POST['em'];
$pass = $_POST['pass'];
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "select * from personalinformation where email = '$uname' and password ='$pass'";
$re = mysqli_query($c,$q);
if($re){
		if($da=$re->fetch_object()){
			$_SESSION['sesName'] = $da->email;
			echo "<script>location.href='srch.php'</script>";
		}
		else{
			echo "<script>alert('INVALID USERNAME AND PASSWORD');</script>";
		}
}
mysqli_close($c);
}
?>
</html>