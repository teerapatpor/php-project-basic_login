<?php
session_start();
include("server.php");

$username = $_SESSION["username"];
$sql = "DELETE FROM user WHERE username = '$username'";
$result_sql = mysqli_query($connect, $sql);

if ($result_sql) {
    $_SESSION['result'] = $result_sql;
    $_SESSION['delete_success'] = "delete success";
    header("location:../login.php");
}
