<?php
session_start();
include('includes/dbconn.php');
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for updating user info
if(isset($_POST['Submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$uid=intval($_GET['uid']);
$query=mysqli_query($conn,"update user set username='$username' ,password='$password' ,email='$email' where id='$uid'");
$_SESSION['msg']="Profile Updated successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update Profile</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="fonts/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrao.mini.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="#">Admin</a>
      <ul class="navbar-nav">
        <li class="nav-item" style="padding:10px; color:white;">
          <a href="change-password.php" style="color:white;">
              <i class="fa fa-file"></i>
              <span>Change Password</span>
          </a>
        </li>
        <li class="nav-item" style="padding:10px; color:white;" >
          <a href="manage-users.php"  style="color:white;">
              <i class="fa fa-users"></i>
              <span>Manage Users</span>
          </a>
        </li>
      </ul>
    </nav>
  <section id="container" >

      <?php $ret=mysqli_query($conn,"select * from users where id='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['username'];?>'s Information</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">User Name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">PassWord</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="password" value="<?php echo $row['password'];?>" >
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
