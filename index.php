<?php
include('login.php'); // Includes login Script

if (isset($_SESSION['login_user'])) {
    header("location: AdminSection.php");
} else if (isset($_SESSION['login_student'])) {
    header("location: StudentSection.php");
} else if (isset($_SESSION['login_Supervisor'])) {
    header("location: SupervisorSection.php");
}
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
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

</head>

<body>
<header id="top" class="helloworld">
    <div class="carousel-caption showmeso">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="img/BrandingLogo.png">
                    <h2><span class="glyphicon glyphicon-user"></span>&nbsp;Student Attachment System&nbsp;<span
                                class="glyphicon glyphicon-pencil"></span></h2>
                    <hr/>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h4 class="text-center text-info count">Election Count Down</h4>
                    <h4 id="demo" class="text-center count"></h4>
                    <h3 class="tech-club text-center text-info">WELCOME</h3>
                    <h3 class="icon gfx-like tech-club"></h3>
                    <button type="button" class="btn btn-dark btn-md bcolored1" data-toggle="collapse"
                            data-target="#demo2"><span class="glyphicon glyphicon-log-in"></span>&nbsp;LOGIN SECTION
                    </button>
                    <div id="demo2" class="collapse">
                        <hr/>
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#AdminModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Admin
                            Login</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#SuperModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Supervisor
                            Login</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#StudentModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Student
                            Login</a>
                        <hr/>
                    </div>
                    <br/>
                    <a href="https://youtu.be/iZSuW8cZvrk" target="_blank">
                        <button class="btn btn-link btn-lg">*Help*</button>
                    </a>
                    <?php
                    //date_default_timezone_get('Africa/EAT/Nairobi');
                    //$date = date('Y/m/d h:i:s a',time());
                    $date = date('d/m/Y', time());
                    echo "<br/>";
                    echo "<p class='text-center text-success'>DATE</p>" . $date;
                    ?>
                    <hr/>
                </div>
                <br/>
                <marquee><p>&copy;All Rights Reserved 2017.</p></marquee>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</header>

<!--class mordal starts here for admin login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="AdminModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Admin
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/admin.png" class="img-responsive gcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-user input-group-addon lwrite"></span>
                                <input type="text" class="form-control input-md lwrite" placeholder="Username"
                                       required="required" name="username">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2" name="submit"
                                       value="LOGIN">
                            </div>
                            <div class="form-group">
                                <span><?php echo $error; ?></span>
                            </div>
                        </form>
                        <a href="AdminResetPass.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of admin-->

<!--class mordal starts here for studdent login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="StudentModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Student
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/STUDENT.png" class="img-responsive Sgcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-pencil input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite" placeholder="Enter School Reg_No"
                                       required="required" name="reg_no">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="passstudent">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2"
                                       name="studentlogin" value="LOGIN">
                            </div>
                            <span><?php echo $errorstud; ?></span>
                        </form>
                        <a href="StudentPassReset.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of student-->

<!--class mordal starts here for supervisor login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="SuperModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Supervisor
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/admin.png" class="img-responsive Sgcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-user input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite" placeholder="Username"
                                       required="required" name="superusername">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="passwordsuper">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2"
                                       name="superlogin" value="LOGIN">
                            </div>
                            <span><?php echo $errorsuper; ?></span>
                        </form>
                        <a href="SuperPassReset.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of supervisor-->

<!--class mordal starts here for video-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="videoModal" role="dialog">
        <div class="modal-dialog modal-lg socialshow">
            <div class="modal-content socialshow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">How System Functions</h4>
                </div>
                <div class="modal-body">
                    <video id="eventshow" controls>
                        <source src="video/kisii.webm" type="video/webm">
                        Sorry Video Can't Load/Not Supported.
                    </video>
                </div>
                <div class="modal-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-uppercase text-center text-info">Student Attachment System</p>
                        <p class="text-danger text-center">**TUTORIAL**</p>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-dark btn-md bclose" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of student-->
<!--footer-->
<div class="row">
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
                    <button type="button" class="btn btn-dark btn-md btnlinks" data-toggle="collapse"
                            data-target="#demo4">CONTACTS
                    </button>
                </h4>
                <div id="demo4" class="collapse">
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
                <h1 class="text-center"><img src="techicons/kenya.png" class="img-responsive img-portfolio"></h1>
                <hr/>
                <?php
                echo "<p class='text-center'>&copy; CopyRight</p>";
                echo "<p class='text-center text-uppercase'>Kisii County</p>";
                echo "<p class='text-center'>All Rights Reserved 2017</p>";
                ?>
                <hr/>
            </div>
            <div class="col-md-3"></div>
        </div>
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