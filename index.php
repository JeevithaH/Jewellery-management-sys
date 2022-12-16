<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link ref="stylesheet" href="css/all.min.css">

    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?
    family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!--style.css-->
    <link rel="stylesheet" href="css/stylee.css">

    <title>Dazzles</title>
</head>

<body>
    <!-- start navigation-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top ">
        <span class="navbar-text">
            <h5>Dazzles jewel</h5>
        </span>
        <a class="navbar-brand" href="#"><img src="images/IMG-20221112-WA0001.jpg" alt=""></a>


        <span class=""></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-Lable="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home

                    </a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">shop</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Orders</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Signup</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>

            </ul>
        </div>
    </nav>
    <!-- end navigation-->

    <!--start video background-->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video\homescreen_background.mp4
                " type="">
            </video>
            <div class="vid-overlay"></div>
            <div class="vid-content">
                <h1 class="my-content">Welcome to Dazzles</h1>
                <small class="my-content">
                    <h6>Stay magical</h6>
                </small><br>
                <a href="#" class="btn">SHOP NOW</a>

            </div>

        </div>


        <!--end video background-->
        <!--start Text Banner-->
        <div class="container-fluid bg-danger txt-banner">
            <div class="row bottom-banner">
                <div class="col-sm">
                    <h5><i class="fas fa-layer-group"></i>100+Collections</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-dice-d20"></i>Expert Design</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-handshake"></i>7 days Return Policy</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-hand-holding-usd"></i>Money Back Guarantee</h5>
                </div>
            </div>
        </div>
        <!--end text Banner-->
        <!-- ------------------------------------------------------------------------------------ -->
        <!-- GOLD-->
        <div class="container mt-5">
            <h1 class="text-center">New collections</h1>
            <!--start new design 1st Card Deck-->
            <div class="card-deck mt-4">

                <div class="card">
                    <h4>Turn Moments into Memories</h4>
                    <img src="images/gold_sel.jpg" class="image" alt="Gold" />
                    <div class="card-body">

                        <a class="btn btn-primary text-white 
                    font-weight-border float-right" href="gold.php">BUY GOLD</a>

                    </div>

                </div>

            </div>
            <!--Gold--->

            <!-- ------------------------------------------------------------------------------------ -->

            <!-- Silver-->

            <!--start new design 1st Card Deck-->
            <div class="card-deck mt-4">

                <div class="card">
                    <img src="images/silver_sel.jpg" class="image" alt="Silver" />
                    <div class="card-body">

                        <a class="btn btn-primary text-white 
                    font-weight-border float-right" href="gold.php">BUY SILVER</a>

                    </div>

                </div>

            </div>
            <!--Silver--->

            <!-- ------------------------------------------------------------------------------------ -->
            <!--diamond-->

            <!--start new design 1st Card Deck-->
            <div class="card-deck mt-4">

                <div class="card">
                    <img src="images/diamond_sel.jpg" class="image" alt="diamond" />
                    <div class="card-body">

                        <a class="btn btn-primary text-white 
                    font-weight-border float-right" href="gold.php">BUY DIAMOND</a>
                    </div>


                </div>

            </div>
            <!--end diamond--->

            <div class="container mt-4" id="Contact">
                <!--start contact-->
                <h2 class="text-center mb-4">Contact Us</h2>
                <div class="row">
                    <div class="col-md-8">
                        <form action="" method="post">
                            <input type="text" class="form-control" name="name" placeholder="Name"><br>
                            <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                            <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                            <textarea class="form-control" name="message" placeholder="how can we help you?"
                                style="height:150px;"></textarea><br>
                            <input class="btn btn-primary" type="submit" value="Submit"><br><br>
                        </form>
                    </div>
                    <!--End Contact us 1st column-->
                    <div class="col-md-4 stripe text-white text-center">
                        <!--start Contact us  2nd Column-->
                        <h4>Dazzels</h4>
                        <p>Near vijaynagar Bangaluru -560040
                            <br />
                            phone- +8123943351<br />
                            www.Dazzels.com
                        </p>
                    </div>
                </div>
            </div>
            <!--links-->
            <div class="container-fluid " style="background-color:#724752 ">
                <div class="row text-white text-center p-1">
                    <div class="col-sm">
                        <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                    </div>
                    <div class="col-sm">
                        <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
                    </div>
                    <div class="col-sm">
                        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
                    </div>
                    <div class="col-sm">
                        <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
                    </div>

                </div>
                <!--end link-->
                <!--About Us-->
                <div class="container-fluid p-4" style="background-color:#724752">
                    <div class="container" style="background-color:aliceblue">
                        <div class="row text-center">
                            <div class="col-sm">
                                <h5>About Us</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni odio optio quis
                                    cumque. Exercitationem minus, velit alias totam tempora tempore!</p>
                            </div>
                            <div class="col-sm">
                                <h5>Category</h5>
                                <a class="text-dark" href="#">Web Development</a><br />
                                <a class="text-dark" href="#">Web Desiging</a><br />
                                <a class="text-dark" href="#">Web Development</a><br />
                                <a class="text-dark" href="#">Web Development</a><br />
                                <a class="text-dark" href="#">Web Development</a><br />
                                <a class="text-dark" href="#">Web Development</a><br />
                            </div>
                            <div class="col-sm">
                                <h5>Contact Us</h5>
                                <p>jewel Pvt Ltd<br>Near vijaynagar<br>Bangaluru<br>Ph.8123943351</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <footer class="container-fluid bg-white text-center">
                        <small class="text-dark">Copyright &copy;2022||Designed By Dazzels||Admin Login</small>
                    </footer>

























                    <script src="js/jquery.min.js"></script>
                    <!-- bootstrap js -->
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <!-- font Awesome js-->
                    <script src="js/all.min.js"></script>

</body>

</html>