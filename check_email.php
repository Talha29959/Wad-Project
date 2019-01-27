<?php
$con = mysqli_connect("localhost","root","","rozeeroti");
if(!$con)
    die("Connection failed");
$e = $_REQUEST["e"];
$sel_email = "select * from personalinformation where email= '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Already registered";
else
echo "No";
    ?>