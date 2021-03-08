<?php
session_start();

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
        <h1 onclick="location.href='home.php'" class="Navbar_text" style="color:white">Php Project</h1>
    </nav>

    <div class="container bg-secondary justify-content-center pb-3">
        <div class="text-center pt-3">

            <?php
            if (isset($_SESSION["success"]) && isset($_SESSION['username'])) {
                echo "  <script>
            alert('" . $_SESSION["success"] . "')
            </script>";
                echo "<span>";
                echo $_SESSION["username"];
                echo "</span>";
            } else {
                header("location:./login.php");
            }
            ?>
            <a href='./server/deleteAccount.php' onclick="return confirm('ต้องการลบบัญชีจริงหรือไม่ !!!')" style="color:red">delete accout</a>
            <br />
            <button onclick="location.href='login.php'" class="btn btn-danger mt-5">logout</button>

        </div>

    </div>





</body>

</html>