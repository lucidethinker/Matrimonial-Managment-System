<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form Using HTML, CSS And PHP - reusable form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="form.js"></script>
    <style>
  
        body {
            background-color: #000;
        }
        
        html,
        body {
            height: 100%;
        }
        
        .imagebg {
            background-image: url("images/mixing-desk-351478_1920.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            -webkit-filter: blur(3px);
            filter: blur(3px);
            opacity: 0.6;
            filter: alpha(opacity=60);
        }
        
        .form-container {
            background-color: #fff;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 20px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        }
        
        body {
            background-color: #000;
        }
        
        html,
        body {
            height: 100%;
        }
        
        .imagebg {
            background-image: url("image/mixing-desk-351478_1920.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            -webkit-filter: blur(3px);
            filter: blur(3px);
            opacity: 0.6;
            filter: alpha(opacity=60);
        }
        
        .form-container {
            background-color: #fff;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 20px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
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
    </style>
</head>
<body>
    <div class="container">
        <a id="btn" href="index.php">Home</a></div>
    <div class="imagebg"></div>
    <div class="row " style="margin-top: 50px">
        <div class="col-md-6 col-md-offset-3 form-container">
            <h2>Feedback</h2>
            <p> Please provide your feedback below: </p>
            <form role="form" method="post" id="reused_form">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>How do you rate your overall experience?</label>
                        <p>
                            <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                            <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                            <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="comments"> Comments:</label>
                        <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-lg btn-warning btn-block">Post </button>
                    </div>
                </div>
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h3>Posted your feedback successfully!</h3>
            </div>
            <div id="error_message" style="width:100%; height:100%; display:none; ">
                <h3>Error</h3> Sorry there was an error sending your form. </div>
        </div>
    </div>
    </div>
</body>

</html>