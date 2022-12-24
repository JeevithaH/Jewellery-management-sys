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
                <a href="#new" class="btn">SHOP NOW</a>
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
        <div class="container mt-5" id="new">
            <h1 class="text-center">New collections</h1>
            <h4 class="card-title">Turn Moments into Memories</h4>
            <!--start new design 1st Card Deck-->
            <div class="card-deck row mt-4">
            <?php
            require "./config/pdoconfig.php";
            $query = "SELECT * FROM category";
            $statement = $connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            if($result > 0){
                foreach($result as $row){
                    echo '
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                    <img src="./admin/php/uploads-category/'.$row['image'].'" class="card-img-top p-3" height="350px"  alt="'.$row['name'].'" />
                       <div class="card-body">
                       <div class="col-6">
                       <h4>'.$row['name'].'</h4>
                       </div>
                            
                            <a class="btn btn-primary text-white 
                        font-weight-border float-right" href="gold.php?id='.$row['id'].'">BUY</a>
    
                        </div>
             </div>
                    </div>
             
                    ';
                }
                
            }
            else{
                echo '<div class="alert alert-warning">Categories will be added soon</div>';
            }
            ?>
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
   