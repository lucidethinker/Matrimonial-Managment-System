<?php include_once("includes/basic_includes.php");?>
<?php include_once("includes/dbconn.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    

    
    <style media="screen">
    body{
      background-image:url(image/bg1.jpg);
      background-repeat:repeat;
      font-family: ubuntu;
      color: red;
    }
  .box{
      width:400px;
      outline-style: hidden;
      background-color: lightgrey;
      position: center;
      padding: 40px;
      text-align:center;
      margin-left: 33.5%;
      margin-top: 8%;
    }
    .container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
    .feild{
      width: 300px;
      padding: 20px;
      margin-top: 30px;
      border-radius:24px;
      border:2px solid black;
      background: none;
      color:black;
     border-style: hidden;

    }
    .feild:focus {
      width: 350px;
      padding: 20px;
      margin-top: 30px;
      border-radius: 24px;
      border:2px solid white;
      outline-style: hidden;
      color:white;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.2s ease-in-out;
    }
    .box h1{
      color:black;
      font-family: sans-serif;
      font-weight: bold;
      font-size: 45px;
    }
    .box input[type=submit]{
      width: 150px;
      padding: 20px;
      margin-top: 30px;
      border-radius: 24px;
      border:2px solid rgba(255, 99, 71, 0);
      background: lightgreen;
      border-style: hidden;
      color:black;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.2s ease-in-out;
      font-family: sans-serif;
      font-size: 20px;
      font-variant-caps:small-caps;

    }
    .box input:focus{
      width: 350px;
      padding: 20px;
      margin-top: 30px;
      border-radius: 24px;
      border:2px solid rgba(255, 99, 71, 0);
      outline-style: hidden;
      color:black;
    }
    #btn
    {
    background-color: none;
    padding:10px 25px 10px 25px;
    color:white;
    background-color: black;
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
#nav
{
position:fixed;
left:300px;
top:105px;
}
.label_radio {
    font-size: 0.85em;
    font-weight: 300;
}


    </style>
    <title></title>
  </head>

  <body>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<div id="nav">
    <a id="btn" href="index.php">Home</a></div></div>
    <form name="f1" class="box" action="" method="POST" >
    <div class="feild">
        <h1>SignUp</h1>
        <br>
        <center>
        <label class="container"><font size="4">Male</font>
  <input type="radio" checked="checked"value="Male" name="radio" >
  <span class="checkmark"></span>
</label>
<label class="container"><font size="4">Female</font>
  <input type="radio" value="Female" name="radio" >
  <span class="checkmark"></span>
</label></center>
      
        <input class="feild" type="email" name="email" placeholder="E-mail" required> 
        <input placeholder="Date of birth" class="form-control" type="text" onfocus="(this.type='date')"  id="date" name="dob" required>
        <input class="feild" type="text" name="uname" value="" placeholder="Username" required>
        <input class="feild" type="password" name="pass" value="" placeholder="Password" required>    
        <input type="submit" name="submit" value="Register">
        
      </form>
  </div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$em=$_POST['email'];
	$dob=$_POST['dob'];
	$gender=$_POST['radio'];
	require_once("includes/dbconn.php");

	$sql = "INSERT 
			INTO
			   users
			   (profilestat,username, password,email,dob,gender,userlevel) 
			VALUES
			   (0,'$uname','$pass','$em','$dob','$gender',0)";
	if (mysqli_query($conn,$sql)) {
    
    echo "<script>alert(\"Fill Your Form\")</script>";
		echo "<script> window.location=\"signup1.php?id=<?php echo $id\"</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
}
?>