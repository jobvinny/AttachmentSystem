<?php
include('supersession.php');
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

    <body class="back">
        <div class="container-fluid toptechdark">
            <div class="row">
                <div class="col-md-12 well" id="well2">
                    <h3 class="text-center"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;<b><i>S</i></b>A<b><i>S</i></b> <b><i>S</i></b>upervisor <b><i>D</i></b>ashBoard</h3>
                </div>
                <div class="col-md-12">
                    <nav class="navbar navbar">
                        <div class="container">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="SupervisorSection.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Supervisor Operations</a>
                            </div>
                            <ul class="nav navbar-nav" id="nav1">
                                <li><a href="AssignedStudent.php">View Student</a></li>
                                <li><a href="SProgressEngine.php">Student Progress</a></li>
                            </ul>
                            <ul class="nav navbar-nav pull-right" id="nav1">
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="col-md-5"></div>
                    <div class="col-md-3">
                        <img src="img/BrandingLogo.png" class="img-rounded img-responsive" id="imagelogo">
                        <h2 class="logos">
                            <span class="icon gfx-star-3 colorblack"></span>
                            <span class="icon gfx-star-3 colorred"></span>
                            <span class="icon gfx-star-3 colorgreen"></span>
                        </h2>
                        <h4 class="text-success">WELCOME BACK <u><i> <?php echo $login_session; ?></i></u><span class="glyphicon glyphicon-ok"></span></h4>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

       <!--footer-->
        <div class="footer footwell java3">
            <div class="col-md-12 toptechdark">
                <br/>
                <h2 class="text-success text-center well well-sm">GET STARTED</h2>
                <br/>
                <div class="col-md-4">
                    <h3 class="text-center footer-heading hubdesk">Quick Links</h3>
                    <br/>
                    <h4 class="text-center"><a href="http://www.tecksol.co.ke"><button class="btn btn-link btn-md btnlinks3">TECKSOL LIMITED</button></a></h4>
                    <h4 class="text-center"><a href="https://github.com/"><button class="btn btn-link btn-md btnlinks3">GIT HUB</button></a></h4>
                    <h4 class="text-center"><a href="https://stackoverflow.com/"><button class="btn btn-link btn-md btnlinks3">STACK OVERFLOW</button></a></h4>
                    <h4 class="text-center"><a href="https://www.ecitizen.go.ke/"><button class="btn btn-link btn-md btnlinks3">E-CITIZEN</button></a></h4>
                    <h4 class="text-center"><a href="https://itax.kra.go.ke/KRA-Portal/"><button class="btn btn-link btn-md btnlinks3">KENYA REVENUE</button></a></h4>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center hubmob footer-heading">Contact Us</h3>
                    <br>
                    <h4 class="text-center"><a href="http://www.kisii.go.ke/"><button class="btn btn-link btn-md btnlinks">KISII COUNTY</button></a></h4>
                    <h4 class="text-center"><button type="button" class="btn btn-dark btn-md btnlinks" data-toggle="collapse" data-target="#demo2">CONTACTS</button></h4>
                    <div id="demo2" class="collapse">
                        <h3 class="text-center text-info">+254-713-255791</h3>
                    </div>
                    <h4 class="text-center"><a href="mailto:info@kisii.go"><button class="btn btn-link btn-md btnlinks">EMAIL US</button></a></h4>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center hubweb footer-heading">Social Media</h3>
                    <br/>
                    <h4 class="text-center"><a href="https://www.google.com/search?q=facebook&ie=utf-8&oe=utf-8&client=firefox-b-ab"><button class="btn btn-link btn-md btnlinks2">FACEBOOK</button></a></h4>
                    <h4 class="text-center"><a href="https://twitter.com/"><button class="btn btn-link btn-md btnlinks2">TWITTER</button></a></h4>
                    <h4 class="text-center"><a href="https://www.google.com/search?q=instagram&ie=utf-8&oe=utf-8&client=firefox-b-ab"><button class="btn btn-link btn-md btnlinks2">INSTAGRAM</button></a></h4>
                    <h4 class="text-center"><a href="https://www.linkedin.com/"><button class="btn btn-link btn-md btnlinks2">LINKED *iN</button></a></h4>
                    <h4 class="text-center"><a href="https://www.youtube.com/"><button class="btn btn-link btn-md btnlinks2">YOU TUBE</button></a></h4>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <br/>
                    <br/>
                    <hr/>
                    <p class="text-center">&copy; CopyRight</p>
                    <p class="text-center text-uppercase">Kisii County</p>
                    <p class="text-center">All Rights Reserved 2017</p>
                    <hr/>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="custom.js"></script>
    </body>
</html>