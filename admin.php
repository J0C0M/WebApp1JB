<?php
    $header = "Location: login.php";

    session_start();
    if (isset($_SESSION['username'])) {

    } else {
        header($header);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Admin pagina</h1>
    <ul>
        <li><a href="#">delete gebruiker</a></li>
        <li><a href="#">add gebruiker</a></li>
        <li><a href="#">wachtwoord veranderen</a></li>
    </ul>
</body>
</html>