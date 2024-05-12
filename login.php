<?php
    session_start();   
    
    $header = "Location: admin.php";

if (isset($_POST["login"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "geheim") {
        $_SESSION["username"] = "admin";
        header($header);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form class="login-form" action='login.php' name='login' method="post">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username
                    <input type="text" name="username" placeholder="Username" required>
                </label>
            </div>
            <div class="input-group">
                <label for="password">Password
                    <input type="password" name="password" placeholder="Password" required>
                </label>
            </div>
            <div>
                <input type="submit" name="login" value="login">
            </div>            
        </form>
        
        
    </div>
</body>
</html>