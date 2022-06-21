<?php  
  
  require ("../Model/grantFunctions.php");
  $result = departmentTotalGrant();  
  ?>  
  <!DOCTYPE html>  
  <html>  
       <head>  
            <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
            <script type="text/javascript">  
            google.charts.load('current', {'packages':['corechart']});  
            
            </script>  
       </head>  
       <body>  
            <br /><br />  
             
                 <div id="piechart" style="width: 900px; height: 1500px;"></div>
                 
                 <script language = "JavaScript">
           
            function drawChart()  
            {  
                 var data = google.visualization.arrayToDataTable([  
                           ['Department', 'Total Grant'],  
                           <?php  
                          
                          while($row = mysqli_fetch_array($result))  
                           {  
                                echo "['".$row["department"]."', ".$row["total_grant"]."],";  
                           }  
                           ?>  
                      ]);  
                 var options = {  
                       title: 'Percentage of Male and Female Employee',  
                       is3D:true,  
                       pieHole: 0.4  
                      };  
                 var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                 chart.draw(data, options);  
            } 
            google.charts.setOnLoadCallback(drawChart); 
         
      </script> 



            </div>  
       </body>  
  </html>