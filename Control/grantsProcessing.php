<?php
   require_once "../Model/grantFunctions.php";

     if(isset($_POST['submit'])){
        $stakeholderid = $_POST['stakeholder'];
        $grant_name = $_POST['grant_name'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
        $medium_received = $_POST['medium_received'];

        createGrant($stakeholderid,$grant_name, $amount, $date, $medium_received);

        header("Location:..\View\grant.php");
         
         

     }


?>