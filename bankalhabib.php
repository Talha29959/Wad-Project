
<?php


$host="localhost";
$username="root";
$pass="";
$dbname="rozeeroti";

$con = mysqli_connect("$host","$username","");
mysqli_select_db($con,"rozeeroti");
$q = "Select jobtitle,jobdescription,skills,qualification from postajob where organization ='bank al habib'";
$res = $con->query($q);
//$res = mysqli_query($q) or die ("Query error<br>". mysqli_error());
?>
<?php
while ($ro = $res->fetch_assoc()) {?>
 <br>
<ul id ='boder' style="margin-left: -60; margin-right: 130; margin-top: 10;"><p> A company wants  <?php echo $ro['jobdescription']?> and have these skills <?php echo $ro['skills'] ?> want minimum qualification  <?php echo $ro['qualification']?></p></ul>
<?php
}?>
