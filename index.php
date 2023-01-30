<?php


session_start();
require("connect.php");

if (isset($_SESSION['privilleged'])) {
    header('Location: home.php');
}

if(isset($_POST['login'])){
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $statement = $pdo->prepare($sql);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->bindParam(":password", $password, PDO::PARAM_STR);
    $statement->execute();
    $count = $statement->rowCount();


    if($count == 1){
        $_SESSION['privilleged'] = $username;
        // $_SESSION['logged_in'] = true;
        header("Location: home.php");
        exit();
    } 
    $pdo = null;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mr Burrito </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Mr._Burritos_logo-removebg.png">
    

</head>

<body>
<form method="POST">    
    <div class="container">
        <div><img src="Mr._Burritos_logo-removebg.png" alt="Logo" class="logo"></div>

        <div class="login">
            <h1>Login</h1>
            <label for="username">Username</label> <br>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <br>
            <label for="password">Password</label> <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br><br>
            <button type="submit" id="login-btn" name="login">Login</button>
            <br>
           
            <div style="color:#8a0e10;">
    <?php 
        if(isset($_POST['login'])){
            if($count != 1){
                echo "Invalid username or password.";
            }
        }
    ?>
</div>
            <br>
            <div class="registerButton"> Don't have an account?
                <a href="register.php" style="text-decoration: link; color:#e5623e ">Register now</a>
            </div>
            <br>
        </div>

    </div>
</form>
</body>

</html>