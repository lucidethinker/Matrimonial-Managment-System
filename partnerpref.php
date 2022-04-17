<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqlexec($sql);
		if($result){
			$row=mysqli_fetch_assoc($result);
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$complexion=$row['complexion'];
			$height=$row['height'];
			$diet=$row['diet'];
			$religion=$row['religion'];
			$caste=$row['caste'];
			$sub_caste=$row['subcaste'];
			$mother_tounge=$row['mothertounge'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$country=$row['country'];
			$descr=$row['descr'];
			
		}
		else{
			echo mysqli_error($conn);
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
	<link rel="stylesheet" href="css/bootstrap.css" >
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style media="screen">
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

	
</style>
<body>
<?php include_once("includes/navigation.php");?>

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="usermenu.php?id=<?php echo $id;?>"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernce</li>
     </ul>
	 <form action="" method="post" name="partner">
	 <div class="tab_box">
     <h1>My Ideal Partner would be</h1>
      <p><textarea name="descr" rows="5" cols="150"><?php echo $descr;?></textarea></p>
     </div></center>
      <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									<input type="text" name="agemin" value="<?php echo $agemin; ?>">to <input type="text" name ="agemax" value="<?php echo $agemax; ?>"> 
									</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>

						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
									</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Height  :</td>
									<td class="day_value closed"><input type="number"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion">
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    <option value="Jain">Jain</option>
						                    <option value="Sikh">Sikh</option>
						                    
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>
								<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value closed">
									<div class="select-block1">
	                    				<select name="caste">
			                   				<option value="Roman Cathaolic">Roman Cathaolic</option>
						                    <option value="Latin Catholic">Latin Catholic</option>
						                    <option value="Penthecost">Penthecost</option>
						                    <option value="Mappila">Mappila</option>
						                    <option value="Thiyya">Thiyya</option>  
					                    </select>
		                 			</div></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value closed">
									<div class="select-block1">
						                <select name="mothertounge">
						                    <option value="">Malayalam</option>
						                    <option value="">Hindi</option> 
						               		<option value="">English</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education">
						                    <option value="Primary">Primary</option>
						                    <option value="Tenth level">Tenth level</option> 
						               		<option value="+2">+2</option> 
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
						               		<option value="Doctorate">Doctorate</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                    <select name="country">
							                    <option value="Not Applicable">Country</option>
							                    <option value="Hindu">India</option>
							                    <option value="Christian">China</option>
							                    <option value="Muslim">UAE</option>
						                    </select>
						                 </div>
						            </td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				  </div>
				  <br>
				<center> <input type="submit" value="Update Preferences"></center></br>
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>

