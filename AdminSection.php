<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
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
</head>
<body class="back">
<div class="container-fluid toptechdark">
    <div class="row panelnav">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid dark">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="AdminSection.php"><img src="img/BrandingLogo.png"
                                                                         class="img-responsive"
                                                                         id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="RegisterSection.php">Register Student</a></li>
                        <li><a href="ProgressEngine.php">Student Progress</a></li>
                        <li><a href="SearchEngine.php">Search Details</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5"></div>
            <div class="col-md-3">
                <img src="img/BrandingLogo.png" class="img-rounded img-responsive" id="imagelogo">
                <h2 class="logos">
                    <span class="icon gfx-star-3 colorblack"></span>
                    <span class="icon gfx-star-3 colorred"></span>
                    <span class="icon gfx-star-3 colorgreen"></span>
                </h2>
                <h4 class="text-success">WELCOME BACK <u><i> <?php echo $login_session; ?></i></u><span
                            class="glyphicon glyphicon-ok"></span></h4>
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
            <h4 class="text-center"><a href="http://tecksolke.com/">
                    <button class="btn btn-link btn-md btnlinks3">TECKSOL LIMITED</button>
                </a></h4>
            <h4 class="text-center"><a href="https://github.com/">
                    <button class="btn btn-link btn-md btnlinks3">GIT HUB</button>
                </a></h4>
            <h4 class="text-center"><a href="https://stackoverflow.com/">
                    <button class="btn btn-link btn-md btnlinks3">STACK OVERFLOW</button>
                </a></h4>
            <h4 class="text-center"><a href="https://www.ecitizen.go.ke/">
                    <button class="btn btn-link btn-md btnlinks3">E-CITIZEN</button>
                </a></h4>
            <h4 class="text-center"><a href="https://itax.kra.go.ke/KRA-Portal/">
                    <button class="btn btn-link btn-md btnlinks3">KENYA REVENUE</button>
                </a></h4>
        </div>
        <div class="col-md-4">
            <h3 class="text-center hubmob footer-heading">Contact Us</h3>
            <br>
            <h4 class="text-center"><a href="http://www.kisii.go.ke/">
                    <button class="btn btn-link btn-md btnlinks">KISII COUNTY</button>
                </a></h4>
            <h4 class="text-center">
                <button type="button" class="btn btn-dark btn-md btnlinks" data-toggle="collapse" data-target="#demo2">
                    CONTACTS
                </button>
            </h4>
            <div id="demo2" class="collapse">
                <h3 class="text-center text-info">+254-713-255791</h3>
            </div>
            <h4 class="text-center"><a href="mailto:info@kisii.go">
                    <button class="btn btn-link btn-md btnlinks">EMAIL US</button>
                </a></h4>
        </div>
        <div class="col-md-4">
            <h3 class="text-center hubweb footer-heading">Social Media</h3>
            <br/>
            <h4 class="text-center"><a
                        href="https://www.google.com/search?q=facebook&ie=utf-8&oe=utf-8&client=firefox-b-ab">
                    <button class="btn btn-link btn-md btnlinks2">FACEBOOK</button>
                </a></h4>
            <h4 class="text-center"><a href="https://twitter.com/">
                    <button class="btn btn-link btn-md btnlinks2">TWITTER</button>
                </a></h4>
            <h4 class="text-center"><a
                        href="https://www.google.com/search?q=instagram&ie=utf-8&oe=utf-8&client=firefox-b-ab">
                    <button class="btn btn-link btn-md btnlinks2">INSTAGRAM</button>
                </a></h4>
            <h4 class="text-center"><a href="https://www.linkedin.com/">
                    <button class="btn btn-link btn-md btnlinks2">LINKED *iN</button>
                </a></h4>
            <h4 class="text-center"><a href="https://www.youtube.com/">
                    <button class="btn btn-link btn-md btnlinks2">YOU TUBE</button>
                </a></h4>
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
<script src="js/jquery.scrolltotop.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
</body>
</html>