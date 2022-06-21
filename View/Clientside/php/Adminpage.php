<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <!--Link to external style sheet-->
    <link rel="stylesheet" href="Admin.css">
    <title>Admin Login Page</title>

</head>

<!-- Body of the Login form starts here -->

<body>
    <section class="Form my-4 mx-5">
        <div class="container" style="width:70%; margin:auto auto;">
            <div class="row no-gutters" style="height:100%;">
                <div class="col-lg-5 left-side">
                    <img src="imga.png" alt="AEC Logo" width="140%" height="70%">
                </div>

                <div class="col-lg-7 px-5 pt-5">
                    <div style="width: 100%; height:60%; margin:auto;">

                        <!-- Form containing the login page -->
                        <form style="width:90%; margin:auto;" method="post" action="../../../Control/getlogin.php">
                            <h1 style="margin-bottom:-1.5em;">

                                <!-- Ashesi Entreprenuerships Centre LOGO -->
                                <img src="AEC LOGO.png" class="img-fluid1" alt="">
                            </h1>
                            <div style=" width: 80%; margin:auto; padding-bottom:1em;">

                                <h6>Only authorised admin can login</h6>
                            </div>

                            <!-- Div containing the email tab -->
                            <div class="form-row" style="width:100%">
                                <div class="col-lg-7" style="width: 80%; margin:auto">
                                    <input type="text" placeholder="  Enter email " name="email" class="form-control my-3 p-3">
                                </div>
                            </div>

                            <!-- div container containing the password -->
                            <div class="form-row">
                                <div class="col-lg-7" style="width: 80%; margin:auto">
                                    <input type="password" placeholder="Enter password" name="password" class="form-control my-3 p-3">
                                </div>
                            </div>

                            <!-- div containing the button -->
                            <div class="form-row" style="height:5em;">
                                <div class="col-lg-7" style="width: 80%; margin:auto">
                                    <button type="submit" name="submit" class="btn1 mt-3 mb-5">LOGIN</button>
                                </div>
                            </div>
                            <!-- forgot password container -->
                            <div class="form-row" style="height:5em;">
                                <div class="col-lg-7" style="width: 80%; margin:auto">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>