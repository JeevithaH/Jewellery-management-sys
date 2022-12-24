<?php
include("../../config/pdoconfig.php");
$path = "./uploads-category/";
$name = $_POST['name'];
$img = $_FILES['fileimg']['name'];
$filename = $_FILES["fileimg"]["tmp_name"]; 
$finalimage = rand(1,100) . $img;
$path = $path.strtolower($finalimage);
if(move_uploaded_file($filename,$path)){
    $query = "INSERT INTO `category` (`name`, `image`) VALUES ( '$name', '$finalimage')";
     $statement = $connection->prepare($query);
     $run = $statement->execute();
     if($run){
      echo "done";
     }
}
?>