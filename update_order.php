<?php
  require 'connect.php'; 
  session_start(); 
  if (isset($_POST['update'])) {
  $quantity = $_POST['quantity'];
  $item_name = $_POST['item_name'];
  $username = $_SESSION['privilleged'] ;

   
  $sql="UPDATE orders SET quantity=:quantity where username=:username AND item_name=:item_name";

    $statement=$pdo->prepare($sql);
    $statement->bindParam(":item_name", $item_name, PDO::PARAM_STR); 
    $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
    $statement->bindParam(":username", $username, PDO::PARAM_STR);
    $statement->execute();
  }
  header('Location: cart.php');
  
?>
