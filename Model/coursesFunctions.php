<?php
require_once ("sqlfunctions.php");

// delete update

function totalCourses(){
    $query=" select count(course_name) as number from courses";
    return totalAll($query,"number");
}

function totalModules(){
    $query="select distinct count(module_id) as number from modules";
    return totalAll($query,"number");
}

function totalActiveCourse(){
    $query="select count(course_name) as number from courses where course_status= 'Active'";
    return totalAll($query,"number");

}

function totalInactiveCourse(){
    $query="select count(course_name) as number from courses where course_status= 'Inactive'";
    return totalAll($query,"number");

}

function coursesAndNumberOfModules(){
    $query=" Select courses.course_name AS Courses, count(modules.course_id ) As Modules from courses, modules where courses.course_id=modules.course_id group by courses.course_name";
    return select($query);
}



function insertintoCourse($courseName,$courseDate, $courseStatus, $courseDescription){
    $query= "insert into `courses`(`course_name`, `date_started`, `course_status`, `course_description`) 
    VALUES('$courseName','$courseDate','$courseStatus', '$courseDescription') ";
    return insert($query);
}

function showAllCourses(){
    $query="SELECT distinct course_name,course_id,date_started,course_status,course_description from courses";
    return select($query);
}

function showCoursesAndModules(){
    $query="Select  modules.module_name As Modules , modules.module_description As Description,
    courses.course_name AS Courses,courses.course_status As CourseStatus
    from courses, modules
    where courses.course_id=modules.course_id";
    return select($query);

}

function coursesinfoAndNumberOfModules(){
    $query=" Select  courses.course_name ,courses.course_status,
    count(modules.module_name) As Modules 
    from courses, modules
    where courses.course_id=modules.course_id";
    return select($query);
}

function modulesUnderParticularCourse(){
    $query="Select courses.course_id, modules.module_name As Modules , modules.module_description As Description,
    courses.course_name AS Courses from courses, modules
    where courses.course_id=modules.course_id";
    return select($query);
}

function deleteACourse($courseid){
    $query="Delete from courses where course_id = '$courseid' ";
    return delete($query);
}

function updateACourseName($courseid, $courseName){
    $query="Update courses set `course_name`='$courseName' where 'course_id' = '$courseid' ";
    return delete($query);
}

function updateACourseStatus($courseid, $courseStatus){
    $query="Update  `courses` set 'course_status' ='$courseStatus' where 'course_id' = '$courseid' ";
    return delete($query);
}



/* Modules */

function deleteAModules($module_id){
    $query="Delete from modules where module_id = '$module_id' ";
    return delete($query);
}

function updateAModuleName($module_id, $module_name){
    $query="Update modules set `module_name`='$module_name' where 'module_id' = '$module_id' ";
    return delete($query);
}

function insertintoModules($course_id,$module_name, $module_description){
    $query= "INSERT INTO `modules`(`course_id`, `module_name`, `module_description`) 
    VALUES ('$course_id','$module_name','$module_description') ";
    return insert($query);
}


//Tables

function displayCourses(){

    $result = showAllCourses();
    // course_id,course_name,course_status,course_description
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['course_id'];
                $course_name = $row['course_name'];
                $course_date = $row['date_started'];
                $course_status = $row['course_status'];
                $course_description = $row['course_description'];
                

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>
    <td>$course_name</td>
    <td>$course_status</td>
    <td>$course_date</td>
    <td>$course_description</td>
    
    <td>
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>

        <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></a>
    </td>
</tr>";
            }
        }

}
// SELECT distinct course_name,course_id,date_started,course_status,course_description from courses
function displaySelectCourse(){
    $result = showAllCourses();
    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $course_id = $row['course_id'];
            $course_name = $row['course_name'];

            echo "<option value='$course_id'>$course_name</option>";
        }
    }
}


function displayModules(){

    $result = modulesUnderParticularCourse();
    
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['course_id'];
                $course_name = $row['Modules'];
                $Module_name = $row['Description'];
                $Module_description = $row['Courses'];
                
                

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>
    <td>$Module_name</td>
    <td>$Module_description</td>
    <td>$course_name</td>
    
    
    <td>
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>

        <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></a>
    </td>
</tr>";
            }
        }

}

function courseCountParticipants(){
    $sql = "SELECT courses.course_name, COUNT(stakehoder_course.stakeholderid) as number From courses, stakehoder_course WHERE courses.course_id = stakehoder_course.course_id GROUP BY stakehoder_course.course_id";
    
    $result = select($sql);

    if($result){
        if($result->num_rows > 0){
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $name = $row['course_name'];
                $number = $row['number'];
                echo "<tr>
                <th scope='row'>$i</th>
                <td>$name</td>
                <td>$number</td>

            </tr>";
            $i++;
            }
        }
    }
}

?>