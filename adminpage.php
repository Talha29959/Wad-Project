<html lang="en">
<head>
  <title>Education and Academia Jobs in Pakistan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<script>
$(document).ready(function(){
  $("#demo").on("hide.bs.collapse", function(){
    $(".clp").html('<span class="glyphicon glyphicon-collapse-down"></span> Job Title');
  });
  $("#demo").on("show.bs.collapse", function(){
    $(".clp").html('<span class="glyphicon glyphicon-collapse-up"></span> Job Title');
  });
});
</script>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<meta name="description" content="Glyphicon support for Twitter's Bootstrap">
<style>

#boder{
	border: 1px solid; border-color: black;background-color: white; border-radius: 1px;padding: 4px 8px;
}
.data-toggle{
    display: inline-block;   
}

</style>
</head>
<?php
session_start();
if($_SESSION['sesName']){
$na = $_SESSION['sesName'];		
}
else{
	header('Location: index.php');
}
?>
<BODY style="background-color: lightgray">
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top:0;margin-bottom: 30">
<div class="container-fluid">
	<div class="navbar-header">
	<b><a class="navbar-brand" href="index.php">RozeeRoti.pk</a></b>
	</div>

  <ul class="nav navbar-nav navbar-right">  
  
  <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LOGOUT</a></li>
  
  </ul>
	
	</div>
</nav>
<br>
<br>
<div id="boder" style="margin-left: 220px;margin-right: 430px; margin-top: 100px">
<input type="text" name="search" style="background-color: white;width: 180px; height: 50px; font-size: 14" placeholder="Job Title, Skill or Company" >
<select style="height:50px;width: 130px;background-color: white; margin-left: 10px">
  <option value="city" selected>Functional Area</option>
  <option value="abt" >Administration</option>
  <option value="blpr" >Client Services</option>
  <option value="chnt" >Computer Network</option>
  <option value="dikhan" >Data Entry</option>
  <option value="fsbd" >Engineering</option>
  <option value="gujr">Executive Manager</option>
  <option value="isl" >Field Operation</option>
  <option value="lhr" >Intern</option>
</select>

<select style="height:50px;width: 110px;background-color: white;; margin-left: 10px">
  <option value="city" selected>City</option>
  <option value="abt" >Abbottabad</option>
  <option value="blpr" >Bahawalpur</option>
  <option value="chnt" >Chinniot</option>
  <option value="dikhan" >D.I.Khan</option>
  <option value="fsbd" >Faislabad</option>
  <option value="gujr">Gujranwala</option>
  <option value="isl" >Islamabad</option>
  <option value="lhr" >Lahore</option>
</select>

<select style="height:50px;width: 110px; margin-left: 10px">
<option value="min" style="background-color: white;">Min. Salary </option>
<option value="15000">15,000</option>
<option value="20000">20,000</option>
<option value="25000">25,000</option>
<option value="30000">30,000</option>
<option value="35000">35,000</option>
<option value="40000">40,000</option>
<option value="45000">45,000</option>
</select>
<button class="btn btn-outline-success btn-lg" style="text-align: center;border-radius: 2px; height: 50px; width: 80px; background-color: blue; font-size: 20; color: white; margin-left: 10px"><span class="glyphicon glyphicon-search"></span>
</button>
</div>
<div class="container" style="margin-top: 60; margin-left: 0px">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-3" >

<ul id="boder" style="margin-left: 10; margin-top: 0; margin-right: 55;">

<div class="container">
    <h4 id="clp"  data-toggle="collapse" data-target="#demo">Job Title
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 30px"></span>
    </h4>
    <input type="checkbox" name="" value="callcenter">Call Center Agent<br>
    <input type="checkbox" name="" value="it">IT Faculty<br>
    <input type="checkbox" name="" value="hr">HR Manager<br>
  <div id="demo" class="collapse">
   <input type="checkbox" name="" value="art">Arts Teacher<br>
   <input type="checkbox" name="" value="librarian">Assistant Librarian<br>
   <input type="checkbox" name="" value="cad">Auto Cad<br>
  </div>

  <div class="container" style="margin-left: -20px">
    <h4 id="exp"  data-toggle="collapse" data-target="#exp1" >Experience
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="callcenter">Fresh<br>
    <input type="checkbox" name="" value="it">Less than 1 Year<br>
    <input type="checkbox" name="" value="hr">2 Years<br>
  <div id="exp1" class="collapse">
   <input type="checkbox" name="" value="art">3 Years<br>
   <input type="checkbox" name="" value="librarian">4 Years<br>
   <input type="checkbox" name="" value="cad">5 Years<br>
  </div>
  <div class="container" style="margin-left: -15px">
    <h4 id="jb"  data-toggle="collapse" class="collapse-left" data-target="#jb1" >Job Type
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="fulltime">Full Time/Permanent<br>
    <input type="checkbox" name="" value="contract">Contract<br>
  <div id="jb1" class="collapse">
    <input type="checkbox" name="" value="pt">Part Time<br>
    <input type="checkbox" name="" value="interns">Internship<br>
  </div>
  <div class="container" style="margin-left: -15px">
    <h4 id="cty"  data-toggle="collapse" data-target="#cty1" >City
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="lhr">Lahore<br>
    <input type="checkbox" name="" value="karch">Karachi<br>
    <input type="checkbox" name="" value="fsbd">Faislabad<br>
  <div id="cty1" class="collapse">
   <input type="checkbox" name="" value="isl">Islamabad<br>
   <input type="checkbox" name="" value="abtbd">Abbottabad<br>
   <input type="checkbox" name="" value="khn">D.I. Khan<br>
  </div>
  <div class="container" style="margin-left: -15px">
    <h4 id="sk"  data-toggle="collapse" data-target="#sk1" >Skills
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="comun">Communication Skills<br>
    <input type="checkbox" name="" value="wrt">Writing Skills<br>
    <input type="checkbox" name="" value="teach">Teaching<br>
  <div id="sk1" class="collapse">
   <input type="checkbox" name="" value="cmptkn">Computer Knowledge<br>
   <input type="checkbox" name="" value="intper">Interpersonal Skills<br>
   <input type="checkbox" name="" value="master">Masters<br>
  </div>
  
  <div class="container" style="margin-left: -15px">
    <h4 id="cr"  data-toggle="collapse" data-target="#cr1" >Career Level
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="expprof">Experienced Professional<br>
    <input type="checkbox" name="" value="entl">Entry Level<br>
  <div id="cr1" class="collapse">
   <input type="checkbox" name="" value="dphead">Department Head<br>
   <input type="checkbox" name="" value="intpens">Intern/Student<br>
  </div>
<div class="container" style="margin-left: -15px">
    <h4 id="ind"  data-toggle="collapse" data-target="#ind1" >Industry
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="edu">Education/Training<br>
    <input type="checkbox" name="" value="conslt">Consultants<br>
    <input type="checkbox" name="" value="it">Information Technology<br>
  <div id="ind1" class="collapse">
   <input type="checkbox" name="" value="serv">Services<br>
   <input type="checkbox" name="" value="textil">Textiles/Garments<br>
   <input type="checkbox" name="" value="calcent">Call Center<br>
  </div>
  
<div class="container" style="margin-left: -15px">
    <h4 id="gnd"  data-toggle="collapse" data-target="#dnd1" >Gender
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="pfr">No Preference<br>
  <div id="dnd1" class="collapse">
   <input type="checkbox" name="" value="mal">Male<br>
   <input type="checkbox" name="" value="fem">Female<br>
  </div>
  <div class="container" style="margin-left: -15px">
    <h4 id="fa"  data-toggle="collapse" data-target="#fa1" >Functional Area
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="educ">Education/Training<br>
    <input type="checkbox" name="" value="hr">Human Resources<br>
    <input type="checkbox" name="" value="sal">Sales & Business  <br>
  <div id="fa1" class="collapse">
   <input type="checkbox" name="" value="oper">Operations<br>
   <input type="checkbox" name="" value="resr">Researcher<br>
   <input type="checkbox" name="" value="adminis">Administration<br>
  </div>
  
  <div class="container" style="margin-left: -15px">
    <h4 id="cmp"  data-toggle="collapse" data-target="#cmp1" >Company
      <span class="glyphicon glyphicon-collapse-down" style="margin-left: 20px"></span>
    </h4>
    <input type="checkbox" name="" value="hue">HUES<br>
    <input type="checkbox" name="" value="afq">Afaq(G) Ltd<br>
    <input type="checkbox" name="" value="yosf">Yousaf School System  <br>
  <div id="cmp1" class="collapse">
   <input type="checkbox" name="" value="orc">Orchid and Co<br>
   <input type="checkbox" name="" value="trd">A.H Trading<br>
   <input type="checkbox" name="" value="finc">Finca Microfinance Bank<br>
  </div>

  <button  type="button" style="margin-top: 10px; background-color: blue; color: white;border: 1px solid;height: 40px;width: 70px;margin-left: 20px"> Search</button>
</div>

<br>
<br>
</ul>
</div>

<div class="col-md-6">

<div style="margin-left: 0; margin-top: 0">
<ul id="boder" style="margin-left: -60; margin-right: 130; margin-top: 0;">
<img src="images/rozeetarbiat.jpg" height="60" width="468" style=" background-attachment: fixed;">
</ul>
<form method="post">
<h3>To delete the post a job record</h3>
<input type="text" id ="post" placeholder="Enter Email" name="post" style="width:300; height:35;
	color:black;font-size:15"><br>
	<button class="btn btn-outline-success btn-lg" style="text-align: center;margin-top:10;border-radius: 2px;
 height: 40px; width: 100px; background-color: blue; font-size: 15; color: white" type="submit" name="submit">
Delete
</button>
	</form>

<form method="post">
<h3>To update the job title</h3>
<input type="text" placeholder="Enter Email" id ="post" name="post1" style="width:300px; height:35;
	color:black;font-size:15">
<input type="text" placeholder="Enter Job title" id ="post" name="post2" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<br>
	<button class="btn btn-outline-success btn-lg" style="text-align: center;margin-top:10;border-radius: 2px;
 height: 40px; width: 100px; background-color: blue; font-size: 15; color: white" type="submit" name="submit2">
Update
</button>
	</form>

<form method="post">
<h3>To Post a New job</h3>
<input type="text" placeholder="Enter Email" id ="post" name="post1" style="width:300px; height:35;
	color:black;font-size:15">
<input type="text" placeholder="Enter Job title" id ="post" name="post2" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Job description" id ="post" name="post3" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Skills" id ="post" name="post4" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Career Level" id ="post" name="post5" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Position" id ="post" name="post6" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Job Location" id ="post" name="post7" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Qualification" id ="post" name="post8" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Qualification2" id ="post" name="post9" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Minimum Experience" id ="post" name="post10" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Maximum Experience" id ="post" name="post11" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Salary" id ="post" name="post12" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Gender" id ="post" name="post13" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<input type="text" placeholder="Enter Name" id ="post" name="post14" style="width:300px; height:35;
	color:black;font-size:15;margin-top:10px">
<br>
	<button class="btn btn-outline-success btn-lg" style="text-align: center;margin-top:10;border-radius: 2px;
 height: 40px; width: 100px; background-color: blue; font-size: 15; color: white" type="submit" name="submit3">
Insert
</button>
	</form>

</BODY>

<?php
if(isset($_POST['submit3'])){
session_start();
$uname = $_POST['post1'];
$uname2=$_POST['post2'];
$uname3=$_POST['post3'];
$uname4=$_POST['post4'];
$uname5=$_POST['post5'];
$uname6=$_POST['post6'];
$uname7=$_POST['post7'];
$uname8=$_POST['post8'];
$uname9=$_POST['post9'];
$uname10=$_POST['post10'];
$uname11=$_POST['post11'];
$uname12=$_POST['post12'];
$uname13=$_POST['post13'];
$uname14=$_POST['post14'];

$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "INSERT INTO postajob (jobtitle, jobdescription, skills, careerlevel, position, joblocation,qualification,qualification2,expmin,expmax,salary,gender,name,email)
VALUES ('$uname2', '$uname3','$uname4','$uname5','$uname6','$uname7','$uname8','$uname9','$uname10','$uname11','$uname12','$uname13','$uname14','$uname')";
$re = mysqli_query($c,$q);
if($re){
			echo "<script>alert('Inserted');</script>";
}
mysqli_close($c);
}
?>

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

<?php
if(isset($_POST['submit2'])){

session_start();
$uname = $_POST['post1'];
$uname2=$_POST['post2'];
$c = mysqli_connect("localhost","root","","rozeeroti");
$q = "update postajob set jobtitle='$uname2'where email = '$uname'";
$re = mysqli_query($c,$q);
if($re){
			echo "<script>alert('Updated');</script>";
}
mysqli_close($c);
}
?>


</html>


