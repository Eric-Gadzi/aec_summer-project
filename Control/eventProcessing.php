<?php
require "../Model/dbconnect.php";
require ("../Model/eventsFunctions.php");



if(isset($_POST["submit"])){
    $department_id= $_POST["depart_id"];
    $eventName = $_POST["evname"];
    $eventStartDate = $_POST["evsdate"];
    $eventEndDate=$_POST["evndate"];
    $eventTargetGroup=$_POST["event_target_group"];
    $eventType=$_POST["event_type"];
    $eventDescription=$_POST["evdescription"];

    insertintoEvent($department_id,$eventName, $eventStartDate, $eventEndDate,
$eventTargetGroup,$eventType,$eventDescription);
header("location:..\View\Stakeholder.php");
    

    
    


    
    




}
?>