<?php
require "../Model/dbconnect.php";
require " ../Model/sqlfunctions.php";



if(isset($_POST["Submit"])){
    
    $courseName = $_POST["cname"];
    $courseDate = $_POST["cdate"];
    $courseStatus=$_POST["cstatus"];
    $courseDescription=$_POST["cdescription"];

    insertintoCourse($courseName,$courseDate, $courseStatus, $courseDescription);
    header("location: ..\View\Stakeholder.php");
    

    
    


    
    




}
?>