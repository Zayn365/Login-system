<!-- page header -->
<div class="container" id="home">
    <div class="col-12 text-center">
        <div class="tm-page-header">
           <img src="img/Logo.jpeg" style="width: 400px;height: 120px; margin-top: -20px">
        </div>
    </div>
</div>

<!-- navbar -->
<div class="tm-nav-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#tmMainNav"
                        aria-controls="tmMainNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="tmMainNav">
                        <ul class="navbar-nav mx-auto tm-navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home"
                                >Home <span class="sr-only">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#activities">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#company">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>

                            <?php
                            if(isset($_SESSION['user_id'])){
                                ?>
                            <li class="nav-item">
                                <a class="nav-link external" href="#" style="text-transform: uppercase; color:#1db9aa; text-decoration: none;"><?php echo $_SESSION['user_name']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external text-danger" href= "/oopweb/includes/logout.inc.php" > LogOut </a>
                            </li>
                                <?php
                            }
                            else{
                                ?>
                            <li class="nav-item">
                                <a class="nav-link external" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="/oopweb/signup.php">Signup</a>
                            </li>
                            <?php  }  ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
