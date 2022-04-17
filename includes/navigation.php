

<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Welcome</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="nav-link" href="profile.php?id=<?php echo $id;?>">PROFILE</a>
    <button class="navbar-toggler" type="buttoan" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="editprofile.php?id=<?php echo $id;?>">EDIT PROFILE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Photoupdator.php?id=<?php echo $id;?>">UPLOAD PHOTOGRAPH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Partnerpref.php?id=<?php echo $id;?>">PARTNER PREF</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="search.php?id=<?php echo $id;?>">ADVANCED SEARCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="messages.php?id=<?php echo $id;?>">MESSAGES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php?id=<?php echo $id;?>">LOGOUT</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input type="text" value="" id="profid" name="profid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
	        <input type="button" onclick="viewprofile();"  value="search">
          <script type="text/javascript">
            function viewprofile(){
              var profid=document.getElementById("profid").value;
              window.location.href="view_profile.php?id="+profid;
            }
          </script>
          </nav>
		  </form>
		  </div>
         </nav>
