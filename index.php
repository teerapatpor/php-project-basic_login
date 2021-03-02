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
    <button class="auth" onclick="location.href='login.php'">Login</button>
</body>

</html>