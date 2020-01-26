<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {     
$item = $_POST['items'];
$_SESSION['items'] = $item;
$name = $_POST['name'];
$_SESSION['name'] = $name;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include '../shoppingcart/modules/head.php';
    ?>

   
    <title>Clone Protocol 66 - Online Store</title>
  
</head>

<body>
    <h2>Clone Protocol 66</h2>
<?php

?>
    <div class="container">
        <form action="items.php" method="POST">
            <label for="item">Select items from the list to add to your cart.</label><br>
            <label for="name">Name For The Order: </label>
            <input type="text" name="name" placeholder="name"><br>
            <label for="items[]">Items: </label><br>
            <div class="row">
                <div class="col-sm">
                    <input type="checkbox" name="items[]" id="jedirobes" value="Jedi Robes">Jedi Robes<br>
                    <img src="./img/robe.jpg" name="" alt="Jedi Robes"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Soft Boots">Soft Boots<br>
                    <img src="./img/soft.jpg" alt="Soft Boots"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Sith Cloak">Sith Cloak<br>
                    <img src="./img/sithcloak.jpg" alt="Sith Cloak"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Jedi Lightsaber">Jedi Lightsaber<br>
                    <img src="./img/lightsaber.jpg" alt="Jedi Lightsaber"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Sith Lightsaber">Sith Lightsaber<br>
                    <img src="./img/darklightsaber.jpg" alt="Sith Lightsaber"><br><br>
                </div>
            </div>
            <input type="submit" class="btn btn-outline-success" value="Add To My Cart">
            <br>
        </form>
            <a href="cart.php"><button class="btn btn-outline-info">Go to Cart</button></a>
            <footer>
                <?php include '../shoppingcart/modules/footer.php' ?>
            </footer>
    </div>
</body>

</html>