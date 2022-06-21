<?php
  require ("../Model/eventsFunctions.php");
  $resultTimeEvent = numberOfTimesEventsHappens();
  
  
?>

<html>
   <head>
      <title>Google Charts Tutorial</title>
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
   </head>
   
   <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Event Type', 'Number of times organised'],
               <?php
                while($row = mysqli_fetch_array($resultTimeEvent)){
                  echo "['".$row['EventType']."',".$row['number_of_Occurance']."],";
                }

               ?>
               

            ]);

            var options = {title: 'Population (in millions)'}; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
   </body>
</html>