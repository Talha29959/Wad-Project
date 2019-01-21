<?php
mysql_connect("localhost","root","") or die("Server Error" . mysql_error());
mysql_select_db("rozeeroti") or die ("Error" . mysql_error());

$q = "Select email,qualification,qualification2 from postajob where careerlevel = 'professional'";
//$res = mysql_query($q) or die ("Query error<br>". mysql_error());
$table_data = array();
while ($row= mysql_fetch_array($q)){
	$table_data = (array('email'=>$row["email"],'qualification'=>$row["qualification"]));
}
echo json_encode($table_data);
?>