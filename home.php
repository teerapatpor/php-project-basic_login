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
    <title>Php Project</title>
</head>

<body>
    <div class="Navbar">
        <h1 onclick="location.href='home.php'" class="Navbar_text" style="display:inline">Php Project</h1>
    </div>
    <button class="auth" onclick="location.href='login.php'">logout</button>
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


</body>

</html>