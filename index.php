<?php 

include("conn.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="css/pannenkoeken.css">
        <link href="https://fonts.cdnfonts.com/css/harlow-solid-italic" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/inika" rel="stylesheet">

    </head>
    <body>
        <header>
            <img src="images/faardyy.png" class="header-img header-img-pos">
            <div class="header-overlapper header-box"></div>
            <div class="header-overlapper header-text-pos">
                
                <img src="images/fardylogotransparent.png" class="logo-header-img">
                <div class="header-middle-part">
                        <a class="header-btn" href="index.php">home</a>
                        <a class="header-btn" href="index.php">Over Ons</a>
                        <div class="search-bar-titel">
                            <h1 class="header-txt">De Betoverde Pannenkoek</h1>
                            
                        </div>
                        <a class="header-btn" href="register.php">Menukaart</a>
                        <a class="header-btn" href="login.php">Contact</a>
                </div>
                <div class="header-login">
                <a class="header-btn center" href="login.php">login</a>
                </div>  
            </div>
        </header>
        <main>
            <div class="over-ons-container">
                <h1>over ons</h1>
                <div class=""></div>
                <div></div>
            </div>

            
            <div class="restaurant">
                <h1 class="menukaart">Betoverende Ontbijt Pannenkoeken:</h1>
                <?php

                

                $sql = "SELECT * FROM restaurant";
                $stmt = $connection->query($sql);

                while($restaurant = $stmt->fetch()) {
                    echo "<div class='menukaart'>" . $restaurant["name"] . " - " . $restaurant["discription"] . " - " . $restaurant["price"] . "€" . "</div>";
                }
                

                ?>
            </div>
            <style>
                .menukaart {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
                margin: 12px;
                font-family: 'Inika', sans-serif;
                font-size: 25px;
                }
            </style>
        </main>
        
        <footer>
        </footer>
    </body>
</html>

