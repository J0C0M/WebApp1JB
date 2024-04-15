<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="css/pannenkoeken.css">
        <link href="https://fonts.cdnfonts.com/css/harlow-solid-italic" rel="stylesheet">
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
                </div>  
            </div>
        </header>
        <main>
            <div class="over-ons-container">
                <h1>over ons</h1>
                <div class=""></div>
                <div></div>
            </div>

        </main>
        
        <footer>
        </footer>
    </body>
</html>

<?php

$host = 'db';
$db   = 'mydatabase';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try{
    $connection = new PDO ($dsn, $user, $pass, $options);
    } 
    catch (\PDOExceptions $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>