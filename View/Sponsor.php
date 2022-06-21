<?php
  require ("../Model/stakeholders.php");
  require "../Model/projectFunctions.php";
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

    <link rel="stylesheet" href="crudStylesheet.css">
    <script src="crud.js"></script>

    <!-- boostrap icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">


</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Team Move</span>
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
                <a href="Sponsor.php" class="active">
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

            <input type="file" id="upload" hidden/>
            <label for="upload">Choose file</label>

        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sponsors</div>
                        <div class="number">
                            <?php echo totalCompanies(); ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:brown;"><i class="bi bi-cash-stack"></i></h1>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sponsored Project</div>
                        <div class="number">
                            <?php echo totalSponsoredProjects(); ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:green;"><i class="bi bi-person-rolodex"></i></h1>
                </div>


                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Sponsored Event</div>
                        <div class="number">
                            <?php echo totalSponsoredEvents(); ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <h1 style="text-align: right; width: 50px; margin-top:5px; color:lightblue;"><i class="bi bi-archive"></i></h1>
                </div>

               


            <!--Put crud here-->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Manage <b>Sponsors</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" style="background-color: white; color: rgb(124, 15, 15)" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Sponsor</span></a>
                                    <input type="text" style="width:250px;" class="form-control" id="myInput" onkeyup="_filter()" placeholder="Search for sponsor type ... " title="Type in a sponsor type">
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
                                    <th>Sponsor name</th>
                                    <th>Sponsor Contact</th>
                                    <th>Sponsor email</th>
                                    <th>Sponsor Adress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo displaytablesCompanies(); ?>
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
                        <form   action= "..\Control\stakeholderCompanyPro.php" method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Sponsor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Sponsor name</label>
                                    <input type="text" class="form-control"  name= "cname" required>
                                </div>
                                <div class="form-group">
                                    <label>Sponsor Contact</label>
                                    <input type="text" class="form-control" name= "contact" required>
                                </div>

                                <div class="form-group">
                                    <label>Sponsor email</label>
                                    <input type="email" class="form-control" name= "email" required>
                                </div>
                                <div class="form-group">
                                    <label>Sponsor Adress</label>
                                    <input type="text" class="form-control" name= "address" required>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" name="submitS" style="color: white; background-color: rgb(124, 15, 15)" value="Add">
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
                                <h4 class="modal-title">Edit Sponsor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Sponsor Type</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Sponsor Email</label>
                                    <input type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Sponsor Contact</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Sponsor Project Interest</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Sponsor Status</label>
                                    <label>Sponsor status</label>
                                    <select class="form-control">Select Status>
                                        <option value="Active">Add Sponsor Status</option>
                                        <option value="Active">Contacted </option>
                                        <option value="Inctive">Not Contacted </option>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" style="color: white; background-color: rgb(124, 15, 15)" value="Save">
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
                                <h4 class="modal-title">Delete Sponsor</h4>
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