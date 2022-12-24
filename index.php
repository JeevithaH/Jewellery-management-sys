<!--start including header-->
<?php
include("./mainInclude/header.php");
?>
<!--end including header-->

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
                <a href="#" class="btn"data-bs-toggle="modal" data-bs-target="#cusregModalCen">SHOP NOW</a>
                 <!-- Button trigger modal -->


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

           <!--start contact us-->
           <?php
           include('./contact.php');
           ?>
           <!--end contact us-->
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
                                <p>We've revolutionized what it means to buy engagement rings and exquisite 
                                    jewelry so you can make the most of your budget. By cutting out the middleman, we pass 
                                    the savings onto you, all while preserving exceptional customer service and the highest 
                                    quality jewelry</p>
                            </div>
                            <div class="col-sm">
                                <h5>Category</h5>
                                <a class="text-dark" href="#">Quality & Value
                                </a><br />
                                <a class="text-dark" href="#">Diamond Sustainability
                                </a><br />
                                <a class="text-dark" href="#">Customer Reviews
                                </a><br />
                                <a class="text-dark" href="#">Blog</a><br />
                               
                            </div>
                            <div class="col-sm">
                                <h5>Contact Us</h5>
                                <p>jewel Pvt Ltd<br>Near vijaynagar<br>Bangaluru<br>Ph.8123943351</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!--start including footer-->
                    <?php
                        include("./mainInclude/footer.php")
                    ?>
                    <!--end including footer-->
   