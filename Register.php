<?php

//connect to database
include('DatabaseConnection.php');
$erroruni = '';
$erroyear = '';
$errorsup = '';
$entered = '';
if (isset($_POST['register'])) {
//session_start();
    $studname = mysqli_real_escape_string($connection, $_POST['studname']);
    $reg_no = mysqli_real_escape_string($connection, $_POST['reg_no']);
    $monumber = mysqli_real_escape_string($connection, $_POST['monumber']);
    $course = mysqli_real_escape_string($connection, $_POST['course']);
    $year = mysqli_real_escape_string($connection, $_POST['year']);
    $datefrom = mysqli_real_escape_string($connection, $_POST['datefrom']);
    $dateto = mysqli_real_escape_string($connection, $_POST['dateto']);
    $uni = mysqli_real_escape_string($connection, $_POST['uni']);
    $semail = mysqli_real_escape_string($connection, $_POST['semail']);
    $saddress = mysqli_real_escape_string($connection, $_POST['saddress']);
    $supervisor = mysqli_real_escape_string($connection, $_POST['supervisor']);
    $place = mysqli_real_escape_string($connection, $_POST['place']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $natid = mysqli_real_escape_string($connection, $_POST['natid']);
    if ($year == "Choose year") {
        $erroyear = "Please Select Year";
    } else if ($uni == "Choose University") {
        $erroruni = "Please Select Your University";
    } else if ($supervisor == "Assigned Supervisor") {
        $errorsup = "Please Select Supervisor";
    } else {
        $sql = "INSERT INTO registration (Student_Name,Registration_Number,"
            . "Mobile_Number,Course_Of_Study,Year_Of_Study,DateFrom,DateTo,University_Of_Study,"
            . "Student_Email,Address,Supervisor_Name,Section,Student_Gender,National_ID)"
            . " VALUES(' $studname','$reg_no','$monumber','$course','$year','$datefrom'"
            . ",'$dateto','$uni','$semail','$saddress','$supervisor'"
            . ",'$place','$gender','$natid')";
        $sql2 = ("CREATE TABLE _$natid(
    ID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ID),
    Date VARCHAR(10),
    learn VARCHAR(1000000),
    skill VARCHAR(1000000),
    National_ID varchar(9))");
        //superviser students 
        $assignstudent = str_replace(' ', '', $supervisor);
        $sqls = ("CREATE TABLE $assignstudent(
    ID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ID),
    Student_Name VARCHAR(50),
    Registration_Number VARCHAR(50),
    Mobile_Number VARCHAR(14),
    Course_Of_Study VARCHAR(100),
    Student_Gender VARCHAR(10),
    University_Of_Study VARCHAR(100),
    Student_Email VARCHAR(50),
    National_ID varchar(9),
    DateTo varchar(20))");
        mysqli_query($connection, $sql2);
        $SUPERTALE = mysqli_query($connection, $sqls);
        mysqli_query($connection, $sql);
        $sql4 = "INSERT INTO $assignstudent (Student_Name,Registration_Number,"
            . "Mobile_Number,Course_Of_Study,Student_Gender,University_Of_Study,Student_Email,National_ID,DateTo)"
            . " VALUES(' $studname','$reg_no','$monumber','$course','$gender','$uni'"
            . ",'$semail','$natid','$dateto')";
        if ($SUPERTALE == TRUE) {
            mysqli_query($connection, $sql4);
        } else {
            mysqli_query($connection, $sql4);
        }
        echo "<script> alert(' $studname' +' with '+'$reg_no' +' '+' Has Been Successifully Registered');</script>";
        $entered = "$studname with Registration $reg_no Has Been Registered";
        //require './RegisterSection.php';
    }
}