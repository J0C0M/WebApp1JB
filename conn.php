<?php

$host = 'db';
            $db   = 'restaurant';
            $user = 'root';
            $pass = 'rootpassword';
            $charset = 'utf8mb4';
             
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            
            $connection = new PDO ($dsn, $user, $pass);
            
?>