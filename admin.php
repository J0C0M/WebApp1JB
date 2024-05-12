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
    <a class="btn" href="/html/create.php" role="button">New Item</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include("conn.php");

            $sql = "SELECT * FROM restaurant";
            $stmt = $connection->query($sql);

            while($restaurant = $stmt->fetch()) {
                echo "  
                <tr class='menukaart'>
                    <td>$restaurant[id]</td>
                    <td>$restaurant[name]</td>
                    <td>$restaurant[discription] </td>
                    <td>$restaurant[price]</td>
                    <td>
                        <a class='btn' href='/html/edit.php?id=$restaurant[id]'>Edit</a>
                        <a class='btn' href='/html/delete.php?id=$restaurant[id]'>Delete</a>
                    </td>
                </tr>
                ";
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>