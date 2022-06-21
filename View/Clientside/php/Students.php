<?php
    require ("../../../Model/projectFunctions.php");
    require ("../../../Model/stakeholders.php");
    require ("../../../Model/coursesFunctions.php");
    require ("../../../Model/eventsFunctions.php");
    require ("../../../Model/grantFunctions.php");
    
  $result = departmentTotalGrant();  
  $resultProject = projectGroupByStatus();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
        
      </script>
      
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});   
         google.charts.load('current', {'packages':['corechart']});   
      </script>
    <title>Spur - A Bootstrap Admin Template</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark" style="background-color: rgb(102, 2, 2);">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="Dlab.php" class="spur-logo"><i class="fas fa-copyright"></i> <span>Dashboard</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="Dlab.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Design Lab </a>

                <a href="community.php" class="dash-nav-item">
                    <i class="fas fa-business-time"></i> Community Enter. </a>

                <a href="Students.php" class="dash-nav-item">
                    <i class="fas fa-business-time"></i>Student and Alum </a>

                <a href="Trainning.php" class="dash-nav-item">
                    <i class="fas fa-business-time"></i>Cirriculum</a>

                <a href="AVI.php" class="dash-nav-item">
                    <i class="fas fa-business-time"></i>AVI </a>

            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">

                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1" style="background-color:rgb(143, 2, 2); color:white;">

                            <a class="dropdown-item" href="Adminpage.html" style="background-color:rgb(143, 2, 2); color:white;">Admin Login </a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary" style="background-color:rgb(143, 2, 2); color:white;">
                                <h3 class="stats-title"> Total Students </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php echo totalStudent(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success " style="background-color:rgb(238, 248, 248); color:black;">
                                <h3 class="stats-title">Total  Grants </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php echo totalGrantRecieved(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger" style="background-color: rgb(37, 37, 37);color:white">
                                <h3 class="stats-title"> Total Events </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php echo totalEvents(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title" style="background-color:rgb(238, 248, 248);"> Department and Grants </div>
                                    <div class="spur-card-menu">
                                        <div class="dropdown show">
                                            <a class="spur-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body spur-card-body-chart" style="width: 900px; height: 500px;"  id="Not" >
                                    <canvas id="spurChartjsBar"></canvas>
                                   
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
                      title: 'Percentage of Department Grant',  
                    //   is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('Not'));  
                chart.draw(data, options);  
           } 
           google.charts.setOnLoadCallback(drawChart); 
        
     </script> 


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title">Pie Chart </div>
                                </div>
                                <div class="card-body" style="height: 500px;" id="Able">
                                <canvas id="spurChartjsBar"></canvas>
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
                       var chart = new google.visualization.PieChart(document.getElementById('Able'));  
                       chart.draw(data, options);  
                  }  
                  google.charts.setOnLoadCallback(drawChart); 
                   </script>   
                                </div>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Student and Alumni Programs</div>
                                </div>
                                <div class="card-body" style="height: 400px; line-height: 3em; overflow:scroll; padding: 5px;">
                                    <table class=" table table-hover table-in-card ">
                                        <thead>
                                            <tr>
                                                <th scope="col ">#</th>
                                                <th scope="col ">Event data</th>
                                                <th scope="col ">Number</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row ">1</th>
                                                <td>Number of carrer fairs organized</td>
                                                <td><?php echo totalCareerFair()?></td>

                                            </tr>
                                            <!-- <tr>
                                                <th scope="row ">2</th>
                                                <td>Number of students that attended career fair</td>
                                                <td>401</td>

                                            </tr> -->
                                            <!-- <tr>
                                                <th scope="row ">3</th>
                                                <td>Number of alumni attended career fair by gender</td>
                                                <td>101</td>

                                            </tr> -->
                                            <tr>
                                                <th scope="row ">2</th>
                                                <td>Number of entrepreneurship competition organized</td>
                                                <td><?php  echo totalhackton()?></td>

                                            </tr>
                                            <!-- <tr>
                                                <th scope="row ">5</th>
                                                <td>Number of student that participated in competition</td>
                                                <td>91</td>

                                            </tr> -->
                                            <tr>
                                                <th scope="row ">3</th>
                                                <td>Number of exhibitions organized</td>
                                                <td><?php echo totalExhibition()?></td>

                                            </tr>
                                            <tr>
                                                <th scope="row ">4</th>
                                                <td>Information sessions organised</td>
                                                <td><?php echo totalInforSession()?></td>

<!-- 
                                                <tr>
                                                    <th scope="row ">8</th>
                                                    <td>Number of students that exhibited product or service by gender</td>
                                                    <td>71</td>

                                                </tr> -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="../js/spur.js "></script>
</body>

</html>