<?php
session_start();
include("server.php");

if (isset($_POST['rePassword'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $username_query = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($connect, $username_query);
    $result = mysqli_fetch_assoc($query);
    if ($result) {
        $password_query = md5($password);
        $sql = "UPDATE user SET password='$password' WHERE username='$username'";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            $_SESSION['update_success'] = "เปลี่ยนรหัสผ่านสำเร็จ";
            $_SESSION['result'] = $query;
            header("location:../login.php");
        } else {
            $_SESSION['fail'] = "เกิดข้อผิดพลาด";
            header("location:../rePassword.php");
        }
    } else {
        $_SESSION['fail'] = "ไม่มี username ดังกล่าว";
        header("location:../rePassword.php");
    }
}
