<?php
require "../Model/dbconnect.php";
require "../Model/stakeholders.php";
require_once "../Model/sqlfunctions.php";



if(isset($_POST["submit"])){
    $fname= $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $role_id=$_POST["role_id"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $address=$_POST["address"];

    echo $email;

    $checkduplicate=select("SELECT  `contact`, `email` FROM `Stakeholders` WHERE email='$email' and contact='$contact'");
    if($checkduplicate->num_rows === 0){
         createIndividual($fname, $lname, $gender, $role_id, $contact, $email, $address);
         header("location:../View/Stakeholder.php");
    }
    else{
      echo  '<script>
    alert("Person Exits already");
    </script>';
    }
}

if(isset($_GET['edit'])){
    echo "hello";
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $id = $_GET['id'];
    $contact = $_GET['contact'];
    $role_name = $_GET['role_name'];
    $email = $_GET['email'];
    // $role_id = $_GET['role_id'];

    echo "
    <!DOCTYPE html>
<html>
<style>
    body {
        background-color: #7a0c12;
    }
    
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=email],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type=submit] {
        width: 100%;
        background-color: #7a0c12;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input[type=submit]:hover {
        background-color: #7a0c12;
    }
    
    div {
        border-radius: 3px;
        background-color: #f2f2f2;
        padding: 50px;
        position: relative;
        width: 350px;
        text-align: left;
    }
</style>

<body>


    <center>

        <div style='margin-top: 150px;'>
            <form action='stakeholderIndivProcessing.php'>
            <input type='hidden' id='fname' name='id' placeholder='First Name' value = '$id'>
                <input type='hidden' name='id'>
                <label for='fname'>First name</label>
                <input type='text' id='fname' name='fname' placeholder='First Name' value = '$fname'>

                <label for='fname'>Last  name</label>
                <input type='text' id='lname' name='lname' placeholder='Last Name' value = '$lname'>
                
                <label for='c'>Contact</label>
                <input type='text' id='c' name='contact' placeholder='Last Name' value = '$contact'>

                <label for='fname'>Email</label>
                <input type='email' id='lname' name='email' placeholder='Last Name' value = '$email'>

                <label>Select Gender</label><br>
                <input type='radio' id='css' name='gender' value='male' style='background-color: red;'>
                <label for='css'>Male</label><br>
                <input type='radio' id='javascript' name='female' value='JavaScript'>
                <label for='javascript'>Female</label><br>


                <br><label for='cars'>Select Role:</label>

                <select id='cars' name = 'role_id'>
                <option value='4'>Other</option>
                <option value='1'>Student</option>
                <option value='2'>Alumni</option>
                <option value='3'>Lecturer</option>
                </select>

                <input type='submit' value='Submit' name = 'submitUpdate'>
            </form>
        </div>

    </center>
    S
</body>

</html>
    
    ";

    
}


// Delete stakehoder record
// $ids = $_GET["id"];

// $sql = "DELETE FROM `individuals` WHERE `stakeholderid`='" . $_GET["id"] . "'";
// if (mysqli_query($conn, $sql)) {
//     echo  "<script>
//     alert('Record deleted Successfully');
//     window.location.href='..\View\Stakeholder.php';
//     </script>; 
//     ";
    
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }
// mysqli_close($conn);

if(isset($_GET['submitUpdate'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $id = $_GET['id'];
    $contact = $_GET['contact'];
    $role_id = $_GET['role_id'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];

    $result = updateIndividual($id, $fname, $lname, $gender, $role_id); 
    

    header("location: ../View/Stakeholder.php");
}









?>