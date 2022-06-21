<?php
     require ("../Model/stakeholders.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="crudStylesheet.css">
    <script src="crud.js"></script>
    <script>
        function changeID(userId){                       
            document.getElementById('deleteId').setAttribute('value',userId);
            }
    </script>
</head>

<body>
    <div class="sidebar">
    <div class="logo-details">
            <i class='bx bxl-c-plus-plus' ></i>
            <span class="logo_name" >AEC</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Stakeholder.php" class="active">
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
                <a href="Courses.php">
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
             
            

              <form  action="../Model/uploadStIndividual.php"  method="post" >
               <input type="file" id="upload" hidden/>
            <label for="upload">Upload Stakeholders</label>
            
          </form>


           

        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Stakeholder</div>
                        <div class="number">
                                <?php
                                
                                echo totalUser();
                                ?>

                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-users user" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Students</div>
                        <div class="number">
                            <?php
                            echo totalStudent();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-user  user student" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Alumni</div>
                        <div class="number">
                            <?php
                            echo totalAlumni();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="fa fa-graduation-cap grad" aria-hidden="true"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Companies</div>
                        <div class="number">
                            <?php
                            echo totalCompanies();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-down-arrow-alt down'></i>
                            <span class="text">Down From Today</span>
                        </div>
                    </div>
                    <i class="fa fa-handshake-o shake" aria-hidden="true"></i>
                </div>
            </div>


            <!--Put crud here-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Users</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New User </span></a>
                                    <input type="text" style="width:250px;" class="form-control" id="myInput" onkeyup="_filter()" placeholder="Search for users ... " title="Type in a sponsor type">

                                </div>
                                
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>First name</th>
                                    <th>Last names</th>
                                    <th>Email Address</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    displaytables();

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
            <!-- Add Individual -->
            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="../Control/stakeholderIndivProcessing.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="fname" required>
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="lname" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label> Address</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label><br>
    
                                    <select name="gender" id="cars">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="other">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p>Role</p>

                                    <select name="role_id" class = "form-control" required>
                                         <?php
                                            displaySelectRoles();
                                         ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" name="submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- edith Individual -->
            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Add User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <p>Role</p>

                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                    <label for="html">Student</label><br>
                                    <input type="radio" id="css" name="fav_language" value="CSS">
                                    <label for="css">Coach</label><br>
                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                    <label for="javascript">Sponser</label>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            

           


            <!--Company Table-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Sponsors</b></h2>
                                </div>
                                <div class="col-sm-6">

                                    <a href="#addEmployee" class="btn btn-success" placeholder= "Upload Company file" style="background-color: white; color:rgb(124, 15, 15)" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Company</span></a>


                                  
                                    <input type="file" id="myFile" name="filename" placeholder= "Upload Company file" class="btn btn-success" style="background-color: white; color:rgb(124, 15, 15); width:210px;">
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Company Name</th>
                                    <th>Contact</th>
                                    <th>Email </th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                displaytablesCompanies();
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
            <!-- Add to company -->
            <div id="addEmployee" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="../Control/stakeholderCompanyPro.php">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Company</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input type="text" class="form-control" name="cname"required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label> Address</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" name="submitS" value="Add">
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
                                <h4 class="modal-title">Edit Company</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btnAdd btn-success" value="Save">
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
                                <h4 class="modal-title">Delete User</h4>
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
    </script>

</body>

</html>