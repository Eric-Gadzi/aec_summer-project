<?php
require "../Model/dbconnect.php";
require " ../Model/sqlfunctions.php";



if(isset($_POST["submit"])){
    
    $course_id = $_POST["course_id"];
    $module_name = $_POST["modulename"];
    $module_description=$_POST["moduleDescription"];
    

    insertintoModules($course_id,$module_name, $module_description);
    header("location:..\View\Stakeholder.php");
    

    
    
    


    
    




}
?>