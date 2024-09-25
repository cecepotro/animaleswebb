<?php
$server =  "localhost";
$username = "root";
$password = "admin";
$dbname = "animales_web";

$connection = new mysqli($server, $username, $password, $dbname);
$connection->set_charset("utf8");
if($connection->connect_error){
    die("Falló la conexión: ".$connection->connect_error);
}
?>