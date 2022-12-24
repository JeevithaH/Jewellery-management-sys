
<?php

include '../../config/pdoconfig.php';

$id = $_POST['id']; 



$sql = "SELECT * FROM category WHERE id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();

$result =  $statement->fetchAll();
$loc = "../php/uploads-category/";
foreach ($result as $row) {

    unlink($loc . $row['image']);
}
$sql = "DELETE  FROM category where id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();
echo "done";



?>
