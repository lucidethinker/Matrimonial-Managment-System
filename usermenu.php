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
.bg-img {
  /* The image used */
  background-image: url("me.jpg");

  min-height: 1380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 50px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
</style>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});</script></head>
<body>
 <?php include_once("includes/navigation.php");?>
<center><h1>Recent Ones</h1></center>
<div class="col-md-4 profile_right">
        </div> 
        <div class="view_profile view_profile2">
        <body>

</body>
</html>
    <?php
     $sql="SELECT * FROM customer ORDER BY profilecreationdate ASC";
      $result=mysqlexec($sql);
      $count=1;
      while($row=mysqli_fetch_assoc($result)){
            $profid=$row['cust_id'];
          //getting photo
          $sql="SELECT * FROM photos WHERE cust_id=$profid";
          $result2=mysqlexec($sql);
          $photo=mysqli_fetch_assoc($result2);
          $pic=$photo['pic1'];
          echo "<ul class=\"profile_item\">";
            echo"<a href=\"view_profile.php?id={$profid}\">";
              echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
               echo "<li class=\"profile_item-desc\">";
                  echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                  echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                  echo "<h5>" . "View Full Profile" . "</h5>";
               echo "</li>";
      echo "</a>";
      echo "</ul>";
      $count++;
      }
     ?>
        </div>        
            </div>
                  <div class="clearfix"> </div>
               </div>
             </div>
           </div>
           
           <?php include_once("footer.php");?>
           <!-- FlexSlider -->
           <script defer src="js/jquery.flexslider.js"></script>
           <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
           <script>
           // Can also be used with $(document).ready()
           $(window).load(function() {
             $('.flexslider').flexslider({
               animation: "slide",
               controlNav: "thumbnails"
             });
           });
           </script>   
           </body>
           </html>	