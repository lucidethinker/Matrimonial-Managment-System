<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
  $id=$_GET['id'];
  if(isloggedin()){
   //do nothing stay here
  } else{
      echo "<script type = \"text/javascript\">
      alert(\"Please Login .................\");
      window.location = (\"login.php\")
      </script>";
  }
  
  //calling photo uploader function
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){ uploadphoto($id); }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
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
<style> 
.bg-img {
  /* The image used */
  background-image: url("image/user.jpg");

  min-height: 850px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}


</style></head>
<body>
<?php include_once("includes/navigation.php");?>
<center><h1><font color="black">Upload Ur Photograph</font></center>
<center><div class="services">
<div class="col-sm-6 login_left">
	   <form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Upload Your Photo(Upto 4 images, Use 300 x 250 dimensions) <span class="form-required" title="This field is required.">*</span></label>
	      <input type="file" id="edit-name" name="pic1" class="form-file required">
        <input type="file" id="edit-name" name="pic2" class="form-file required">
        <input type="file" id="edit-name" name="pic3" class="form-file required">
        <input type="file" id="edit-name" name="pic4" class="form-file required">
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
	    </div>
	   </form>
     </div>
<script src="js/jquery.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</script>
</html>

 