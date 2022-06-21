<?php
	
   require ("../Model/coursesFunctions.php");
	$result = coursesAndNumberOfModules();

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
      <div id = "container" style = "width: 800px; height: 400px; margin: 0 auto">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Courses', 'Number_of_Modules'],
        	    <?php
        	    	while($row = mysqli_fetch_array($result)){
        	    		echo "['".$row['Courses']."',".$row['Modules']."],";
        	    	}

        	    ?>
            ]);

            var options = {title: 'Number of Courses'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
   </body>
</html>