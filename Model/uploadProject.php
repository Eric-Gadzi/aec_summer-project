<?php
require("projectFunctions.php");

if(isset($_POST['submit'])){
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
        // Validate whether selected file is a CSV file
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
        {       // Open uploaded CSV file with read-only mode
                $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                // Skip the first line
                fgetcsv($csvFile);
                // Parse data from CSV file line by line
                while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
                {   // Get row data
                    $department_id  = $getData[0];
                    $Project_name = $getData[1];
                    $Project_description = $getData[2];
                    $Communication_type = $getData[3];
                    $Project_status = $getData[4];
                    $Project_industry = $getData[5];
                    $Project_location = $getData[6];
                    $Project_type = $getData[7];

                    
                    insertIntoProject($department_id,$Project_name,$Project_description,$Communication_type,$Project_status
                    ,$Project_industry ,$Project_location ,$Project_type);
                }
                // Close opened CSV file
                fclose($csvFile);
                header("Location:../View/Stakeholder.php");
        }
        else{echo "Please select valid file";}
    }
?>











