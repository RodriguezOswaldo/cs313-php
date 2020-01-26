<?php
session_start();


$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="styles/styles.css">
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