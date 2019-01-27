<?php
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = mysqli_query($c,"select email,qualification,qualification2 from postajob where careerlevel='professional'");
$table_data = array();
while($row= mysqli_fetch_array($q)){
	$table_data = (array('email'=>$row["email"],'qualification'=>$row["qualification"]));
}
echo json_encode($table_data);

?>