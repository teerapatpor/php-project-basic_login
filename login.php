<?php
session_start();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Php Project</title>
</head>

<body>
    <div class="Navbar">
        <h1 onclick="location.href='index.php'" class="Navbar_text" style="display:inline">Php Project</h1>
    </div>

    <form action="./server/login.php" method="post" class="form_auth">
        <label for="username">username: </label>
        <input type="text" id="username" name="username" placeholder="กรุณาใส่ username">

        <label for="password">password: </label>
        <input type="text" id="password" name="password" placeholder="กรุณาใส่ password">

        <button name="login">เข้าสู่ระบบ</button>
        <br />
        <div style="margin-top:10px">
            <span>หากยังไม่ได้เป็นสมาชิก : </span>
            <a href="register.php" style="color:red">สมัครสมาชิก</a>
        </div>
        <a href="./rePassword.php" style="color:blue">ลืมรหัสผ่าน</a>
        <?php
        if (isset($_SESSION["wrong"])) {
            echo "<p style='color:red'>";
            echo $_SESSION["wrong"];
            echo " </p>";
        }
        ?>

        <?php
        if (isset($_SESSION["delete_success"])) {
            echo "  <script>
            alert('" . $_SESSION["delete_success"] . "')
            </script>";
        }
        ?>
        <?php
        if (isset($_SESSION["update_success"])) {
            echo "  <script>
            alert('" . $_SESSION["update_success"] . "')
            </script>";
        }
        ?>
    </form>
</body>

</html>