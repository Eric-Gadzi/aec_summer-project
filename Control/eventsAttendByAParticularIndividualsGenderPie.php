<?php  
  
  require ("../Model/eventsFunctions.php");
  $resultAttendByGender = eventsAttendByAParticularIndividualsGender();  
  ?>  
  <!DOCTYPE html>  
  <html>  
       <head>  
            <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>  
           
       </head>  
       <body>  
             
              
                 <div id="nice1" style="width: 700px; height: 200px;"></div> 
                 <script language = "JavaScript"> 
           
           
            function drawChart()  
            {  
                 var data = google.visualization.arrayToDataTable([  
                           ['Gender', 'Number'],  
                           <?php  
                          
                          while($row = mysqli_fetch_array($resultAttendByGender))  
                           {  
                                echo "['".$row["gender"]."', ".$row["number_of_Attendees"]."],";  
                           } 
 
                           // The function will refresh the page 
                           // in every 3 second
                           header("refresh: 3"); 
                           ?>  
                      ]);  
                 var options = {  
                       title: 'Percentage of Male and Female Employee',  
                       is3D:true,  
                       pieHole: 0.4  
                      };  
                 var chart = new google.visualization.PieChart(document.getElementById('nice1'));  
                 chart.draw(data, options);  
            } 
            google.charts.setOnLoadCallback(drawChart);   
            </script>   
              
       </body>  
  </html>