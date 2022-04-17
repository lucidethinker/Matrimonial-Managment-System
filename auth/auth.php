<?php
session_start();
require_once("../includes/dbconn.php");
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' AND password='$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $myusername;
	$_SESSION['id']=$id;
	header("location:../usermenu.php?id={$row['id']}");
	}
else {
echo  "Wrong Username or Password";
header('Location: ../login.php');
}

?>