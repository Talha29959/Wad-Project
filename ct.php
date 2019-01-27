<?php
if(isset($_POST['submit'])){

session_start();
$uname = $_POST['search'];
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "select qualification,skills,jobtitle from postajob where jobtitle = '$uname'";
$re = mysqli_query($c,$q);
if($re){
		if($da=$re->fetch_object()){
			$_SESSION['sesName'] = $da->organization;
			echo "<script>location.href='src.php'</script>";
		}
}
mysqli_close($c);



}


?>