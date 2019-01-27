<?php
session_start();
if(isset($_GET['del_pro'])){
$con = mysqli_connect("localhost","root","","rozeeroti");
    $del_id = $_GET['del_pro'];
    $del_pro = "delete from postajob where email='$del_id'";
    $run_del = mysqli_query($con,$del_pro);
    if($run_del){
        header('location: adminlogin.php');
    }
}

