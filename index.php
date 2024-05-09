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
                <div class="header-middle-part">  ?discription?
                        <a class="header-btn" href="#ooc">home</a>
                        <a class="header-btn" href="index.php">Over Ons</a>
                        <div class="search-bar-titel">
                            <h1 class="header-txt">De Betoverde Pannenkoek</h1>
                            <form method="post">
                                <label></label>
                                <input type="text" name="search" placeholder="Zoeken">
                                <input type="submit" name="submit">
                                <?php 
                                if(isset($_POST["submit"])) {
                                    $str = "".$_POST["search"];
                                    $sth = $connection->prepare("SELECT * FROM `restaurant` WHERE name = '$str'");

                                    $sth->setFetchMode(PDO::FETCH_OBJ);
                                    $sth ->execute();

                                    if($row = $sth->fetch()) {
                                        ?>
                                        <br><br><br>
                                        <table>
                                            <tr>
                                                <th>name</th>
                                                <th>discription</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->discription;?></td>
                                            </tr>
                                        </table>
                                        <?php
                                    }
                                        
                                        else {
                                            echo "name does not exist";
                                        }
                                }
                                ?>
                            </form>
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
            <div id="ooc"></div>
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

