<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart | Mr Burrito</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="icon" type="image/x-icon" href="Mr._Burritos_logo-removebg.png">

</head>
<body>
 
<?php
session_start();
require 'connect.php';

$username = $_SESSION['privilleged'] ;


$sql = "SELECT item_name, price, quantity FROM orders WHERE username = :username";
$statement = $pdo->prepare($sql);
$statement->bindParam(':username', $username, PDO::PARAM_STR);
$statement->execute();


$data = $statement->fetchAll();

$total = 0;
foreach ($data as $row) {
    $subtotal = $row['price'] * $row['quantity'];
    $total += $subtotal;
}
?>
<table>
  <tr>
    <th>Item Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Subtotal</th>
  </tr>
  <?php foreach ($data as $row) { ?>
  <tr>
    <td><?php echo $row['item_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td>
      <form action="update_order.php" method="post">
        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>">
        <br>
        <input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>">
        <input type="submit" name="update" value="Update" class="input">
      </form>

      <form action="delete_order.php" method="post">
        <input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>">
        <input type="submit" name="delete" value="Delete" class="input">
      </form>

    </td>
    <td><?php echo $row['price'] * $row['quantity']; ?></td>
    
  </tr>
  <?php } ?>
  <tr>
    <td colspan="3">Total</td>
    <td><?php echo $total; ?></td>
  </tr>
</table>

<?php
$pdo = null;
?>
<br>
<a href="home.php" style=" color:blue ">Back to the Menu</a>


</body>
</html>