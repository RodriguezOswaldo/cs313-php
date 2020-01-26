<?php
session_start();


$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
        include '../shoppingcart/modules/head.php';
    ?>
  <title>Check out page!</title>
</head>

<body>
  <div class="container">
    <h2>This is the Check Out page!</h2>
    <p>We just need some shipping information to ship your order.</p>

    <form action="confirmation.php" method="post">
      <p>Name: <?php if (!empty($name)){ echo "<span class='name'>" . $name ."</span>";} ?></p>
  
      <label>Address: </label><br><input type="text" name="address"><br>
      <label>City: </label><br><input type="text" name="city"><br>
      <label>Zip Code: </label><br><input type="text" name="zip"><br>
     
      <button type="submit" class="btn btn-outline-success">Confirm</button>
    </form>
  <br>
    <a href="cart.php"><button class="btn btn-outline-info">Back To Cart</button></a>
  </div>

<footer>
        <?php include '../shoppingcart/modules/footer.php' ?>
    </footer>

</body>

</html>