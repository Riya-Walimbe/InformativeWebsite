<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
</style>
<body>

<!-- Header -->
<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">


<head>
<title>Dance academy</title>
</head>

<body>
<div class=wrapper style="height:0px;"> 

<div class=header>

<div class=logo>

<img src="logo.png">

</div>

<div class=navigation>
<nav>
<ul>
<li><a href="#">Home</a>
 <ul>
        <li><a href="about.html">About Us</a></li>
		<li><a href="contactsdance.xml">Teaching Staff</a></li>
		 <li><a href="dance.html">Home page</a></li>
		
		<!--<li><a href="#">Infrastructure</a></li>-->
         
		 </ul>
  </li> 
   
   <li><a href="my.php">Register</a>
   
   <li><a href="login.php">Login</a>
   
<li><a href="gallery1.php">Gallery</a></li>
<li><a href="sectioncontact.php">Contact-us</a></li>
<li><a href="form4.html">Video</a></li>

</nav>
</div>

</div>
<div class="header" id="myHeader">
  <!--<p>Click on the buttons to change the grid view.</p>-->
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>


<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="gal1.jpg" style="width:100%">
    <img src="gal2.jpg" style="width:100%">
    <img src="gal3.jpg" style="width:100%">
    <img src="gal4.jpg" style="width:100%">
    <img src="gal5.jpg" style="width:100%">
    <img src="gal6.jpg" style="width:100%">
    <img src="gal7.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="gal14.jpg" style="width:100%">
    <img src="gal11.jpg" style="width:100%">
    <img src="image2.jpg" style="width:100%">
    <img src="gal13.jpg" style="width:100%">
    <img src="gal14.jpg" style="width:100%">
    <img src="gal15.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="gal16.jpg" style="width:100%">
    <img src="gal17.jpg" style="width:100%">
    <img src="gal18.jpg" style="width:100%">
    <img src="gal19.jpg" style="width:100%">
    <img src="gal20.jpg" style="width:100%">
    <img src="gal21.jpg" style="width:100%">
    <img src="gal22.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="gal23.jpg" style="width:100%">
    <img src="gal24.jpg" style="width:100%">
    <img src="cover.jpg" style="width:100%">
    <img src="gal16.jpg" style="width:100%">
    <img src="gal10.jpg" style="width:100%">
    <img src="gal25.jpg" style="width:100%">
  </div>
</div>

<div class=footer style="margin-top:350px">

<div class=footer1 style="margin-top:-301px">

<h3 style="margin-top:80px; ">Class-Centers</h3>
<ul style="display:inline; list-style:none">
<li><h4>Mumbai</h4></li>
<li><h4>Delhi</h4></li>
<li><h4>Chennai</h4></li>
<li><h4>Kolkata</h4></li>
</ul>

</div>


<div class=footer2>
<h3 style="margin-top:100px; ">Choreographers</h3>
<ul>
<li><h4>Remo</h4></li>
<li><h4>Terrence</h4></li>
<li><h4>K.K</h4></li>
<li><h4>A.D</h4></li>
</ul>
</div>

<div class=footer3>
<h3 style="margin-top:120px; ">Related-links</h3>
<ul>
<li><a href="#"><h4>dance-academy-mumbai</h4></a></li>
<li><a href="#"><h4>dance-academy-delhi</h4></a></li>
<li><a href="#"><h4>dance-academy-chennai</h4></a></li>
<li><a href="#"><h4>dance-academy-kolkata</h4></a></li>
</ul>
</div>

<div class=footer4>
<h3 style="margin-top:140px; ">Contact-us</h3>
<ul>
<li><h4>0253-226445</h4></li>
<li><h4>a@gmail.com</h4></li>
<li><h4>Fax no:225-33456</h4></li>
<li><h4>www.danceac.com</h4></li>
</ul>
</div>

</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100%";  // IE10
        elements[i].style.flex = "100%";
    }
}

// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";  // IE10
        elements[i].style.flex = "50%";
    }
}

// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%";  // IE10
        elements[i].style.flex = "25%";
    }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
