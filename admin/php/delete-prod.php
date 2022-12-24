
<?php

include '../../config/pdoconfig.php';

$id = $_POST['id']; 



$sql = "SELECT * FROM product WHERE id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();

$result =  $statement->fetchAll();
$loc = "../php/uploads-prod/";
foreach ($result as $row) {

    unlink($loc . $row['img']);
}
$sql = "DELETE  FROM product where id = '$id'";
$statement = $connection->prepare($sql);
$statement->execute();
echo "done";



?>
