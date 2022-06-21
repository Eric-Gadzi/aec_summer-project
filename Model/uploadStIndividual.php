<?php

require("stakeholders.php");
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
                    $fname = $getData[0];
                    $lname = $getData[1];
                    $gender = $getData[2];
                    $role_id = $getData[3];
                    $contact = $getData[4];
                    $email = $getData[5];
                    $address = $getData[6];

                    
                    createIndividual($fname, $lname, $gender, $role_id, $contact, $email, $address);
                    
                }
                // Close opened CSV file
                fclose($csvFile);
                header("Location:../View/Stakeholder.php");
        }
        else
        {echo "Please select valid file";}
    }
?>

















