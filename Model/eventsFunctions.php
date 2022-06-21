<?php


require_once ("sqlfunctions.php");

// check number of times various events has happen
function eventOccurrance(){
    $query="select *, count(event_name) from Events group by event_name";
    return select($query);
}

//check events Occurance by a type 
function eventOccurranceByType($eventType){
    $query="select *, count(event_name) from Events where event_name = '$eventType'";
    return select($query);
}

 //Graphed
function numberOfTimesEventsHappens(){
    $query="select event_type as EventType, count(event_type) as number_of_Occurance from Events group by event_type";
    return select($query);

}

 //Graphed
function eventsAttendByAParticularIndividualsGender(){
    $query="select Individuals.gender as gender, count(Individuals.stakeholderid) as number_of_Attendees from Events, Individuals, Stakeholder_Event 
    where  Stakeholder_Event.eventid= Events.eventid
    and Stakeholder_Event.stakeholderid= Individuals.stakeholderid 
    group by Individuals.gender";
    return select($query);

}




function eventsAttendByAParticularIndividualsGenders($role_id){
    $query="select Individuals.gender, count(Individuals.stakeholderid) as number_of_Attendees , Events.event_type
    from Events, Individuals, Stakeholder_Event 
    where  Stakeholder_Event.eventid= Events.eventid
    and Stakeholder_Event.stakeholderid= Individuals.stakeholderid 
    and Individuals.role_id = '$role_id'
    group by Individuals.gender";
    return select($query);

}



function eventTypeAttendByAParticluarStakeholderGender($role_id,$eventType){
    $query="select Individuals.gender, count(Individuals.stakeholderid) as number_of_Attendees 
    from Events, Individuals, Stakeholder_Event 
    where  Stakeholder_Event.eventid= Events.eventid
    and Stakeholder_Event.stakeholderid= Individuals.stakeholderid 
    and Individuals.role_id = '$role_id'
    and Events.event_type= '$eventType'
     group by Individuals.gender";
    return select($query);

}

function eventTypeAndAllStakeholders($eventType){
    $query="select Individuals.fname,Individuals.lname,Roles.role_name, Stakeholders.email
    from Individuals, Events,Roles, Stakeholder_Event, Stakeholders
    where  Stakeholder_Event.eventid= Events.eventid
    and Stakeholder_Event.stakeholderid= Individuals.stakeholderid
    and Stakeholders. stakeholderid= Individuals.stakeholderid
    and Events.event_type= '$eventType'
    and Individuals.role_id= Roles.role_id
     group by Roles.role_name";
    return select($query);

}



function eventTypeAttendByAParticluarStakeholder($role_id,$eventType){
    $query="select Individuals.fname,Individuals.lname,Roles.role_name, Stakeholders.email
    from Individuals, Events,Roles, Stakeholder_Event, Stakeholders
    where  Stakeholder_Event.eventid= Events.eventid
    and Stakeholder_Event.stakeholderid= Individuals.stakeholderid
    and Stakeholders. stakeholderid= Individuals.stakeholderid
    and Individuals.role_id= Roles.role_id
    and Events.event_type= '$eventType'
    and Individuals.role_id= '$role_id' 
    ";
    
    return select($query);

}


function deleteAnEvent($eventid){
    $query="DELETE FROM `Events` WHERE eventid = '$eventid' ";
    return delete($query);
}

function updateAnEventName($eventid, $event_name){
    $query=" UPDATE `Events` SET `event_name`='$event_name' WHERE eventid ='$eventid' ";
    return delete($query);
}

function updateEventType($eventid, $event_type){
    $query="UPDATE `Events` SET `event_type`='$event_type' WHERE eventid= '$eventid' ";
    return delete($query);
}

function updateEventDescription($eventid, $event_description){
    $query="UPDATE `Events` SET `event_description`='$event_description' WHERE eventid= '$eventid' ";
    return delete($query);
}

function insertintoEvent($department_id,$event_name, $event_start_date, $event_end_date,
$event_target_group,$event_type,$event_description){
    $query= " INSERT INTO `Events`(`department_id`, `event_name`, `event_start_date`, `event_end_date`, `event_target_group`,`event_type`, `event_description`)
     VALUES ('$department_id','$event_name','$event_start_date',' $event_end_date','$event_target_group','$event_type','$event_description')";
    return insert($query);
}


function totalEvents(){
    $query = "SELECT COUNT(eventid) as number FROM `Events`";
    return totalAll($query,"number");
}

//Graphed
function numberofStakeholderAttendingAnEventType(){
    $query="SELECT event_type, count(Stakeholder_Event.stakeholderid) as number 
    from Events, Stakeholder_Event 
    where Events.eventid=Stakeholder_Event.eventid group by event_type";
    return select($query);
}

function mutiplyBarChartsForEventTypeAttendence(){
    $query="SELECT Events.event_type as EventType, SUM(Students.level='Freshman') as Freshman, SUM(Students.level='Sophormore') as Sophormore , SUM(Students.level='Junior') as Junior, SUM(Students.level='Senior') as Senior from Events,Individuals,Students,Stakeholder_Event where Events.eventid=Stakeholder_Event.eventid and Individuals.stakeholderid=Stakeholder_Event.stakeholderid and Students.stakeholderid=Individuals.stakeholderid group by Events.event_type";
    return select($query);

}

function studentOrganisedEvents(){
    $query="SELECT count(event_name)  from Events where event_target_group= 'Students'";
    return select($query);
}

function studentOrganisedEventL(){
    $query="SELECT count(event_name) as number from Events where event_target_group= 'Students'";
    return totalAll($query,"number");
}

function totalCareerFair(){
    $query = "SELECT count(Events.eventid) as number from Events where Events.event_type= 'Career Fair'";
    return totalAll($query,"number");

}

function totalhackton(){
    $query = "SELECT count(Events.eventid) as number from Events where Events.event_type= 'Hackathon'";
    return totalAll($query,"number");
}

function totalExhibition(){
    $query = "SELECT count(Events.eventid) as number from Events where Events.event_type= 'Exhibition'";
    return totalAll($query,"number");
}

function totalInforSession(){
    $query = "SELECT count(Events.eventid) as number from Events where Events.event_type= 'Information Session'";
    return totalAll($query,"number");
}

function allFromEvent(){
    $query="SELECT * FROM `Events`";
    return select($query);

}

function displayEvents(){

    $result = allFromEvent();
        // eventid	department_id	event_name	event_start_date	event_end_date	event_target_group	event_type	event_description 
        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['eventid'];
                $eventname = $row['event_name'];
                $startDate = $row['event_start_date'];
                $endDate = $row['event_end_date'];
                $targetGroup = $row['event_target_group'];
                $type = $row['event_type'];
                $description = $row['event_description'];

                echo "<tr> <td>
        <span class='custom-checkbox'>
            <input type='checkbox' id='checkbox1' name='options[]' value='$id'>
            <label for='checkbox1'></label>
        </span>
    </td>
    <td>$eventname</td>
    <td>$startDate</td>
    <td>$endDate</td>
    <td>$targetGroup</td>
    <td>$type</td>
    <td>$description</td>
    <td>
        <a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit' on>&#xE254;</i></a>

        <a href='#deleteEmployeeModal' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete' >&#xE872;</i></a>
    </td>
</tr>";
            }
        }

    
}


function getStudentsAtInfoSession(){
    $sql = "SELECT COUNT(students.stakeholderid) as number FROM `events`,students, stakeholder_event WHERE events.event_type = 'Information Session' and students.stakeholderid = stakeholder_event.stakeholderid and events.eventid = stakeholder_event.eventid";

    return totalAll($sql, "number");
}











?>
