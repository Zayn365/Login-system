<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!--    <link rel="stylesheet" type="text/css" href="css/login.css">-->
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        .section {
            background-image: url("oopweb/img/bglog.jpeg") !important;
        }
    </style>
</head>

<body>
    <!--scripts-->
    <script href="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--scripts end-->
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url('/oopweb/img/bglog.jpeg') !important;">
        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
                <div class="col-12 col-md-4 col-lg-3   h-50 ">
                    <div class="card-lg shadow" style="background: none;">
                        <div class="card-body mx-auto">
                            <h4 class="card-title mt-lg-4 text-center">LogIn Account</h4>
                            <p class="text-center">LogIn with your account</p>
                            <form method="POST" action="includes/login.inc.php">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Email\User: </span>
                                    </div>
                                    <input name="lgn_email" class="form-control" placeholder="Email address" type="text">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Password: </span>
                                    </div>
                                    <input class="form-control" name="lgn_pwd" placeholder="Password" type="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btn_lgn" class="btn btn-primary btn-block"> LogIn Account </button>
                                </div>
                                <p class="text-center font-weight-bold text-info" style="font-size: large">Don't have an account?
                                    <br><button class="btn-outline-light btn btn-lg"><a style="text-decoration: none;" href="signup.php">Sign Up</a></button>
                                    <br><br><a href="index1.php" class="text-center font-weight-bold text-info">Go back to the Home Page</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>