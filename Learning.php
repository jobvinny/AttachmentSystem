<?php
include('DatabaseConnection.php');
session_start(); // Starting Session
// Storing Session
$Hstudent = $_SESSION['login_student'];
if (isset($_POST['hub'])) {
    //session_start();
    $Date = mysql_real_escape_string($_POST['Date']);
    $learning = mysql_real_escape_string($_POST['learning']);
    $skills = mysql_real_escape_string($_POST['skills']);


    $sql = "INSERT INTO learning (Date,learn,skill)  VALUES('$Date','$learning','$skills')";
    mysqli_query($db, $sql);

    echo "<script> alert('Saved To The Learning Hub Store');</script>";
    require 'LearningE.php'; // Redirecting To Home Page
}