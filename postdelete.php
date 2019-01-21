<?php
if(isset($_POST['submit'])){

session_start();
$uname = $_POST['post'];
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "delete from postajob where email = '$uname'";
$re = mysqli_query($c,$q);
if($re){
		
			
			echo "<script>alert('Deleted');</script>";
		
}
mysqli_close($c);



}


?>