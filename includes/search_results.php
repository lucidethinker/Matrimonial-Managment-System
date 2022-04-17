<?php
    include 'dbconn.php';
    $sql = "SELECT * FROM customer LEFT JOIN photos ON customer.cust_id = photos.cust_id WHERE firstname  like '$_GET[username]%' OR lastname like '$_GET[username]%' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

 ?>
 <a href="chat.php?id=<?php echo $row["cust_id"]; ?>">
 <div class="container-fluid" style="margin-top:20px;">
 <div class="row">
 <div class="col-sm-3">
 <img src="profile/6/<?php echo $row["pic1"]; ?>" alt="" style="width:100%;">
 </div>
 <div class="col-sm-3">
   Name: <?php echo  $row["firstname"]." ".$row["lastname"]; ?>
   Adress: <?php echo  $row["district"].", ".$row["state"]; ?>
 </div>
 </div>
 </div>
 </a>
<?php
}
} else {
echo "0 results";
}
 ?>
