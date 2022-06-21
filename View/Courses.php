<?php
require ("../Model/coursesFunctions.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="crudStylesheet.css">
    <script src="crud.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">AEC</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Stakeholder.php">
                    <i class="bx bx-user  user student" aria-hidden="true"></i>
                    <span class="links_name">Stakeholders</span>
                </a>
            </li>
            <li>
                <a href="Events.php">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Events</span>
                </a>
            </li>
            <li>
                <a href="Departments and roles.php">
                    <i class='bx bx-building'></i>
                    <span class="links_name">Departments</span>
                </a>
            </li>
            <li>
                <a href="Projects.php">
                    <i class='bx bx-file'></i>
                    <span class="links_name">Project</span>
                </a>
            </li>

            <li>
                <a href="Sponsor.php">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Sponsors</span>
                </a>
            </li>

            <li>
                <a href="Courses.php" class="active">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Courses</span>
                </a>
            </li>
            <li>
                <a href="grant.php">
                    <i class='bx bx-credit-card-front'></i>
                    <span class="links_name">Grants</span>
                </a>
            </li>

            <li class="log_out">
                <a href="Clientside/php/Adminpage.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <form  action="..\Model\uploadcourses.php"  method="post" >
            <input type="file" id="upload" hidden/>
            <label for="upload">Choose file</label>
          </form>

        </nav>


        <div class="home-content">
            <div class="overview-boxes">

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic" style="color: #634242">Total Courses</div>
                        <div class="number" style="color:#634242">
                        <?php
                        echo totalCourses();
                        ?>
                    </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <!-- <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-cash-stack"></i></h1> -->
                    <!-- <i class='bx bx-cart-alt cart'></i> -->

                    <a href="#"><i class="fas fa-user fa-5x" style="color:#ffb3b3"></i></a>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic" style="color:#cc0000">Total Modules</div>
                        <div class="number" style="color:#cc0000">
                        <?php
                        echo totalModules();
                        ?>
                    </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <!-- <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-cash-stack"></i></h1> -->
                    <!-- <i class='bx bx-cart-alt cart'></i> -->

                    <a href="#"><i class="fa fa-book-open fa-5x " style="color:rgb(101, 7, 7)"></i></a>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic" style="color:rgb(84, 20, 20)">Active Courses</div>
                        <div class="number" style="color:rgb(84, 20, 20)">
                        <?php
                        echo totalActiveCourse();
                        ?>
                    </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <!-- <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-cash-stack"></i></h1> -->
                    <!-- <i class='bx bx-cart-alt cart'></i> -->

                    <a href="#"><i class="fas fa-star fa-5x " style="color:#cc0000"></i></a>
                </div>
                <div class="box" style="height:125px;">
                    <div class="right-side">
                        <div class="box-topic" style="color:brown">Inactive Courses</div>
                        <div class="number" style="color:brown">
                        <?php
                        echo totalInactiveCourse();
                        ?>
                    </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-cash-stack"></i></h1>
                    <!-- <i class='bx bx-cart-alt cart'></i> -->

                    <a href="#"><i class="fas fa-toggle-on fa-5x" style="color:#ff1a1a"></i></a>
                </div>
            </div>



            <!--Put crud here-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Courses</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Course</span></a>
                                    <input type="text" style="width:250px;" class="form-control" id="myInput" onkeyup="_filter()" placeholder="Search for course ... " title="Type in a sponsor type">
                                </div>
                            </div>
                        </div>
                        <table id="myTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Courses Name</th>
                                    <th>Course Status</th>
                                    <th>Date Started</th>
                                    <th>Course Description</th>
                                
                                    <th>Action</th>

                                    <!-- coursename, coursestatus, datestarted, modulename, coursedescription -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 displayCourses();
                                ?>
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action = "../Control/coursesProscessing.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add new course </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>course Name</label>
                                    <input type="text" class="form-control" name="cname" required>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select name="cstatus" id="cars">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        
                                </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>date started</label>
                                    <input type="date" class="form-control" name="cdate"required>
                                </div>

                                <div class="form-group">
                                    <label>Course Descriptions</label>
                                    <input type="text" class="form-control" name="cdescription"required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" name="Submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit course</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>course Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Course status </label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>date started</label>

                                    <input type="date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Course Descriptions</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete Modal HTML -->
            <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Employee</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Module Table -->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Modules</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployee" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Modules</span></a>
                                    <input type="text" style="width:250px;" class="form-control" id="myInput" onkeyup="_filter()" placeholder="Search for modules ... " title="Type in a sponsor type">
                                </div>
                            </div>
                        </div>
                        <table id="myTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                    </th>
                                    <th>Module name</th>
                                    <th>Module description</th>
                                    <th>Courses Name</th>

                                    <th>Action</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                displayModules();
                                ?>
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Modal HTML -->
            <div id="addEmployee" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="..\Control\modulesProcessing.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add new module </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>course Name</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <select name="course_id" class = "form-control" required>
                                         <?php
                                            displaySelectCourse();
                                         ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                <label >Module name</label>
                                
                                    <input type="text" id = "mn" name="modulename" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Module Description</label>
                                    <input type="text" class="form-control" name="moduleDescription" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="editEmployee" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Module</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>course Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Module name </label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Module Description</label>
                                    <input type="email" class="form-control" required>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete Modal HTML -->
            <div id="deleteEmployee" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Employee</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete these Records?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="button">
                <a href="#">See All</a>
            </div>

    </section>

    <script>
        
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }

        function _filter() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>
</html>