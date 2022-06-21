<?php

require ("../../../Model/projectFunctions.php");
require ("../../../Model/stakeholders.php");
require ("../../../Model/coursesFunctions.php");
require ("../../../Model/eventsFunctions.php");
require ("../../../Model/grantFunctions.php");





?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Ashesi Entrepreneurship Center</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark" style="background-color: rgb(102, 2, 2);">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#" class="spur-logo"><i class="fas fa-copyright"></i> <span>Dashboard</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="Dlab.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Design Lab </a>

                <a href="community.php" class="dash-nav-item">
                    <i class="material-icons">description</i>Community Enter.
                    <!-- <i class="fas fa-business-time"></i> Community Enter. </a> -->

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
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats" style="background-color: rgb(37, 37, 37);color:white">
                                <h3 class="stats-title"> Total Grants</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">50,000 GHC</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats" style="background-color:rgb(238, 248, 248);">
                                <h3 class="stats-title">Total Project Grant</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-piggy-bank"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo displayTotalProjectUnderGrants(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats" style="background-color:rgb(143, 2, 2); color:white;">
                                <h3 class="stats-title"> Total AVI Businesses</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">100</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4">
                            <div class="stats" style="background-color:rgb(175, 4, 4); color:white;">
                                <h3 class="stats-title"> Total Employment Created</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-people-carry"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">66</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats" style="background-color:rgb(167, 123, 123); color:white;">
                                <h3 class="stats-title"> Total AVI Grants</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-comment-dollar"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats" style="background-color:rgb(75, 72, 72); color:white;">
                                <h3 class="stats-title"> Total Sponsors</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fas fa-chart-line"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">2</div>
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
                                    <div class="spur-card-title"> Total AVI Events </div>
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
                                <div class="card-body spur-card-body-chart">
                                    <canvas id="spurChartjsBar"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsBar").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Exhibit", "Training", "Entrepreneurs", "Personal Dev't", "MBT/Testing"],
                                                datasets: [{
                                                    data: [30, 50, 60, 70, 39],
                                                    backgroundColor: '#ffb3b3',
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- pie chart -->
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Number of SDGs covered (88) </div>
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
                                <div class="card-body spur-card-body-chart">
                                    <canvas id="spurChartjsDougnut"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsDougnut").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'doughnut',
                                            data: {
                                                labels: [
                                                    "No Poverty",
                                                    "Zero Hunger",
                                                    "Good Health and Good Wellbeing",
                                                    "Quality Education",
                                                    "Clean water and Sanitation",
                                                    "Affordable and Clean Energy",
                                                    "Decent Work and Economic Growth",
                                                    "Industry Innovation and Infrastructure",
                                                    "Reduce Inequality",
                                                    "Sustainable Cities and Communities",
                                                    "Responsive Consumptions and Production",
                                                    "Climate Change",
                                                    "Life Below Water",
                                                    "Life on Land",
                                                    "Peace Justice ,and Strong Institution",
                                                    "Partnerships for the Goals",
                                                ],
                                                datasets: [{
                                                    label: 'Week',
                                                    data: [12, 10, 3, 5, 1, 2, 0, 3, 5, 2, 1, 8, 3, 5, 2, 0, 19, 0, 5, 2, 0],
                                                    backgroundColor: [
                                                        '#ffe6e6',
                                                        '#ffcccc',
                                                        '#ffb3b3',
                                                        '#ff9999',
                                                        '#ff8080',
                                                        '#ff6666',
                                                        '#ff4d4d',
                                                        '#ff3333',
                                                        '#ff1a1a',
                                                        '#ff0000',
                                                        '#e60000',
                                                        '#cc0000',
                                                        '#b30000',
                                                        '#990000',
                                                        '#800000',
                                                        '#660000',
                                                        '#4d0000',
                                                    ],
                                                    borderColor: '#fff',
                                                    fill: false
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                }
                                            }
                                        });
                                    </script>
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
                                    <div class="spur-card-title"> Performance </div>
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
                                <div class="card-body spur-card-body-chart">
                                    <canvas id="spurChartjsTwoBars"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsTwoBars").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["2018/2019", "2019/2020", "2020/2021", "2020/2021"],
                                                datasets: [{
                                                    label: '# of graduates/alumni with enterprise recruited into AVI',
                                                    // data1 - 2018/2019, data2 - 2019/2020, data3 - 2020/2021, data4 - 2021/2022
                                                    data: [5, 18, 12, 15],
                                                    backgroundColor: '#ffb3b3',
                                                    borderColor: 'transparent'
                                                }, {
                                                    label: '# of AVI candidates that have undergone personal dev\'t',
                                                    data: [10, 2, 6, 9],
                                                    backgroundColor: '#cc0000',
                                                    borderColor: 'transparent'
                                                }, {
                                                    label: '# of AVI candidate businesses that have done training in AVI module',
                                                    data: [6, 16, 11, 10],
                                                    backgroundColor: '#ff1a1a',
                                                    borderColor: 'transparent'
                                                }, {
                                                    label: '# of mentors/coaches recruited for AVI program',
                                                    data: [5, 18, 19, 10],
                                                    backgroundColor: '#800000',
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Stakeholders contribution</div>
                                </div>
                                <div class="card-body " style="height: 260px; overflow-x: hidden;  overflow-y: scroll;">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Number of agencies mapped out for potential funding</td>
                                                <td><?php echo pontTotal(); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Number of agencies contact has been made with</td>
                                                <td><?php echo totalCompanies();?></td>
                                            </tr>
                                            <tr>
                                                <td>Number of fund-raising events organised</td>
                                                <td>30</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Number of funding agencies attracted to AVI program</td>
                                                <td>15</td>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>