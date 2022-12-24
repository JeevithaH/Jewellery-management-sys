<!-- connecting to the data base -->

<?php
$dbhost = "localhost";
$dbname = "root";
$password = "";
$db = "jewellery";
$connection = mysqli_connect($dbhost, $dbname, $password, $db);
if (!$connection) {
    echo " unable connect to data base";
}
?>