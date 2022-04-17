<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>

<?php
$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
  </head>
  <body>
        <?php include_once("includes/navigation.php");?>
        <?php echo $_SESSION['id']; ?>
        <div class="container" style="margin:20px; height:500px; overflow-y: scroll;">
          <div class="row" style="margin:20px;">
            <div class="col-sm-6 bg-primary" style="margin:10px; padding:20px; border-radius: 50px;">
              MESSAGES
            </div>
            <div class="col-sm-5 bg-secondary" style="margin:10px; padding:20px; border-radius: 50px;">
              MESSAGES
            </div>
          </div>



        </div>

<div class="container">
  <input type="text" name="" value="" class="form-control" placeholder="Search" style="float:left; width:60%;">

    <button type="button" name="button" class="btn btn-primary" style="float:left;">Send</button>
</div>





  </body>
</html>
