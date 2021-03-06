﻿<!DOCTYPE html>
<html lang="en">
<head>
  <title>RozeeRoti Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">
<meta name="description" content="Glyphicon support for Twitter's Bootstrap">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

 <?php include 'header1.php';?>

<div class="jumbotron text-center" style="background-image: url('images/g.jpg');height: 100%; width: 100%;background-position: center;background-size: cover;background-repeat: repeat;">
<h1 class="col-lg-12 col-s-12" style="color: darkgray">One million success stories.</h1>
<h2 class="col-lg-12" style="color: darkgray">Start yours today.</h2>
<br>
<br>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content col-lg-12">
  <form method="post" action="ct.php">
  <input class="sa" class="sa1" type="text" name="search" placeholder="Job Title,Skill or Company" size="48"  maxlength="20">
  <select class="sa">
  <option value="min" style="width: 50px">Min. Salary </option>
  <option value="15000">15,000</option>
  <option value="20000">20,000</option>
  <option value="25000">25,000</option>
  <option value="30000">30,000</option>
  <option value="35000">35,000</option>
  <option value="40000">40,000</option>
  <option value="45000">45,000</option>
  </select>
  <select class="sa col-">
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
  <button class="btn btn-outline-succes " type="submit" name="submit">Search</button>
  </form>
  </div>
</div>

<input class="sa" class="sa1" type="text" name="search" placeholder="Job Title,Skill or Company" onclick="openNav()" size="48"  maxlength="20">

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="signup.html">
<img id="circle-img" src="images/getstarted.png">
<p style="color: white; text-decoration-line: underline; text-decoration-style: double;">Get Started</p>
</a>
</div>

<div id="container">

    <div class="photobanner col-lg-12">
      <img class="first" src="images/daewoo.jpg" alt="" height="50px" width="150px" title="Daewoo Express" class="boder" />
      <img src="images/finca.png" alt="" height="50px" width="150px" title="Finca" class="boder" />
      <img src="images/berger.jpg" alt="" height="50px" width="150px" title="Berger" class="boder"/>
      <img src="images/dawlance.png" alt="" height="50px" width="150px" title="Dawlance" class="boder" />
      <img src="images/qarshi.png" alt=""  height="50px" width="150px" title="Qarshi" class="boder" />
      <img src="images/summit.png" alt="" height="50px" width="150px" title="Summit Bank" class="boder" />
      <img src="images/hum.jpg" alt="" height="50px" width="150px" title="HUM Tv" class="boder" />
      <img src="images/luckycement.png" alt="" height="50px" width="150px" title="Lucky Cement" class="boder" />
      <img src="images/daewoo.jpg" alt="" height="50px" width="150px" title="Daewoo Express" class="boder" />
      <img src="images/finca.png" alt="" height="50px" width="150px" title="Finca" class="boder" />
      <img src="images/berger.jpg" alt="" height="50px" width="150px" title="Berger" class="boder" />
      <img src="images/dawlance.png" alt="" height="50px" width="150px" title="Dawlance" class="boder" />
      <img src="images/qarshi.png" alt=""  height="50px" width="150px" title="Qarshi" class="boder" />
    </div>

</div>

<ul class="nav nav-tabs" style="background-color: #1167c2; margin-top:0; color: black">
<li class="col-lg-3"><h3 style="color: white; margin-left: 15px">  Browse Jobs in Pakistan</h3></li>
<li class="col-lg-2" style="margin-left:30px "> <a href="#byfunctions" data-toggle="tab"><h4 style="color: darkgray">By Functions</h4> </a></li>
<li class="col-lg-2"> <a href="#bycity" data-toggle="tab"><b><h4 style="color: darkgray">By City</h4></b></a></li>
<li class="col-lg-2"> <a href="#byindustry" data-toggle="tab"><h4 style="color: darkgray">By Industry</h4></a></li>
<li class="col-lg-2"> <a href="#bycompany" data-toggle="tab"><h4 style="color: darkgray">By Company</h4></a></li>
</ul>

<div class="vid" col-lg-9>

<div class="tab-content">
<div id="byfunctions" class="tab-pane fade in active">
<div class="container" style="background-color: white; color: black">
<div class="row">
<div class="col-lg-3">
<ul>
<a href="sales.php"><h5 style="margin-top: 22px" title="Sales">Sales (345)</h5></a>
<a href="accounts.php"><h5 style="margin-top: 22px" title="Accounts">Accounts & Finance (345)</h5></a>
<a href="admin.php"><h5 style="margin-top: 22px" title="Administration">Administration (345)</h5></a>
</ul>
</div>

<div class="col-md-3">
<a href="software.html"><h5 style="margin-top: 25px" title="Software">Software & Web (345)</h5></a>
<a href="tele.php"><h5 style="margin-top: 22px" title="Telemarketing">Telemarketing (345)</h5></a>
<a href="enginer.php"><h5 style="margin-top: 22px" title="Engineering">Engineering (345)</h5></a>
</div>

<div class="col-md-3">

<a href="market.html"><h5 style="margin-top: 25px" title="Marketing">Marketing (345)</h5></a>
<a href="health.php"><h5 style="margin-top: 22px" title="Health">Health & Medicine (345)</h5></a>
<a href="teach.php"><h5 style="margin-top: 22px" title="Teaching">Teaching & Education (345)</h5></a>
</div>
</div>
</div>
</div>


<div id="bycity" class="tab-pane">
<div class="container" style="background-color: white; color: black">
<div class="column">
<div class="col-md-3">
<ul>
<a href="lahore.php"><h5 style="margin-top: 22px" title="Lahore">Lahore (345)</h5></a>
<a href="faisalabad.php"><h5 style="margin-top: 22px" title="Faislabad">Faislabad(345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Abottabad">Abottabad(345)</h5></a>
</ul>
</div>

<div class="col-md-3">

<a href="chinniot.php"><h5 style="margin-top: 25px" title="Chinniot">Chinniot(345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="D.I.Khan">D.I . Khan (345)</h5></a>
<a href="gujranwala.php"><h5 style="margin-top: 22px" title="Gujranwala">Gujranwala (345)</h5></a>
</div>

<div class="col-md-3">

<a href="islamabad.php"><h5 style="margin-top: 25px" title="Islamabad">Islamabad (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Bahawalpur">Bahawalpur (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="D.G Khan">D.G Khan(345)</h5></a>
</div>
</div>
</div>
</div>

<div id="bycompany" class="tab-pane ">
<div class="container" style="background-color: white; color: black">
<div class="column">
<div class="col-md-3">
<ul>
<a href="jazz.php"><h5 style="margin-top: 25px" title="Jazz">Jazz (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Contour Software">Contour Software (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Roots International Schools">Roots International Schools (345)</h5></a>
</ul>
</div>

<div class="col-md-3">

<a href="temp.html"><h5 style="margin-top: 25px" title="United Nations Pakistan">United Nations Pakistan (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Crossover Market Inc">Crossover Market Inc (345)</h5></a>
<a href="bankalhabib.php"><h5 style="margin-top: 22px" title="Bank Al Habib">Bank Al Habib Limited (345)</h5></a>
</div>

<div class="col-md-3">

<a href="packageslimited.php"><h5 style="margin-top: 25px" title="Packages Limited">Packages Limited (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Creative Chaos">Creative Chaos (345)</h5></a>
<a href="pakistanreadingproject.php"><h5 style="margin-top: 22px" title="Pakistan Reading Project">Pakistan Reading Project (345)</h5></a>
</div>
</div>
</div>
</div>
<div id="byindustry" class="tab-pane">
<div class="container" style="background-color: white; color: black">
<div class="column">
<div class="col-md-3">
<ul>
<a href="it.php"><h5 style="margin-top: 22px" title="Information Technology">Information Technology (345)</h5></a>
<a href="manufacturing.php"><h5 style="margin-top: 22px" title="Manufacturing">Manufacturing (345)</h5></a>
</ul>
</div>

<div class="col-md-3">

<a href="temp.html"><h5 style="margin-top: 25px" title="Banking/Financial Services">Banking/Financial Services (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Services">Services (345)</h5></a>
<a href="property.php"><h5 style="margin-top: 22px" title="Real Estate/Property">Real Estate/Property (345)</h5></a>
</div>

<div class="col-md-3">

<a href="temp.html"><h5 style="margin-top: 25px" title="Textile/Garments">Textile/Garments (345)</h5></a>
<a href="callcenter.php"><h5 style="margin-top: 22px" title="Call Center">Call Center (345)</h5></a>
<a href="temp.html"><h5 style="margin-top: 22px" title="Education/Training">Education/Training (345)</h5></a>
</div>

</div>
</div>
</div>
</div>

<div class="vid1 col-lg-3">
  <iframe  src="https://www.youtube.com/embed/O5AO4qIsOdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

</div>
<!-- checked -->
<br>
<div class="container" style="margin-top: 50px">
<div class="row">
<div class="col-lg-2">
<img src="images/teacher.jpg" height="200px" width="200px">
<h5 style="margin-left: 75px">Teacher</h5>
</div>
<div class="col-lg-2">
<img src="images/women1.jpg" style="margin-top: 0" height="200px" width="200px">
<h5 style="margin-left:70px">Women</h5>
  </div>
<div class="col-lg-2">
  <img src="images/media.jpg" style="margin-top: 0" height="200px" width="200px">
<h5 style="margin-left: 70px">Media</h5>
</div>
<div class="col-lg-2">
<img src="images/healthcare.jpg" style="margin-top: 0" height="200px" width="200px">
<h5 style="margin-left: 70px">Healthcare</h5>
</div>
<div class="col-lg-2">
<img src="images/ngo.jpg" style="margin-top: 0" height="200px" width="200px">
<h5 style="margin-left: 70px">NGOS</h5>
</div>
<div class="col-lg-2">
<img src="images/accountant.jpg" style="margin-top: 0" height="200px" width="200px">
<h5 style="margin-left: 70px">Accountants</h5>
</div>
</div>
<br>

<br>
<br>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
  <div class="overlay">
  </div>

  <ol class="carousel-indicators col-lg-12">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
    <li data-target="#bs-carousel" data-slide-to="3"></li>
    <li data-target="#bs-carousel" data-slide-to="4"></li>

  </ol>

  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
    </div>

    <div class="item slides">
      <div class="slide-4"></div>
    </div>

    <div class="item slides">
      <div class="slide-5"></div>
    </div>
  </div>
</div>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.querySelectorAll('.slide');
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";

        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
    <!-- checked -->
<?php include 'footer.php';?>
<br>
</body>
</html>
