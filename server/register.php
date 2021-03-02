<?php
session_start();
include("server.php");

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $username_query = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($connect, $username_query);
    $result = mysqli_fetch_assoc($query);
    if ($result) {
        $_SESSION['query_error'] = "username นี้มีผู้ใช้งานแล้ว";
        $_SESSION['query_success'] = "";
        header("location:../register.php");
    } else {

        $password_query = md5($password);
        $sql = "INSERT INTO user(username , password) VALUES ('$username','$password')";
        $query = mysqli_query($connect, $sql);
        $_SESSION['query_error'] = "";
        $_SESSION['query_success'] = "สมัครสมาชิกสำเร็จ";
        header("location:../register.php");
    }
}
