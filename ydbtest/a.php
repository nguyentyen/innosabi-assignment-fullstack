<?php
/**
 * Created by PhpStorm.
 * User: yennguyen
 * Date: 27.02.2019
 * Time: 15:42
 */
phpinfo();
echo 123;
die;
$dsn = 'mysql:host=localhost:63894;dbname=ytest';
$dsn = 'mysql:host=localhost;dbname=ytest';
echo "<br>";
$db = new PDO($dsn, 'sa', 'sa');
var_dump($db);
echo 234;
die;
echo "<br>";
try {
    $db = new PDO($dsn, 'sa', 'sa', $options);
    var_dump($db);
    echo "<br>";
}
// Catch any errors
catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

die;
$servername = "DESKTOP-J3FRRBT";
$name = "sa";
$info = array(
    "Database" => "ytest",
    "UID" => "sa",
    "PWD" => "sa"

);
$conn = sqlsrv_connect($servername, $info);
if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
die;


echo phpinfo();