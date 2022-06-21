<?php

require_once "sqlfunctions.php";

function departmentshows(){
    $query="SELECT depart_id, depart_name from department";
    return select($query);
}

function createNewDepartment($dapartmentname){
    $query="INSERT INTO `department`(`depart_name`) VALUES ('$dapartmentname')";
    return insert($query);
}
function addNewRoles($rolename){
    $query="INSERT INTO `Roles`(`role_name`) VALUES ('$rolename')";
    return insert($query);
}

function totalDepartment(){
    $query = "SELECT count(depart_id)  as number FROM `department`;";
    return totalAll($query,"number");

}



function infoDepartmentProj(){
    $query= "SELECT department.depart_id, department.depart_name, count( DISTINCT Project.Projectid) as number1 from department,Project where department.depart_id=Project.department_id group by depart_name";
    return select($query);
    

}

function infoDepartmentEvent(){
    $query= "SELECT department.depart_id ,department.depart_name , count(DISTINCT Events.eventid) as number2
    FROM department,Events,Project  where  department.depart_id=Events.department_id group by depart_name";
    return select($query);
    

}


function totalBusinessProject(){
    $query = "select count(projectid) as number from Project where Project_type='Business enterprise'";
    return totalAll($query,"number");

}

function totalSocialProject(){
    $query = "select count(projectid) as number from Project where Project_type='Social project'";
    return totalAll($query,"number");

}




function totalSDGProject(){
    $query = "SELECT count(DISTINCT project.Projectid) as number from Project,SDG,SDG_Project where SDG.SDG_ID=SDG_Project.SDG_ID and Project.Projectid=SDG_Project.Projectid";
    return totalAll($query,"number");

}



function displayDeptProj(){

    $result = infoDepartmentProj();
        // eventid	department_id	event_name	event_start_date	event_end_date	event_target_group	event_type	event_description 
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['depart_id'];
                $depart_name = $row['depart_name'];
                $totalProjects = $row['number1'];
                // $totalEvents = $row['number2'];
                

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>

    <td>$depart_name</td>
    <td>$totalProjects</td>
   
    
    <td>
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>

        <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></a>
    </td>
</tr>";
            }
        }

}




function displayDeptEvent(){

    $result = infoDepartmentEvent();
        // eventid	department_id	event_name	event_start_date	event_end_date	event_target_group	event_type	event_description 
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['depart_id'];
                $depart_name = $row['depart_name'];
                $totalEvent = $row['number2'];
                // $totalEvents = $row['number2'];
                

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>

    <td>$depart_name</td>
    <td>$totalEvent</td>
   
    
    <td>
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>

        <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></a>
    </td>
</tr>";
            }
        }

}





function displaySelectDepartment(){
    $result = departmentshows();
    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $depart_id = $row['depart_id'];
            $depart_name = $row['depart_name'];

            echo "<option value='$depart_id'>$depart_name</option>";
        }
    }
}





?>