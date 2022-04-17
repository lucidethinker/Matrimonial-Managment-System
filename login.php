<?php include_once("functions.php");?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style media="screen">
        body {
            width: 100%;
            height: 760px;
            background: url(image/bg.jpg) no-repeat 50% 50%;
            background-position: center;
            background-size: auto;
            outline-width: medium;
            color: white;
        }
        
        #nav {
            position: fixed;
            left: 300px;
            top: 105px;
        }
        
        #btn {
            padding: 10px 25px 10px 25px;
            color: lightgray;
            text-decoration: none;
            border-radius: 10px;
            -moz-transition: all 1s linear;
        }
        
        #btn:hover {
            padding: 10px 25px 10px 25px;
            color: white;
            text-decoration: none;
            background-color: dodgerblue;
            border-radius: 10px;
        }
        
        .box {
            width: 400px;
            outline-style: hidden;
            background-color: rgba(255, 99, 71, 0);
            position: absolute;
            padding: 40px;
            text-align: center;
            margin-left: 33.5%;
            margin-top: 8%;
        }
        
        .feild {
            width: 300px;
            padding: 20px;
            margin-top: 30px;
            border-radius: 24px;
            border: solid white;
            background: lightgray;
            color: black;
            border-style: hidden;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.2s ease-in-out;
        }
        
        .feild:focus {
            width: 350px;
            padding: 20px;
            margin-top: 30px;
            border-radius: 24px;
            border: 2px solid lightgreen;
            outline-style: hidden;
            color: black;
            background: lightgray;
        }
        
        .box input[type=submit] {
            width: 150px;
            padding: 20px;
            margin-top: 30px;
            border-radius: 24px;
            border: 2px solid rgba(255, 99, 71, 0);
            background: lightgreen;
            border-style: hidden;
            color: black;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.2s ease-in-out;
            font-family: sans-serif;
            font-size: 20px;
            font-variant-caps: small-caps;
        }
        
        .box input:focus {
            width: 350px;
            padding: 20px;
            margin-top: 30px;
            border-radius: 24px;
            border: 2px solid lightblack;
            outline-style: hidden;
            color: black;
        }
        
        .box h1 {
            color: white;
            font-family: sans-serif;
            letter-spacing: 5px;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <form class="box" action="auth/auth.php" method="POST">
        <div id="nav">
            <a id="btn" href="index.php">Home</a></div>
        <h1>Login</h1> 
        <input class="feild" type="text" name="username" value="" placeholder="Username" required>
        <input class="feild" type="password" name="password" value="" placeholder="Password" required>
        <input type="submit" value="login" name="login">
        <center><label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label></center>
    </form>
</body>

</html>