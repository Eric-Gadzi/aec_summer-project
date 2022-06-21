<?php
require "../Model/dbconnect.php";
require "../Model/stakeholders.php";



if(isset($_POST["submitS"])){
    $potential_name= $_POST["cname"];
    $pcontact=$_POST["contact"];
    $pemail=$_POST["email"];
    $paddress=$_POST["address"];


    
        createCompany($potential_name, $pcontact, $pemail, $paddress);
        header("location:../View/Sponsor.php");
   

    
   
    
}


if(isset($_POST['delete'])){
    $companyId = $_POST['id'];

  
    $result = deletecompany($companyId);
    


        echo "
        <script>
            var conf = confirm('Do you want to delete?');
            if(conf){
                deletecompany($companyId);
                alert('Delete Successfully');
                
            }else{
                alert('Delete cancelled!!!');
            }

            window.open('../View/Stakeholder.php', '_self');

        </script>
        ";

        
   
        
    
}




?>