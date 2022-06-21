<?php


require ("dbconnect.php");


function select($sqlSelectQuery){
    require ("dbconnect.php");
    $runQuery=$conn->query($sqlSelectQuery);

    return $runQuery;
}


function insert($sqlInsert){
    require ("dbconnect.php");
    $insertResult=$conn->query($sqlInsert);
    if($insertResult === True){
        return true;
    }
    else{
       return false;
    }
  }

function delete($sqlDelete){
  require ("dbconnect.php");
  $deleteResult=$conn->query($sqlDelete);
  if($deleteResult === True){
       return true;
  }
     return false;
}

function getLastInsertedID($sql){
    require ("dbconnect.php");
    $result = $conn->query($sql);
    if($result === TRUE){
        return $conn->insert_id;
    }
    return -1;

}

function update($sqlUpdate){
    require ("dbconnect.php");
    $updateResult=$conn->query($sqlUpdate);
    if($updateResult === True){
        return true;
    }
       return false;
  }


  function totalAll($query,$target){
    $result = select($query);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        return $row[$target];
    }

}
   




?>