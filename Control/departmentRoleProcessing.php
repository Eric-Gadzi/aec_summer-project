<?php
require "../Model/dbconnect.php";
require "../Model/stakeholders.php";



if(isset($_POST["submit"])){
    $dapartmentname= $_POST["depart_name"];
    
    

    
    createNewDepartment($dapartmentname);
    header("location:../View/Stakeholder.php");
}
?>


<?php
require "../Model/dbconnect.php";
require "../Model/stakeholders.php";



if(isset($_POST["submitrole"])){
    $rolename= $_POST["rname"];
    
    

    
    addNewRoles($rolename);
    header("location:..\View\Stakeholder.php");
    
}
?>

