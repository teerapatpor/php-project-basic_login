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

    <form action="./server/register.php" method="post" class="form_auth">
        <div>
            <label for="username">username: </label>
            <input type="text" id="username" name="username" placeholder="กรุณาใส่ username">
        </div>
        <div>
            <label for="password">password: </label>
            <input type="text" id="password" name="password" placeholder="กรุณาใส่ password">
        </div>


        <button name="register">สมัครสมาชิก</button>
        <br />
        <div style="margin-top:10px">
            <span>เป็นสมาชิกเรียบร้อยแล้ว : </span>
            <a href="login.php" style="color:blue">เข้าสู่ระบบ</a>
        </div>
        <?php
        if (isset($_SESSION["query_error"])) {
            echo "<p style='color:red'>";
            echo $_SESSION["query_error"];
            echo " </p>";
        }
        if (isset($_SESSION["query_success"])) {
            echo "<p style='color:green'>";
            echo $_SESSION["query_success"];
            echo " </p>";
        }

        ?>
    </form>
</body>

</html>