<?php
require "../Model/dbconnect.php";
require "../Model/sqlfunctions.php";

// keep track of errors
$errors = array();

if(isset($_POST["submit"])){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    // validate data
    // check if fields are empty
    if(empty($email)){
        array_push($errors, "email is requried");
    }
    if(empty($password)){
        array_push($errors, "password is requried");
    }

    // if form is fin
    if(count($errors) == 0){
        // Validating login Credentials
        $sql="SELECT `email`, `password` FROM `admins`
         WHERE  email ='$email' and password = '$password' ";
         // if statement to allow Login if match found
        $result= $conn->query($sql);
        

         if($result-> num_rows > 0){
            header("location:../View/Stakeholder.php");
            exit;
        }
         else{
            echo '<script>
            alert("Wrong credentials for Login");
            </script>';
              
            }
    }
    else{
        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        echo $errors;
        
    }
    




}
?>