<?php
require('session.php');
?>
<!DOCTYPE html>
<html>

<head>

    <?php
    require 'myheader.php';
    ?>

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
                <h4 class="text-uppercase">WELCOME BACK <?php echo $login_session; ?> <span
                            class="glyphicon glyphicon-ok"></span></h4>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>


<!--footer-->
<div class="row footwell java3">
    <?php
    include 'getstarted.php';
    ?>
</div>

<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="custom.js"></script>
<script src="js/jquery.scrolltotop.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
</body>
</html>