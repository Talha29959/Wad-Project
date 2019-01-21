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

<nav class="navbar navbar-inverse navbar-fixed-top" style="margin: 0">
    <div class="container-fluid">
        <div class="navbar-header col-">
            <b><a class="navbar-brand" href="index.html">RozeeRoti.pk</a></b>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active col-"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="col-"><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden=true></span> Free CV Review</a></li>
            <li class="col-"><a href="postjob.html">Post a Job</a></li>
            <li class="col-"><a href="contactus.html"><span class="glyphicon glyphicon-info-sign"></span>ABOUT US</a></li>
            <li class="col-"><a href="login.php"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
            <li class="col-"><a href="signup.html"><span class="glyphicon glyphicon-log-in"></span>SIGN UP</a></li>
        </ul>
    </div>
</nav>



<div  class="ibt-1">
<a href = "home.php"><h2 >RozeeRoti.pk</h2></a>

<form method="post">

<input type="text"  class="ibt-2" placeholder="Email" id="em"
name="em"  onblur="checkemail()">
<input type="password" class="ibt-2" id ="pass"
name="pass" placeholder="Password">

<input name="submit" type="submit" class="ibt-3" value="Login">

<br>
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