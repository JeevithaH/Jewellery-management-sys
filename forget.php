<?php
    include('./config/pdoconfig.php');
    $check = $_POST['check'];
    $pass = $_POST['pass'];
    $sql = "UPDATE login SET password = '$pass' WHERE email = '$check'";
    $statement = $connection->prepare($sql);
    $result = $statement->execute();
    if($result){
        echo 'done';
    }
    

?>