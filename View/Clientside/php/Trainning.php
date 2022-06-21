<?php
    require ("../../../Model/projectFunctions.php");
    require ("../../../Model/stakeholders.php");
    require ("../../../Model/coursesFunctions.php");
    require ("../../../Model/eventsFunctions.php");
    require ("../../../Model/grantFunctions.php");
    $result = coursesAndNumberOfModules();

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

    <title>Ashesi Entrepreneurship Center</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark" style="background-color: rgb(102, 2, 2);">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="Dlab.html" class="spur-logo"><i class="fas fa-copyright"></i> <span>Dashboard</span></a>
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

                            <a class="dropdown-item" href="Adminpage.php" style="background-color:rgb(143, 2, 2); color:white;">Admin Login </a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">Training across Cirriculum</h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="stats stats-primary" style="background-color: rgb(37, 37, 37);color:white">
                                <h3 class="stats-title">Number of Course</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo totalCourses();?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-secondary" style="background-color:rgb(238, 248, 248);color:black;">
                                <h3 class="stats-title">Total Course Modules</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo totalModules(); ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-success" style="background-color:rgb(143, 2, 2); color:white;">
                                <h3 class="stats-title">Total Active Course</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo totalActiveCourse(); ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-info" style="background-color:rgb(175, 4, 4); color:white;">
                                <h3 class="stats-title"> Total Engineering Students </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo totalEngineeringStudents(); ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-warning" style="background-color:rgb(167, 123, 123); color:white;">
                                <h3 class="stats-title">Total Computer Science Students</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo totalCSstudents();?></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-danger" style="background-color:rgb(75, 72, 72); color:white;">
                                <h3 class="stats-title">Total Student Coaches</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php echo totalCoaches(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4">
                            <div class="stats stats-light">
                                <h3 class="stats-title">Number of student coaches recruited</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                       
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">100</div>

                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>



                <div class="col-lg">
                    <div class="card spur-card">
                        <div class="card-header">
                            <div class="spur-card-icon">
                                <i class="fas fa-table"></i>
                            </div>
                            <div class="spur-card-title">Courses and Modules</div>
                        </div>
                        <div class="card-body" style="height: 400px; line-height: 3em; overflow:scroll; padding: 5px;" id="Id1" >

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
            var chart = new google.visualization.PieChart(document.getElementById('Id1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
                                    
                        </div>
                    </div>
                </div>

                 


            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>