<?php  
  
 require "../Model/projectFunctions.php";

     $resultProject = projectGroupByStatus();
  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           </script>  
      </head>  
      <body>  
            
             
                <div id="piechart" style="width: 800px; height: 500px;"></div>  
                <script language = "JavaScript">  
                  
           
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Project_status', 'number_of_projects'],  
                          <?php  
                         
                         while($row = mysqli_fetch_array($resultProject))  
                          {  
                              echo "['".$row["Status"]."', ".$row["number_of_projects"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Projects and their status',  
                      is3D:true,  
                      // pieHole: 0.4,
                        slices: {  0: {offset: 0.1},
                    // 1: {offset: 0.2},
                    // 2: {offset: 0.1},
                    // 15: {offset: 0.5},
          }, 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           google.charts.setOnLoadCallback(drawChart); 
            </script>    
      </body>  
 </html>