<?php
session_start();
include("includes/dbconn.php");
// checking session is valid for not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Users</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/font-awesome.css" rel="stylesheet" />

  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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
           <li class="nav-item" style="padding:10px; color:white;" >
          <a href="showmsg.php"  style="color:white;">
              <i class="fa fa-feedback"></i>
              <span>Feedback Panel </span>
          </a>
         <li class="nav-item" style="padding:10px; color:white;" >
          <a href="logout.php"  style="color:white;">
              <i class="fa fa-logout"></i>
              <span>logout</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" method=POST>
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">User Name</th>
                                  <th> Password</th>
                                  <th> Contact</th>

                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($conn,"select * from users");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['username'];?></td>
                                  <td><?php echo $row['password'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td>
                                     <a href="update-profile.php?uid=<?php echo $row['id'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-users.php?id=<?php echo $row['id'];?>">

                                 <button class="btn btn-danger btn-xs"  name="delete" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                              <?php

                               if(isset($_GET['delete']))
                                      {
                                          $adminid=$_GET['id'];
                                           $msg=mysqli_query($conn,"delete from user where id='$adminid'");
                                             if($msg)
                                            {
                                            echo "<script>alert('Data deleted');</script>";
                                             }
                                             }
                              ?>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
