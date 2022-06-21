<?php
require("eventFunctions.php");
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
       /*
       Validate whether selected file is a CSV file
       Open uploaded CSV file with read-only mode
       Skip the first line
       */
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
        {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            fgetcsv($csvFile);
            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
                {
                    // Getting row data from csv file
                    $department_id = $getData[0];
                    $event_name = $getData[1];
                    $event_start_date = $getData[2];
                    $event_end_date = $getData[3];
                    $event_target_group= $getData[4];
                    $event_type = $getData[5];
                    $event_description = $getData[6];
                    
                    insertintoEvent( $department_id,$event_name ,$event_start_date,$event_end_date ,$event_target_group,$event_type ,$event_description );
                    
                    
                }
                // Close opened CSV file
                fclose($csvFile);
                header("Location:../View/Stakeholder.php");
        }
        else
        { echo "Please select valid file";}
    }
?>





