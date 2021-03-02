<?php
session_start();
include("server.php");

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $username_query = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($connect, $username_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($result["password"] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "เข้าสู่ระบบสำเร็จ!!!";
            header("location:../home.php");
        } else {
            $_SESSION['wrong'] = "รหัสผ่านไม่ถูกต้อง";
            header("location:../login.php");
        }
    } else {
        $_SESSION['wrong'] = "ชื่อผู้ใช้งานไม่ถูกต้อง";
        header("location:../login.php");
    }
}
