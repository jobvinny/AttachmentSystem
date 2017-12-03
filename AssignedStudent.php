<?php
include('supersession.php');
include('DatabaseConnection.php')
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

</head>

<body class="back3">
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
                    <a class="navbar-brand" href="SupervisorSection.php"><img src="img/BrandingLogo.png"
                                                                              class="img-responsive"
                                                                              id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="AssignedStudent.php">View Student</a></li>
                        <li><a href="SProgressEngine.php">Student Progress</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 table-responsive">
            <?php

            //check for connection failures
            if ($connection) {
                //mysqli_select_db("kisii_county") or die(mysql_error());
                // Get all the data from the table
                $result = mysqli_query($connection, "SELECT * FROM $assignstudent");
                if ($result == TRUE) {
                    echo "<table class='table table-bordered'>";
                    echo "<thead>
                        <tr>
                            <td>Student_Name</td>
                            <td>Gender</td>
                            <td>Registration_Number</td>
                            <td>National_ID</td>
                            <td>Mobile_Number</td>
                            <td>Course</td>
                            <td>University</td>
                            <td>Student_Email</td>
                            <td>Completed Attachment</td>
                        </tr>
                      </thead>";
                    echo "<tbody>";
                    // keeps getting the next row until there are no more to get
                    while ($row = mysqli_fetch_array($result)) {
                        $datecomp2 = $row['DateTo'];
                        if (strtotime($datecomp2) < time()) {
                            $showcomplition2 = "<p class='text-center text-success'><span class=\"glyphicon glyphicon-ok\"></span></p>";
                        } else {
                            $showcomplition2 = "<p class='text-center text-danger'><span class=\"glyphicon glyphicon-remove\"></span></p>";
                        }
                        // Print out the contents of each row into a table
                        echo "<tr><td class = 'lwrite'>";
                        echo $row['Student_Name'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Student_Gender'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Registration_Number'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['National_ID'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Mobile_Number'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Student_Email'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Course_Of_Study'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['University_Of_Study'];
                        echo "</td><td class='lwrite'>";
                        echo $showcomplition2;
                        echo "</td></tr>";


                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<br/>";
                    echo "<br/>";
                    echo "<h1 class='text-center text-danger'>Sorry No Students Have Been A Located</h1>";
                    echo "<h1 class='text-center text-danger'>To You Yet</h1>";
                }
            }
            ?>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 input-group">
            <p class="text-info java">Supervisor Name .........................................</p>
            <br/>
            <p class="text-info java">Sign ......................................... Date
                ..........................................</p>
            <br/>
            <p class="text-info java">Student Name .........................................</p>
            <br/>
            <p class="text-info java">Student Reg_Number .........................................</p>
            <br/>
            <p class="text-info java">Sign ......................................... Date
                ..........................................</p>
            <br/>
            <br/>
            <p class="text-info java">General Remarks(For Official Use Only)</p>
            <p class="text-info java">
                ...................................................................................................</p>
            <p class="text-info java">
                ...................................................................................................</p>
            <p class="text-info java">
                ...................................................................................................</p>
            <p class="text-info java">
                ...................................................................................................</p>
            <br/>
            <br/>
            <p class="text-info java text-center" style="margin-left: 230px;">*Thank You For Choosing Kisii County*</p>
        </div>
        <button onclick="adminprintprogress3()" id="lprint" class="btn btn-lg btn-dark btoptech4 pull-right"
                title="Double Click To Print">
            <span class="glyphicon glyphicon-print"></span>
        </button>
        <a href="#top" class="btn btn-dark btn-lg pull-left java3"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
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

