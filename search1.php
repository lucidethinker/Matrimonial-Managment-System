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
<?php
if (isset($_GET['search'])) {?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Search</title>
      <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <body>
      <?php include_once("includes/navigation.php");?>
      <?php
      include 'includes/dbconn.php';
      $sql = "SELECT * FROM customer LEFT JOIN photos ON customer.cust_id = photos.cust_id WHERE sex='$_GET[sex]' AND maritalstatus='$_GET[maritalstatus]' AND  country='$_GET[country]' AND
      district='$_GET[district]' AND state = '$_GET[state]' AND religion='$_GET[religion]' AND mothertounge='$_GET[mothertounge]' AND
       age BETWEEN ' $_GET[agemin]' AND '$_GET[agemax]' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";?>
      <div class="col-sm-5" style="background-color:#f8f9fa; margin:20px; float:left;">
        <div class="row" style="padding:10px;">
      <div class="col-sm-5  ">
        <img src="profile/6/<?php echo $row["pic1"];  ?>" alt="" style="width:100%;">
      </div>
      <div class="col-sm-6" >
      <p>NAME: <?php echo $row["firstname"];  echo " "; echo $row["lastname"]; ?></p> <p>Age /Height: <?php echo $row["age"]."/".$row["height"] ?> </p>
       <p >District: <?php echo  $row["district"]; ?></p> <p >Maritalstatus: <?php echo  $row["maritalstatus"]; ?></p> <p >Education: <?php echo  $row["education"]; ?></p>
     <p>Annual_income: <?php echo $row['annual_income']; ?></p> <p>Email: <?php echo $row['email']; ?></p>
    <a href="view_profile.php?id=<?php echo  $row['cust_id'];?>">  <button type="button" name="button" class="btn btn-primary">Learn More</button></a>

   </div>
               </div>
      </div>
      <?php
    }
} else {
    echo "0 results";
}
       ?>
    </body>
  </html>
<?php
}
 ?>
