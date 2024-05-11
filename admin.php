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
    <link rel="stylesheet" href="css/pannenkoeken.css">
    <link href="https://fonts.cdnfonts.com/css/harlow-solid-italic" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/inika" rel="stylesheet">
</head>
<body>
    <h1>Admin pagina</h1>
    <h2>List Of Menu Items</h2>
    <a class="btn" href="/" role="button">New Item</a>
    <ul>
        
    </ul>
</body>
</html>