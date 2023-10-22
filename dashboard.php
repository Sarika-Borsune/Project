<?php

include('_config.php');

if(isset($_POST['submit'])){
$name=$_POST['name'];
$em=$_POST['email'];
$comment=$_POST['comment'];


//echo "$user";
//echo "$em";

//echo "$mobileno";

//echo "$dob";


$query = "insert into contactus values ('$name' , '$em' , '$comment')";
$data = mysqli_query($con , $query);



if($data){
  echo '<script>alert(" comment added successfully !")</script>';
}
else{
  echo '<script>alert("All fields are required")</script>';
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>GPA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
  .jumbotron {
   /*   background:url("slide22.jpg");  
	 */ color:#C94B4B;
	  padding:100px 25px;
  }
   .bg-grey {
      background-color: #f6f6f6;
  }
  .container-fluid {
	  padding:60px 50px;
  }
  .logo {
	  color:#C94B4B;
    font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  /* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 320px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
  border-radius: 4px;
  background-color: #DAA520;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 320px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top (Important)*/
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    color:#000;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.logo-small {
    color: #C94B4B;
    font-size: 50px;
}
p1 {
	color: #A0522D;
	font-size:40px;
}
p{
  color:black;
}
h1#h01 {
	font-size:100px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #C94B4B;
}

.carousel-indicators li {
    border-color: #C94B4B;
}

.carousel-indicators li.active {
    background-color: #C94B4B;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
}
.navbar {
    margin-bottom: 0;
    background-color: transparent;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #C94B4B !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #fff !important;
    background-color: #C94B4B !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #C94B4B !important;
}
footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #C94B4B;
}
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
}

.jumbotron {
    font-family: Montserrat, sans-serif;
}

.navbar {
    font-family: Montserrat, sans-serif;
}
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #A0522D;
    font-weight: 600;
    margin-bottom: 30px;
}

h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
}
.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <form action="#" method="POST">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage" style="font-size:20px; color:#C94B4B";><span class="glyphicon glyphicon-lock" style="color:black";></span>&nbsp<b>GPA<b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-home" style="color:#fff";></span>HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        
        <li><a href="#contact"><span class="glyphicon glyphicon-earphone" style="color:#fff";></span>CONTACT</a></li>
        <li><a href="_login.php"><span class="glyphicon glyphicon-user" style="color:#fff";></span>LOGIN</a></li>
        <li><a href="_register.php"><span class="glyphicon glyphicon-user" style="color:#fff";></span> REGISTER</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">

<img src="images/img2.png"  width="700px" height="300px">
  
  
  <div>
  <p1>Graphical Password Authentication</p1>
</div>
</div>

<!-- Container (About Section) -->
<div class="container-fluid" id="about">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 column">
      <h2>ABOUT US</h2>
      
      <h4>Welcome to our Graphical Password Authentication System</h4>
      <p>In today's World as everything is turning online, the risk of cybercrimes and privacy breaches is also increasing,password play a huge role in keeping your data safe online as well as offline.
      Graphical password is one of the process for authentication in computer system.Graphical Passwords are an alternative way to alphanumeric password.</p>
      
    </div>

    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 column">
      <h2>Purpose</h2>
      
      <h4>Purpose of A Graphical Password Authentication System</h4>
      <p>The purpose of implementing graphical password authentication system is to provide security to various applications in different sector.
      Graphical Password Authentication System can be used in various sectord such as Banking, Shopping, Charity Websites, Hospital Management System, Email System etc. to provide security.</p>
      
    </div>
         
    </div>
  </div>
  
      
    </div>
  </div>
</div>

</div>


<div class="container-fluid bg-grey" id="ourvalues">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>GPA VALUES</h2>
      <br>
      <h4><strong>MISSION:</strong> User is able to select set of images to create strong password.</h4>
      <h4><strong>VISION:</strong> To keep youre data safe and secure.</h4>
    </div>
  </div>
</div>

    

  
<div class="container-fluid bg-grey" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>CONTACT IF YOU HAVE ANY QUERY REGARDING WEBSITE / FEEDBACK..</p>
      <p><span class="glyphicon glyphicon-user"></span> </p>
      <p><span class="glyphicon glyphicon-phone"></span></p>
      <p><span class="glyphicon glyphicon-envelope"></span></p> 
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      <form action="#" method="POST">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-info pull-right" name="submit" type="submit">Send</button>
        </div>
      </form>
      </div> 
    </div>
  </div>
</div>
<footer class="container-fluid text-center" id="footer">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><b>Graphical Password Authentication<b></p> 
</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
});
//FOR SCROLLING TO TOP EFFECT..
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>

</body>
</html>

