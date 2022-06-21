<?php
    require_once "sqlfunctions.php";

    function roles(){
        $query="SELECT role_id,role_name from Roles";
        return select($query);
    }

    function createStakeholder($contact, $email, $address){

        $query = "INSERT INTO `Stakeholders`( `contact`, `email`, `address`) VALUES ('$contact','$email','$address')";
        $lastid = getLastInsertedID($query);

        return $lastid;
    }

    function createIndividual($fname, $lname, $gender, $role_id, $contact, $email, $address){
        $stakeholderid = createStakeholder($contact, $email, $address);
        $query = "INSERT INTO `Individuals`(`stakeholderid`, `fname`, `lname`, `gender`, `role_id`) VALUES ('$stakeholderid','$fname','$lname','$gender','$role_id')";

        return insert($query);
    }

    function createCompany($company_name, $contact, $email, $address){
        $stakeholderid = createStakeholder($contact, $email, $address);
        $query = "INSERT INTO `Companies`(`stakeholderid`, `company_name`) VALUES ('$stakeholderid','$company_name')";
        
        return insert($query);
    }

    function updateStakeholder($stakeholderid, $contact, $email, $address){
        $query = "UPDATE `Stakeholders` SET `contact`='$contact',`email`='$email' `address`='$address' WHERE stakeholderid = '$stakeholderid'";
        update($query);
    }

    function updateIndividual($stakeholderid, $fname, $lname, $gender, $role_id){
        $query = "UPDATE `Individuals` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`role_id`='$role_id' WHERE stakeholderid = '$stakeholderid'";
        return update($query);
    }

    function updateCompany($stakeholderid, $company_name){
        $query = "UPDATE `Companies` SET `company_name`='$company_name' WHERE `stakeholderid` = '$stakeholderid'";
        return update($query);
    }

    function deleteStakeholder($stakeholderid){
        $query = " DELETE FROM `Stakeholders` WHERE `stakeholderid` = '$stakeholderid'";
        return update($query);
    }

    function deletecompany($id){
        $sql = "DELETE FROM `companies` WHERE stakeholderid = '$id'";
        $result = delete($sql);
        $result2 = deleteStakeholder($id);
        return $result2;
    }

    function viewAllIndividuals(){
        $query = "SELECT Stakeholders.stakeholderid,fname, lname, `email`, gender, `contact` , Roles.role_name, Roles.role_id FROM Stakeholders, Individuals,Roles where Stakeholders.stakeholderid=Individuals.stakeholderid and Individuals.role_id=Roles.role_id";
        return select($query);
    }

    function viewAllCompanies(){
        $query = "SELECT Stakeholders.stakeholderid ,Companies.company_name,Stakeholders.contact,Stakeholders.email,Stakeholders.address from Stakeholders,Companies where Stakeholders.stakeholderid=Companies.stakeholderid";
        return select($query);
    }

    function viewAllStudents(){
        $query = "Select DISTINCT fname, lname, major, level, email, address,
         contact, stakeholders.stakeholderid, gender, individuals.role_id FROM Students, Stakeholders, Individuals 
        WHERE Students.stakeholderid = Individuals.stakeholderid and 
        Stakeholders.stakeholderid = Individuals.stakeholderid ";

        return select($query);
    
    }

    function totalStudent(){
        $query="select count(Students.stakeholderid) as students from Students";
        return totalAll($query, "students");
    }

    function totalAlumni(){
        $query="select count(stakeholderid) as number from Individuals , Roles where Individuals.role_id = Roles.role_id and Roles.role_name = 'Alumni'";
        return totalAll($query, "number");
    }

    function totalCoaches(){
        $query="SELECT DISTINCT count(Stakeholder_Project.stakeholderid) as number   from Stakeholder_Project where Stakeholder_Project.stakeholder_type = 'Coache'";
        return totalAll($query, "number");
    }


    function totalEngineeringStudents(){
        $query="SELECT DISTINCT count(Students.stakeholderid) as Engineers from Students where Students.major='Engineering'";
        return totalAll($query, "Engineers");
    }

    function totalCSstudents(){
        $query="SELECT DISTINCT count(Students.stakeholderid) as cs from Students where Students.major='Computer Science'";
        return totalAll($query, "cs");

    }
    function totalUser(){
        $query="select DISTINCT count(Stakeholders.stakeholderid) as 'Total Users' from Stakeholders";
    
        return totalAll($query, "Total Users");
    }

    function totalCompanies(){
        $query="SELECT DISTINCT count(Companies.stakeholderid) as number from Companies";
        return totalAll($query, "number");
    }

   

    

    function totalCompanyCoaches(){}
    function totalStudentCoaches(){}
    
    function displaytables(){
        


        $result = viewAllIndividuals();
        // stakeholders.stakeholderid,fname, lname, `email`, gender, `contact` , roles.role_name 
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['stakeholderid'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $gender = $row['gender'];
                $contact = $row['contact'];
                $role_name = $row['role_name'];
echo"  <tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>
    <td> $fname </td>
    <td> $lname </td>
    <td> $email </td>
    <td> $gender </td>
    <td> $contact </td>
    <td> $role_name</td>
    <td>

    <form action = '../Control/stakeholderIndivProcessing.php' method = 'GET'>
    <input type = 'hidden'  name = 'fname' value = '$fname'>
    <input type = 'hidden' value = '$lname' name = 'lname'>
    <input type = 'hidden' value = '$id' name = 'id'>
    <input type = 'hidden' value = '$contact' name = 'contact'>
    <input type = 'hidden' value = '$role_name' name = 'role_name'>
    <input type = 'hidden' value = '$email' name='email'>
    

    <button name = 'edit' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></button>
    </form>

    <form action = '../Control/stakeholderIndivProcessing.php' method = 'POST'>
    
        
    <input type = 'hidden' value = '$id' name = 'id'>
    <button type='submit'data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></button>
    </form>

    </td>
</tr>";
}
        }

       
    }



// role_id,role_name
    function displaySelectRoles(){
        $result = roles();
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $role_id = $row['role_id'];
                $role_name = $row['role_name'];
    
                echo "<option value='$role_id'>$role_name</option>";
            }
        }
    }


    
    function displaytablesCompanies(){
        


        $result = viewAllCompanies();
         
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['stakeholderid'];
                $company_name = $row['company_name'];
                $contact = $row['contact'];
                $email = $row['email'];
                $address = $row['address'];
               

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>
    
    <td>$company_name</td>
    <td>$contact</td>
    <td>$email</td>
    <td>$address</td>
    
    <td>
                
       
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>
            
        <form action = '../Control/stakeholderCompanyPro.php' method = 'POST'>
               
        <input type = 'hidden' value = '$id' name = 'id'>
        <button type='submit' name = 'delete'  data-toggle='modal' ><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></button>
        </form>
    </td>
</tr>";
            }
        }

       
    }

    


?>