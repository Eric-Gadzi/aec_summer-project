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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Ashesi Entrepreneurial Center</title>


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

                            <a class="dropdown-item" href="Adminpage.php" style="background-color:rgb(143, 2, 2); color:white;">Admin Login </a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary" style="background-color:rgb(75, 72, 72);">
                                <h3 class="stats-title"> Total Coaches recruited </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php
                                           echo  totalCoaches();
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-success" style="background-color:rgb(167, 123, 123);">
                                <h3 class="stats-title"> Applications received(total) </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-graduate"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">100</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="stats stats-info" style="background-color:rgb(175, 4, 4);">
                                <h3 class="stats-title"> Number of social enterprises identified </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fa fa-business-time"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">100</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="stats stats-danger" style="background-color:rgb(143, 2, 2);">
                                <h3 class="stats-title"> Funds generated for social enterprise </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-money-check"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">$100</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stats stats-light" style="background-color:rgb(238, 248, 248);">
                                <h3 class="stats-title"> Number of communities engaged </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-school"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">
                                            <?php
                                            echo numCommunitiesEngaged();
                                            ?>
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
                                    <div class="spur-card-title"> Students application status </div>
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
                                                labels: [" Recieved", "shortlisted", "selected(CE proj)"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [19, 12, 3],
                                                    backgroundColor: '#cc0000',
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

                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Students application status by year </div>
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
                                                labels: ["2019", "2020", "2021", "2022"],
                                                datasets: [{
                                                    label: 'received',
                                                    data: [12, 19, 3, 8],
                                                    backgroundColor: '#cc0000',
                                                    borderColor: 'transparent'
                                                }, {
                                                    label: 'shortlisted',
                                                    data: [4, 12, 11, 9],
                                                    backgroundColor: '#ff1a1a',
                                                    borderColor: 'transparent'
                                                }, {
                                                    label: 'selected for CE proj',
                                                    data: [12, 19, 3, 6],
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
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> pie chart social enterprises and their operations </div>
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
                                                labels: ["model tested", "selected for funding", "connected to funding opportunities", "received funding from other sources"],
                                                datasets: [{
                                                    label: 'Week',
                                                    data: [10, 19, 13, 5],
                                                    backgroundColor: [

                                                        '#800000',
                                                        '#ffb3b3',
                                                        '#cc0000',
                                                        '#ff1a1a',
                                                        window.chartColors.danger,
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
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Line graph showing the amount provided to fund social enterprises each year based on gender </div>
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
                                    <canvas id="spurChartjsLine"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsLine").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: ["2018", "2019", "2020", "2021", "2022"],
                                                datasets: [{
                                                    label: 'Males',
                                                    data: [120, 190, 310, 50, 200],
                                                    backgroundColor: '#cc0000',
                                                    borderColor: '#cc0000',
                                                    fill: false
                                                }, {
                                                    label: 'Females',
                                                    data: [400, 125, 110, 200, 150],
                                                    backgroundColor: window.chartColors.danger,
                                                    borderColor: window.chartColors.danger,
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
                        <div class="col-lg">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Community Enterpreneurship-Tables</div>
                                </div>
                                <div class="card-body " style="height: 260px; overflow-x: hidden;  overflow-y: scroll;">
                                    <table class="table table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Description of events</th>
                                                <th scope="col">Number</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Number of coaches and workshop leaders recruited</td>
                                                <td>12</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Number of applications recieved</td>
                                                <td>8</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Number of applications short listed</td>
                                                <td>12</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Number of social enterprise connected to funding opportunities</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Number of applications seleced for CE project</td>
                                                <td>13</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Number of communities engaged</td>
                                                <td>14</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Number of potential social enterprise identified</td>
                                                <td>19</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Number of social enterprise team receiving funding support from other funding sources</td>
                                                <td>10</td>
                                            </tr>


                                            <tr>
                                                <th scope="row">9</th>
                                                <td>Types of social enterprise identified</td>
                                                <td>30</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">10</th>
                                                <td>Number of business models developed from potential community social enterprise</td>
                                                <td>15</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">11</th>
                                                <td>Number of social enterprise models tested</td>
                                                <td>4</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">12</th>
                                                <td>Number of social enterprise selected for funding</td>
                                                <td>4</td>


                                                <tr>
                                                    <th scope="row">13</th>
                                                    <td>Amount provided to fund student social enterprise</td>
                                                    <td>18</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">14</th>
                                                    <td>Number of student interested to learn and provide support CE teams</td>
                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">15</th>
                                                    <td>Number of teams deployed into community(ies) to implement social enterprise</td>
                                                    <td>10</td>
                                                </tr>


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