<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link ref="stylesheet" href="./css/all.min.css">
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?
    family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--style.css-->
    <link rel="stylesheet" href="./css/stylee.css">
    <title>Dazzles.gold</title>
</head>

<body>
<?php
include("./mainInclude/header.php");
?>
    <div class="card-deck mt-4">
        <div class="card">
            <img src="./images/gold_sel.jpg" class="image" alt="Gold" />
        </div>
        <!--gold collection-->
        <div class="row row-cols-1 row-cols-md-2 g-4 m-5">
            <?php
                require "./config/pdoconfig.php";
            $id = $_GET['id'];
                $query = "SELECT * FROM product where cat_id = '$id'" ;
                $statement = $connection->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
            if($result) {
                foreach ($result as $row) {
                    echo '
                    <div class="col-lg-3 col-md-6 pb-4 ">
                    <div class="card">
                        <img src="./admin/php/uploads-prod/'.$row['img'].'" class="card-img-top" alt="Gold" />
                        <div class="card-body">
                            <h5 class="card-title">'.$row['name'].'</h5>
                            <h6>Product Information</h6>
                            <p class="card text">'.$row['details'].'</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-8">
                                    <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['mrp'].'</del></small>
                                        <spam class="font-weight-bolder">&#8377 '.$row['dis'].'<spam>
                                    </p>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-primary text-white 
                                font-weight-border text-right" href="#">BUY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    ';
                }

            }
            else{
                echo '<div class="text-center alert alert-success w-100">items will be added soon...</div>';
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>







<!-- <div class="col-lg-3 col-md-6 pb-4">
    <div class="container mt-5">
        
      <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left; padding:0px;margin:0px ;">
                <div class="card">
                    <img src="necklace11.jpg" class="card-img-top" alt="Gold" />
                    <div class="card-body">
                        <h5 class="card-title">Earing</h5>
                        <h6>Product Information</h6>
                        <p class="card text">14 KT Yellow Gold , GH-SI Diamond , width-14.1mm , Height-35-6mm ,
                            purity-14KT , gross Weight-9.475g</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price:<small><del>&#8377 1,33,684</del></small>
                            <spam class="font-weight-bolder">&#8377 1,25,684<spam>
                        </p> <a class="btn btn-primary text-white 
                font-weight-border float-right" href="#">BUY</a>
                    </div>
                </div>
            </a>
        </div>
</div> -->