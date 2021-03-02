<?php
session_start();
include("./server/server.php");

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
    <form action="./server/rePassword.php" method="post" class="form_auth">
        <div>
            <label for="username">username: </label>
            <input type="text" id="username" name="username" placeholder="กรุณาใส่ username">
        </div>
        <div>
            <label for="password">password: </label>
            <input type="text" id="password" name="password" placeholder="กรุณาใส่ password">
        </div>


        <button name="rePassword">เปลี่ยนรหัสผ่าน</button>
        <br />
        <?php
        if (isset($_SESSION['fail'])) {
            echo "<span style='color:red'>";
            echo $_SESSION["fail"];
            echo "</span>";
        }
        ?>
    </form>


</body>

</html>