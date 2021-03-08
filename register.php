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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Php Project</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-center ">
        <h1 onclick="location.href='index.php'" class="Navbar_text" style="color:white">Php Project</h1>
    </nav>
    <div class="container">
        <form action="./server/register.php" method="post" class=" bg-secondary justify-content-center pb-3">

            <div class="input-group mb-3 pt-3 w-50 text-center " style="margin-left:25%">
                <span class="input-group-text">username:</span>
                <input type="text" class="form-control " id="username" name="username" placeholder="กรุณาใส่ username">
            </div>
            <div class="input-group mb-3 w-50" style="margin-left:25%">
                <span class="input-group-text">password:</span>
                <input type="text" class="form-control " id="password" name="password" placeholder="กรุณาใส่ password">
            </div>

            <div class="text-center mt-5">
                <button name="register" class="btn btn-primary">สมัครสมาชิก</button>
                <div style="margin-top:10px">
                    <span>เป็นสมาชิกเรียบร้อยแล้ว : </span>
                    <a href="login.php" class="text-primary">เข้าสู่ระบบ</a>
                </div>
            </div>



            <?php
            if (isset($_SESSION["query_error"])) {
                echo "<div class='text-center'>";
                echo "<p class='bg-danger text-white'>";
                echo $_SESSION["query_error"];
                echo " </p>";
                echo " </div>";
            }
            if (isset($_SESSION["query_success"])) {
                echo "<div class='text-center'>";
                echo "<p class='bg-success text-white'>";
                echo $_SESSION["query_success"];
                echo " </p>";
                echo " </div>";
            }

            ?>
        </form>
    </div>

</body>

</html>