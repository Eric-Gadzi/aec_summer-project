<?php


require_once "sqlfunctions.php";

function inforAboutGrant(){
    $query="SELECT Grantid, stakeholderid, Grant_name, Grant_Amount, Date_Recieved, Medium_recieved FROM Grants";
    return select($query);
}
function projectUnderGrants(){
    $query = "select Grants.Grantid, Project.Projectid ,Grants.Grant_name,Project.Project_name,Grant_Project.Amountgiven\n"

    . "FROM Grants,Grant_Project,Project\n"

    . "WHERE Grants.Grantid=grant_project.Grantid\n"

    . "and Project.Projectid=Grant_Project.Projectid";

    return select($query);

}

function eventsUnderAGrants($Grant_id){
    $query="SELECT Grants.Grantid, Events.eventid,Events.event_name,Events.event_type
     FROM Events,Grant_Event,Grants 
     WHERE Events.eventid=Grant_Event.eventid
      and Grants.Grantid=Grant_Event.Grantid 
      and Grants.Grantid = '$Grant_id'";
    return select($query);
}
function eventsAndGrants(){
    $query= "select Grants.Grantid, Events.eventid, Events.event_name ,Erants.Grant_name , 
    Grant_Event.Amountgiven from Events,Erants,Grant_Event where Grants.Grantid=Grant_Event.Grantid 
    and Events.eventid= rant_Event.eventid";
    return select($query);
}



function viewCompanyGrant(){
    $query = "
    SELECT Grants.Grantid, Grants.stakeholderid, company_name,`Grant_name`, `Grant_Amount`, `Date_Recieved`, `Medium_recieved` FROM `Grants`, Companies,Potential_Sponsors, Stakeholders WHERE Stakeholders.stakeholderid= Potential_Sponsors.stakeholderid and Potential_Sponsors.stakeholderid = Grants.stakeholderid and Stakeholders.stakeholderid=Companies.stakeholderid";

    return select($query);
}

function createPotentialSponsor($stakeholderid, $Date_ccontacted, $Contact_Status, $Medium_contact, $Reason_for_contact){
    $query="INSERT INTO `Potential_sponsors`(`stakeholderid`, `Date_contacted`, `Contact_Status`, `Medium_contact`, `Reason_for_contact`) VALUES ('$stakeholderid','$Date_ccontacted','$Contact_Status','$Medium_contact','$Reason_for_contact')";
    return insert($query);
}

function addNewGrant($stakeholderid, $Grant_name, $Grant_amount, $Date_received, $medium_received){
    $query = "INSERT INTO `Grants`(`stakeholderid`, `Grant_name`, `Grant_Amount`, `Date_Recieved`, `Medium_recieved`) VALUES ('$stakeholderid','$Grant_name','$Grant_amount','$Date_received','$medium_received')";
     return insert($query);   
}

function totalGrantRecieved(){
    $query="SELECT sum(Grants.Grant_Amount) as amount FROM Grants";
    return totalAll($query,"amount");
}

function totalDepartmentUnderGrant(){
    $query = "SELECT COUNT(DISTINCT department_id) as total FROM `Grant_Department` WHERE 1";
    return select($query);
}


function departmentTotalGrant(){
    $query = "SELECT  department.depart_name as department, SUM(Grant_Department.Amountgiven) as total_grant FROM `Grant_Department`, department, Grants WHERE Grant_Department.department_id = department.depart_id and Grants.Grantid = Grant_Department.Grantid GROUP BY department.depart_name";

    return select($query);
}

function grantForDepartment(){
    $query = "SELECT department.depart_id, Grants.Grantid, Grants.Grant_name, department.depart_name, `Amountgiven` FROM `Grant_Department`, department, Grants WHERE Grant_Department.department_id = department.depart_id and Grants.Grantid = Grant_Department.Grantid";

    return select($query);
}

function projectTotalGrantReceived(){
    $query = "SELECT `Grantid`, Project.Project_name, Project.Projectid, SUM(`Amountgiven`) as total FROM `Grant_Project`, Project WHERE Grant_Project.Projectid = Project.Projectid";

    return totalAll($query,"total");
}



// function displayTotalGrantsRecieved(){
//     $name= "Total Grants";
//     $query="SELECT sum(Grants.Grant_Amount) as amount FROM Grants";
//     $result = 
//    if($result->num_rows > 0){
//        $row = mysqli_fetch_assoc($result);
//        return $row['amount'];
//    }
// }

function displayTotalProjectUnderGrants(){
    $query = "SELECT COUNT(DISTINCT`Projectid`) as number FROM `Grant_Project`";
    return totalAll($query,"number");
}

function displayTableData(){
    $result = inforAboutGrant();

    //SELECT `Grantid`, `stakeholderid`, `Grant_name`, `Grant_Amount`, `Date_Recieved`, `Medium_recieved` FROM `grants`";

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $Grant_id = $row['Grantid'];
            $stakeholderid = $row['stakeholderid'];
            $Grant_name = $row['Grant_name'];
            $Grant_amount = $row['Grant_Amount'];
            $Date_received = $row['Date_Recieved'];
            $medium_received = $row['Medium_recieved'];
            echo "<tr>
            
            <td>
                <span class='custom-checkbox'>
                <input type='checkbox' id='checkbox1' name='options[]' value='1'>
                <label for='checkbox1'></label>
                    <input type='hidden' name='id' value=$Grant_id>
                    <input type='hidden' name='id' value=$stakeholderid>
                  
                </span>
            </td>
            <td>$Grant_name</td>
            <td>$Grant_amount</td>
            <td>$Date_received</td>
        
            <td>$medium_received</td>
            <td>
                <a href='#editEmployeeModal' class='edit' type = 'submit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
            </td>
            
        </tr>";
        
        }
    }
}

function displayPotentialSponsors(){
    $sql = 'SELECT Stakeholders.stakeholderid as id, Concat(Individuals.fname," ", Individuals.lname) as name from Stakeholders, Individuals, Potential_Sponsors where Stakeholders.stakeholderid = Individuals.stakeholderid and Stakeholders.stakeholderid = Potential_Sponsors.stakeholderid';

    $query = 'SELECT Stakeholders.stakeholderid as id, Companies.company_name as name from Stakeholders, Companies, Potential_Sponsors where Stakeholders.stakeholderid = Companies.stakeholderid and Stakeholders.stakeholderid = Potential_Sponsors.stakeholderid';

    $result = select($sql);
    $result2 = select($query);

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $id = $row['id'];
            echo "<option value='$id'>$name</option>";
        }
    }
    if($result2->num_rows > 0){
        while($row = mysqli_fetch_assoc($result2)){
            $name = $row['name'];
            $id = $row['id'];
            echo "<option value='$id'>$name</option>";
        }
    }

}

// function createGrant( $stakeholderid,$Grant_name, $Grant_amount, $Date_received, $medium_received){
//     $sql = "INSERT INTO `Grants`(`stakeholderid`, `Grant_name`, `Grant_Amount`, `Date_Recieved`, `Medium_recieved`) VALUES ('$stakeholderid','$Grant_name','$Grant_amount','$Date_received','$medium_received')";
//     $lastid = getLastInsertedID($sql);
//     grant_department($department_id, $lastid, $Grant_amount);
//     return $lastid; 
// }


function grant_department($department_id, $Grant_id, $amount){
    $sql = "INSERT INTO `Grant_Department`(`department_id`, `Grantid`, `Amountgiven`) VALUES ('$department_id','$Grant_id','$amount')";
    $result = select($sql);

}

function companyPartner(){
  $sql = "SELECT COUNT(companies.stakeholderid) as number FROM `Grants`, Companies,Potential_Sponsors, stakeholders WHERE stakeholders.stakeholderid= potential_sponsors.stakeholderid and potential_sponsors.stakeholderid = grants.stakeholderid and stakeholders.stakeholderid=companies.stakeholderid"; 
  
  return totalAll($sql, "number");
}

function pontTotal(){
    $sql="SELECT COUNT(*) as number FROM `Potential_Sponsors`";
    return totalAll($sql, "number");
}
?>


















