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
    <title>MESSAGES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
  </head>
  <body>
    <?php include_once("includes/navigation.php");?>

<div class="container" style="margin-top:20px; height:100px;">
<input type="text" class="form-control" id="usr" placeholder="Search" style="width:80%;" oninput="search()">
</div>
<div class="container" id="serach_result" style="background-color:#f8f9fa;">

</div>
<script type="text/javascript">
function search() {
  var user  =document.getElementById('usr').value;
  var url='includes/search_results.php?username='+user;
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("serach_result").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
</script>
  </body>
</html>
