<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<html>
<head><title>Indian matrimony</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style media="screen">
body
{

background-image: url(image/love.jpg);
background-repeat:round;
color:red;
font-family:ubuntu;

}
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
#top
{

height:150px;
width:110%;
position:fixed;
box-shadow:5px 5px 5px 5px lightgrey;
background-color:#f1f1f1;
margin:-10px;
}
#logo
{
height:150px;
width:150px;
position:fixed;
left:100px;
}
#hd
{
font-size:65px;
position:fixed;
left:300px;
top:20px;
}

#nav
{
position:fixed;
left:300px;
top:105px;
}

#btn
{
background-color:#f1f1f1;
padding:10px 25px 10px 25px;
color:black;
text-decoration:inherit;
border-radius:10px;
-moz-transition:all 1s linear;
}
#btn:hover
{
padding:10px 25px 10px 25px;
color:white;
text-decoration:none;
background-color:dodgerblue;
border-radius:5px;
}

#ttl
{
height:30px;
width:700px;
}

</style>
<div id="top">
<img id="logo" src="image/logo.png" href="admin.html">
<text id="hd">
Indian Matrimony
</text>
<div id="nav">
<a id="btn" href="login.php">Login</a>
<a id="btn" href="signup.php">Sign Up</a>
<a id="btn" href="contact.html">Contact Us</a>
<a id="btn" href="About.html">About Us</a>
<div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
				  <?php 
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"usermenu.php?id=$id\">Home</a></li>";
				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }
				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"signup.php\">Register</a></li>";
				  }

				  ?>
				  </ul>
				</li>
			   </ul>
             </nav>
             </div>
</div>           
</div>
<br><br><br><br><br><br><br><br><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="icon-bar">
  <a href="https://www.facebook.com/jasim.ihsan.39" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="http://instagram.com/ihsan.jsm" class="instagram"><i class="fa fa-instagram"></i></a>
  <a href="twitter.com/ihsanjasim_?s=09" class="twitter"><i class="fa fa-twitter"></i></a>
  
</div>
<center>
<div id="ttl">
<font color="white">
<b>
<font size="6" color="black">MILLIONS OF VERFIED MEMBERS</font>
</b>
</font>
</b>
</div>
</HTML>
