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
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
            <a href="register.php">Register</a>
            
        </form>
        
        <?php
        session_start();
        include 'conn.php';
        if(empty($_POST['username']) || empty($_POST["password"])){
            header("Location: login.php");
            exit();
        }
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $stmt = $connection->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
        $stmt->execute(['user' => $username, 'pass' => $password]);
        $user = $stmt->fetch();
        
        
        if (!empty($user)){
        $_SESSION["user"] = $username;
            header ("Location: dashboard.php");
            } else{
                header("Location: login.php");
            }
        
        ?>
    </div>
</body>
</html>