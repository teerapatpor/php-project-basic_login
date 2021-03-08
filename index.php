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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Php Project</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-center ">
        <h1 onclick="location.href='index.php'" class="Navbar_text" style="color:white">Php Project</h1>
    </nav>

    <div class="container">
        <div class="text-center mt-5">
            <button class="btn btn-primary" onclick="location.href='login.php'">Login</button>
        </div>
    </div>

</body>

</html>