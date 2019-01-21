<!DOCTYPE html>
<html>
<head>
  <title>Login in Admin  account</title>
   <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="cache-control" content="no-cache" />
	  <meta http-equiv="pragma" content="no-cache" />
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
<body background="office.jpg" ;style="height:300px;width:400px">




<div class="container " >
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4 jumbotron text-center" style="background-color: #ffffff; opacity: .8; margin-top:90">
<a href = "home.html"><h2 >RozeeRoti.pk</h2></a>

<form method="post">
<div class="form-group">
<input type="text" class="form-control" placeholder="Email" id="em"
name="em" style="margin-top:50" onblur="checkemail()">
<p id="eres"></p>
</div>
<div class="form-group">
<input type="password" class="form-control" id ="pass"
name="pass" placeholder="Password">
</div>
<input name="submit" type="submit" value="Login">
</form>
<br>
<p >Don't have an account?<p>
<a href = "signup.html"><p >Sign Up</p></a>
<a href = "fogotpassword.html"><p >Forgot Password</p></a>
</div>
</div>
</div>
<div class="footer-bottom" style="background-color: white; opacity: .3">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright ">

					Copyright © 2017 ROZEERoti.PK -Jobs in Pakistan - All Rights Reserved.

				</div>

			</div>

			

		</div>

	</div>
	</div>
</body>

<?php if(isset($_POST['submit'])){
	session_start();
$uname = $_POST['em'];
$pass = $_POST['pass'];
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "select * from adminlogin where email = '$uname' and password ='$pass'";
$re = mysqli_query($c,$q);
if($re){
		if($da=$re->fetch_object()){
			$_SESSION['sesName'] = $da->email;
			echo "<script>location.href='adminpage.php'</script>";
		}
		else{
			echo "<script>alert('INVALID USERNAME AND PASSWORD');</script>";
		}
}
mysqli_close($c);
}
?>
</html>