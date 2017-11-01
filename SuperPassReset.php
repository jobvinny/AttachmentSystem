<?php
include('Change.php'); // Includes login Script
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICT Kisii County</title>
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="shortcut icon" type="image/jpg" href="img/BrandingLogo.png">
    <script src="custom.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Avendor Icons Font -->
    <link href="css/avendor-font-styles.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
<header id="top" class="helloworld">
    <div class="carousel-caption showmeso">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="img/BrandingLogo.png">
                <h3>Supervisor Password Reset</h3>
                <p class="text-info java2">Ones The Password Is Changed You Will Be Redirected To The Login Page</p>
                <p class="text-center text-danger java2"><b>(AUTOMATICALLY)</b></p>
                <form role="form" class="horizontal-form" method="post" action="">
                   <div class="form-group input-group">
                                <span class="glyphicon glyphicon-hand-right input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite" autocomplete="off" name="id_no" placeholder="National ID_Number" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-briefcase input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite" autocomplete="off" placeholder="Enter SID" required="required" name="SID">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-lock input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" autocomplete="off" name="pass1" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-lock input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" autocomplete="off" name="pass2" placeholder="Confirm Password" required>
                            </div>
                    <div class="form-group">
                        <span><?php echo $error; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-md btn-dark btoptech2" name="superreset" value="RESET">
                    </div>
                    <div class="form-group">
                        <a href="index.php" class="form-control btn btn-md btn-link bcolored">BACK</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-12"> <marquee><p>&copy;All Rights Reserved 2017.</p></marquee>
            </div>
        </div>
    </div>
    </div>
</header>

<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="custom.js"></script>


</body>
</html>

