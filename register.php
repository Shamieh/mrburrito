
<?php
require("connect.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
$sql="INSERT INTO users (first_name,last_name,username,password) values (:first_name,:last_name,:username,:password)";
$statement=$pdo->prepare($sql);
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$password=$_POST['password'];

$statement->bindParam(":first_name",$first_name,PDO::PARAM_STR);
$statement->bindParam(":last_name",$last_name,PDO::PARAM_STR);
$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$statement->execute();

if ($statement->rowCount() > 0) {
    echo '<script>';
    echo 'alert("New user added successfully");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Burrito | Resgister</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="Mr._Burritos_logo-removebg.png">
</head>

<body>
<form action="" method="POST">
    <div class="container">
        <div><img src="Mr._Burritos_logo-removebg.png" alt="Logo" class="logo"></div>

        
        <div class="login">
            <h1>Register</h1>
            <label for="fname"  >First Name</label><br>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            <br>
            <label for="lname"  >Last Name</label><br>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            <br>
            <label for="username"  >Username</label> <br>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <br>
            <label for="password"  >Password</label> <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br><br>
            
            <button type="submit" name="register">Register </button>
            <br><br>
            <div class="registerButton"> go to login page</div>
            <button> <a href="index.php" style="text-decoration: none; color: black">Login</a></button>
            <br><br>
        </div>

    </div>
</form>
</body>

</html>