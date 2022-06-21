<?php
require "../Model/projectFunctions.php";
require "../Model/createNewEntities.php";
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

    <!-- boostrap icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">


    <!---link to external style sheet and the javascript file-->
    <link rel="stylesheet" href="crudStylesheet.css">
    <script src="crud.js"></script>
</head>

<body>

    <!--Nava bar of the Dashboard-->
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
                <a href="Projects.php" class="active">
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


    <!--Top search bar and choose a file-->
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

            <form  action="../Model/uploadProject.php"  method="post" >
            <input type="file" id="upload" hidden/>
            <label for="upload">Choose file</label>
          </form>
        </nav>

        <!--Small containers containing the sum/count details-->
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Projects</div>
                        <div class="number">
                            <?php
                            echo totalProject();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-boxes"></i></h1>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Tested Projects</div>
                        <div class="number">
                            <?php
                            echo testedProjects()
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:green;"><i class="bi bi-brightness-high"></i></h1>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Prototyping ProjectS</div>
                        <div class="number">
                            <?php
                            echo prototypingProject();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:lightblue;"><i class="bi bi-building"></i></h1>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Projects In-operation</div>
                        <div class="number">
                            <?php
                            echo inoperationProjects();
                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt '></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:lightpink;"><i class="bi bi-globe" aria-hidden="true"></i></h1>
                </div>
            </div>


            <!--Put crud here-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Projects</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" style="background-color: white; color: rgb(124, 15, 15)" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Project</span></a>
                                    <input type="text" style="width:250px;" class="form-control" id="myInput" onkeyup="_filter()" style="font-size:11px;" placeholder="Search for project name ... " title="Type in a project name">
                                </div>
                            </div>
                        </div>

                        <!--Table with the heading-->
                        <table id="myTable" class="table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Project Name</th>
                                    <th>Owner First Name</th>
                                    <th>Owner Last Name</th>
                                    <th>Contact Details</th>
                                    <th>Project Description</th>
                                    <th>Project Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!---Populating the table with entries-->
                            <tbody>
                                <?php
                            displayProjects();
                            ?>
                            </tbody>
                        </table>

                        <!--The numbering to move to next page-->
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

            <!-- ADD TO PROJECT -->
            
            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="..\Control\projectProcessing.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Project</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    
                                    <p>Department Name</p>

                                    <select name="depart_id" class = "form-control" required>
                                         <?php
                                           displaySelectDepartment();
                                         ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" name="prname" required>
                                </div>

                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea class="form-control" id="w3review" name="prdescription" rows="4" cols="50"></textarea>
                                </div>
                                
                                <div class="form-group">
                                <label>Communication Type</label><br>
                                <select name="Communicationtype" id="cars">
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="phonecall">phonecall</option>
                                        <option value="others">others</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Project_status</label>
                                    <select name="Project_status" id="cars">
                                        <option value="Training">Training</option>
                                        <option value="Prototyping">Prototyping</option>
                                        <option value="testing">Testing</option>
                                        <option value="in-opertion">In-opertion</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Project Industry</label>
                                    <input type="text" class="form-control" name="Project_industry" required>
                                </div>

                                <div class="form-group">
                                    <label>Project Location</label>
                                    <input type="text" class="form-control" name="Project_location" required>
                                </div>
                                <div class="form-group">
                                    <label>Project Type</label>
                                    <select name="prtype" id="cars">
                                        <option value="Business enterprise">Business enterprise</option>
                                        <option value="Social projectg">Social project</option>
                                        <option value="Others">Others</option>
                                    
                                </select>
                                </div>
                                


                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" name="submit" value="Add" style="color: white; background-color: rgb(124, 15, 15)">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Edit Modal HTML for first table -->
            <div id="editEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Project</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Owner Firstname</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Owner Lastname</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Contact Details</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea class="form-control" id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Project Location</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save" style="color: white; background-color: rgb(124, 15, 15)">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML for first table -->
            <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Project</h4>
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
        </div>
        <!-----------------------------------------------------------SECOND PROJECT TABLE---------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!--Put crud here: Second Table here-->
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Projects <b>Information</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal1" class="btn btn-success" style="background-color: white; color: rgb(124, 15, 15)" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Project</span></a>
                                <input type="text" style="width:250px;" class="form-control" id="myInput1" onkeyup="_filter1()" style="font-size:11px;" placeholder="Search project type ... " title="Type in a project type">
                            </div>
                        </div>
                    </div>

                    <!--Table with the heading-->
                    <table id="myTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Project Name</th>
                                <th>Project SDG</th>
                                <th>Project Status</th>
                                <th>Project Coach/Mentor</th>
                                <th>Project Type</th>
                                <th>Project Industry</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <!---Populating the table with entries-->
                        <tbody>
                            <?php
                        echo displayProjectSDG();
                        ?>   
                    </tbody>
                    </table>

                    <!--The nubering to move to next page-->
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
        <div id="addEmployeeModal1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Project</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Project SDG</label>
                                <select class="form-control" required>
                                    <option value="0">Choose Project SDG</option>
                                    <option value="1">No POverty</option>
                                    <option value="2">Zero Hunger</option>
                                    <option value="3">Good Health and Good Well-being</option>
                                    <option value="4">Quality Education</option>
                                    <option value="5">Gender Equality</option>
                                    <option value="6">Clean Water and Sanitation</option>
                                    <option value="7">Affordable and Clean Energy</option>
                                    <option value="8">Decent Work and Economic Growth</option>
                                    <option value="9">Industry, Innovation and Infrastructure</option>
                                    <option value="10">Reduced INequalities</option>
                                    <option value="11">Sustainable Citiesand Communities</option>
                                    <option value="12">Responsible Consumption and Production</option>
                                    <option value="13">Climate Change</option>
                                    <option value="14">Life Below Water</option>
                                    <option value="15">Life on Land</option>
                                    <option value="16">Peace, Justice and Strong Institutions</option>
                                    <option value="17">Partnerships for the Goals</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Status</label>
                                <select class="form-control">
                                    <option value="Add">Add Project status</option>
                                    <option value="tested">Tested</option>
                                    <option value="inoperation">In operation</option>
                                    <option value="Training">Training</option>
                                    <option value="ideation">Ideation</option>
                                    <option value="still an idea">Still an Idea</option>
                                    <option value="design stage">Design stage</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Mentor/Coach</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Project Type</label>
                                <select class="form-control">
                                    <option value="Add">Add Project Type</option>
                                    <option value="Active">Student Business</option>
                                    <option value="Inctive">Alumni Business</option>
                                    <option value="Active">Enterprise</option>
                                    <option value="Inctive">Entreprenuership Business</option>
                                    <option value="Active">Social Venture</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Industry</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add" style="color: white; background-color: rgb(124, 15, 15)">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Project</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Project SDG</label>
                                <select class="form-control" required>Select Status>
                                    <option value="0">Choose Project SDG</option>
                                    <option value="1">No POverty</option>
                                    <option value="2">Zero Hunger</option>
                                    <option value="3">Good Health and Good Well-being</option>
                                    <option value="4">Quality Education</option>
                                    <option value="5">Gender Equality</option>
                                    <option value="6">Clean Water and Sanitation</option>
                                    <option value="7">Affordable and Clean Energy</option>
                                    <option value="8">Decent Work and Economic Growth</option>
                                    <option value="9">Industry, Innovation and Infrastructure</option>
                                    <option value="10">Reduced INequalities</option>
                                    <option value="11">Sustainable Citiesand Communities</option>
                                    <option value="12">Responsible Consumption and Production</option>
                                    <option value="13">Climate Change</option>
                                    <option value="14">Life Below Water</option>
                                    <option value="15">Life on Land</option>
                                    <option value="16">Peace, Justice and Strong Institutions</option>
                                    <option value="17">Partnerships for the Goals</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Status</label>
                                <select class="form-control">Select Status>
                                    <option value="Add">Add Project status</option>
                                    <option value="Active">Still an Idea</option>
                                    <option value="Inctive">In Development</option>
                                    <option value="Active">Still Prototyping</option>
                                    <option value="Inctive">Ideation</option>
                                    <option value="Active">In operation</option>
                                    <option value="Inctive">Design stage</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Coach/Mentor</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Project Type</label>
                                <select class="form-control">
                                    <option value="Add">Add Project Type</option>
                                    <option value="Active">Student Business</option>
                                    <option value="Inctive">Alumni Business</option>
                                    <option value="Active">Enterprise</option>
                                    <option value="Inctive">Entreprenuership Business</option>
                                    <option value="Active">Social Venture</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Industry</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save" style="color: white; background-color: rgb(124, 15, 15)">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Project</h4>
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
    </section>

    <!--Javascript to get elements-->
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

</body>

</html>