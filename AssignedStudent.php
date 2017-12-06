<?php
require('supersession.php');
require('DatabaseConnection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require 'myheader.php';
    ?>

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

