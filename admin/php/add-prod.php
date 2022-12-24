<?php 
include("../../config/pdoconfig.php");
$path = "./uploads-prod/";
$name = $_POST['name'];
$mrp = $_POST['mrp'];
$dis = $_POST['dis'];
$cat_id = $_POST['cat_id'];
$det = $_POST['det'];
$img = $_FILES['fileimg']['name'];
$filename = $_FILES["fileimg"]["tmp_name"]; 
$finalimage = rand(1,100) . $img;
$path = $path.strtolower($finalimage);
if(move_uploaded_file($filename,$path)){
    $query = "INSERT INTO `product` (`name`, `mrp`, `dis`, `img`, `details`,`cat_id`) VALUES ( '$name', '$mrp', '$dis', '$finalimage', '$det','$cat_id')";
     $statement = $connection->prepare($query);
     $run = $statement->execute();
     if($run){
      echo "done";
     }
}


?>