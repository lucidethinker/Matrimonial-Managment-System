<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
$id=$_GET['id'];
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font Awesome JS -->


        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <body>
                <div class="grid_3">
                    <div class="container">
                        <div class="breadcrumb1">
                            <ul>
                                <li class="current-page">
                                    <font size=6>Enter Your Details</font>
                                </li>
                            </ul>
                        </div>
                        <form name="profile1" method="POST">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">First name</label>
                                    <input type="text" class="form-control" name="fname" id="validationDefault01" placeholder="First name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Last name</label>
                                    <input type="text" class="form-control" name="lname" id="validationDefault02" placeholder="Last name" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Gender *</label>
                                    <select id="inputState" name="sex" class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                                </div>
                            </div>
                            <label for="id">Date of birth *</label>
                            <input placeholder="Date of birth" class="form-control" type="text" onfocus="(this.type='date')" id="date" name="dob">

                            <div class="form-group">
                                <label for="inputEddress">Email*</label>
                                <input type="text" class="form-control" name="email" id="inputEmail" placeholder="eg:@gmail.com" value="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-mb-4 -md-4">
                                    <label for="inputState">Religion</label>
                                    <select id="inputState" name="religion" class="form-control">
                                <option value="Not Applicable">Not Applicable</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Jain">Jain</option>
                                <option value="Sikh">Sikh</option>

                            </select>
                                </div>
                                <div class="form-group col-mb-4 -md-6">
                                    <label for="inputState">caste</label>
                                    <select id="inputState" name="caste" class="form-control">
                                <option value="Roman Cathaolic">Roman Cathaolic</option>
                                <option value="Latin Catholic">Latin Catholic</option>
                                <option value="Penthecost">Penthecost</option>
                                <option value="Mappila">Mappila</option>
                                <option value="Thiyya">Thiyya</option>
                            </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">subcaste</label>
                                    <select id="inputState" name="subcaste" class="form-control">
                                <option value="Not Applicable">Not Applicable</option>
                                <option value="sub cast1">sub cast1</option>
                                <option value="sub caste2">sub caste2</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Country</label>
                                    <select id="inputState" name="country" class="form-control">
                            <option value="India">India</option>
                            <option value="China">China</option>
                            <option value="UAE">UAE</option>
                            </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" name="state" class="form-control">
                                <option value="Kerala">Kerala</option>
                                <option value="Taminadu">Tamilnadu</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Andhrapradesh">Andrapradesh</option>
                            </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">District</label>
                                    <select id="inputState" name="district" class="form-control">
                                <option value="Trivandrum">Trivandrum</option>
                                <option value="Kollam">Kollam</option>
                                <option value="Pathanamthitta">Pathanamthitta</option>
                                <option value="Wayanad">Wayanad</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Age</label>
                                    <select id="inputState" name="age" class="form-control" required>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                        </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Marital status</label>
                                    <select id="inputState" name="maritalstatus" class="form-control">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorsed">Divorsed</option>
                        </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Profile Created by</label>
                                    <select id="inputState" name="profileby" class="form-control">
                            <option value="Self">Self</option>
                            <option value="Son/Daughter">Son/Daughter</option>
                            <option value="Other">Other</option>
                        </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Education</label>
                                    <select id="inputState" name="education" class="form-control">
                                <option value="Primary">Primary</option>
                                <option value="Tenth level">Tenth level</option>
                                <option value="+2">+2</option>
                                <option value="Degree">Degree</option>
                                <option value="PG">PG</option>
                                <option value="Doctorate">Doctorate</option>
                                </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="inputEddress">Specialization</label>
                                    <input type="text" class="form-control" name="edudescr" id="inputEmail" placeholder="edudescr" required>
                                </div>
                            </div>

                            <div class="form-row ">
                                <div class="form-group col-md-4 ">
                                    <label for="inputState">Body type</label>
                                    <select id="inputState" name="bodytype" class="form-control ">
                                <option value="Slim">Slim</option>
                                <option value="Fat">Fat</option>
                        <option value="Average">Average</option>
                        </select>
                                </div>
                                <div class="form-group col-md-8 ">
                                    <label for="inputState">Physical Status</label>
                                    <select id="inputState" name="physicalstatus" class="form-control " required>
                              
                                <option value="No Problem">No Problem</option>
                                <option value="Blind">Blind</option>
                                <option value="Deaf">Deaf</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Drinks</label>
                                    <select id="inputState" name="drink" class="form-control ">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                                <option value="Sometimes">Sometimes</option>
                            </select>
                                </div>
                                <div class="form-group col-md-8 ">
                                    <label for="inputState">Smoke</label>
                                    <select id="inputState" name="smoke " class="form-control ">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                                <option value="Sometimes">Sometimes</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group col-md-4 ">
                                    <label for="inputState">Mother Tounge</label>
                                    <select id="inputState" name="mothertounge " class="form-control ">
                            <option value="Malayalam">Malayalam</option>
                            <option value="Hindi">Hindi</option>
                            <option value="English">English</option>
                            </select>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="inputState">Blood Group</label>
                                    <select id="inputState" name="bloodgroup" class="form-control ">
                                <option value="O +ve">O +ve</option>
                                <option value="O -ve">O -ve</option>
                                <option value="AB -ve">AB -ve</option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md-6 mb-3 ">
                                    <label for="validationDefault03 ">Hight</label>
                                    <input type="number" name="height" class="form-control " id="validationDefault03 " placeholder="in CM " required>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label for="validationDefault04 ">Weight</label>
                                    <input type="number " name="weight" class="form-control " id="validationDefault04 " placeholder=" " required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group col-md-4 ">
                                    <label for="inputState ">Colour</label>
                                    <select id="inputState " name="colour" class="form-control ">
                                <option value="Dark ">Dark</option>
                                <option value="Fair ">Fair</option>
                                <option value="Normal ">Normal</option>
                            </select>
                                </div>
                                <div class="form-group col-md-8 ">
                                    <label for="inputState ">Diet</label>
                                    <select id="inputState " name="diet" class="form-control ">
                                <option value="Veg ">Veg</option>
                                <option value="Non Veg ">Non Veg</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md-6 mb-3 ">
                                    <label for="validationDefault03 ">Occupation</label>
                                    <input type="text " class="form-control " name="occupation" id="validationDefault03 " placeholder="City " required>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label for="validationDefault04 ">Annual Income</label>
                                    <input type="number " class="form-control " name="income" id="validationDefault04 " placeholder="State " required>
                                </div>
                            </div>
                            <form class="was-validated ">
                                <div class="mb-3 ">
                                    <label for="validationTextarea ">Occupation Descr</label>
                                    <textarea class="form-control is-invalid " name="occupationdescr" id="validationTextarea " placeholder="textarea " required></textarea>
                                    <div class="invalid-feedback ">

                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="col-md-6 mb-3 ">
                                        <label for="validationDefault03 ">Fathers Occupation</label>
                                        <input type="text " class="form-control " name="fatheroccupation" id="validationDefault03 " placeholder="Fathers Occupation " required>
                                    </div>
                                    <div class="col-md-6 mb-3 ">
                                        <label for="validationDefault04 ">Mothers Occupation</label>
                                        <input type="text " class="form-control " name="motheroccupation" id="validationDefault04 " placeholder="Mothers Occupation" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-4 ">
                                        <label for="inputState ">No . Of sisters</label>
                                        <select id="inputState " name="sis" class="form-control ">
                                <option value="1 ">1</option>
                                <option value="2 ">2</option>
                                <option value="3 ">3</option>
                                <option value="4 ">4</option>
                                <option value="5 ">5</option>
                            </select>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8 ">
                                        <label for="inputState ">No . Of brothers</label>
                                        <select id="inputState " class="form-control " name="bros">
                        <option value="1 ">1</option>
                        <option value="2 ">2</option>
                        <option value="3 ">3</option>
                        <option value="4 ">4</option>
                        <option value="5 ">5</option>
                        </select>
                                    </div>
                                </div>

                                <form class="was-validated ">
                                    <div class="mb-3 ">
                                        <label for="validationTextarea ">About Me</label>
                                        <textarea class="form-control is-invalid " name="aboutme" id="validationTextarea " placeholder=" textarea " required></textarea>
                                        <div class="invalid-feedback ">
                                            Write about You
                                        </div>
                                    </div>
                                    <div class="form-group ">

                                        <div class="invalid-feedback ">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                    </div>
                    <center> <button class="btn btn-primary " type="submit ">Submit</center></button>
                        </form>
    	</html>