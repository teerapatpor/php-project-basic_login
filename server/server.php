<?php
// for develop
// $server_name = "localhost";
// $username = "root";
// $password = "";
// $database_name = "project";

// for deploy
$server_name = "remotemysql.com";
$username = "qBpQoAJ2nV";
$password = "YdRGrqAUgm";
$database_name = "qBpQoAJ2nV";

$connect = mysqli_connect($server_name, $username, $password, $database_name);
