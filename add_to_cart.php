<?php
require("connect.php");
session_start();

if (isset($_POST['add_to_cart'])) {

    $item_name = $_POST['item_name'];
    $quantity = $_POST['qty'];
    $price = $_POST['price'];
    $username = $_SESSION['privilleged'] ;
    $sql = "INSERT INTO orders (item_name, quantity, username, price)
    VALUES (:item_name, :quantity, :username, :price)";

  
        $statement=$pdo->prepare($sql);
        $statement->bindParam(":item_name", $item_name, PDO::PARAM_STR); 
        $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
        $statement->bindParam(":username", $username, PDO::PARAM_STR);
        $statement->bindParam(":price", $price, PDO::PARAM_STR);
        $statement->execute();
        header('Location: home.php');
                
    }
?>
