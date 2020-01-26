<?php 
session_start();

$item = $_SESSION['items'];
$name = $_SESSION['name'];
?><!DOCTYPE html>
<html lang="en">
<head>
<?php 
        include '../shoppingcart/modules/head.php';
    ?>
    <title>Cart</title>
</head>
<body>
    <div class="container">
    <h2>Cart</h2>
    <h4>Items placed in cart</h4>
    <span>
        <?php

        if(!empty($item)){
            foreach ($_SESSION['items'] as $selected) {
                echo "<li>" . $selected." </li></br>";
            }
        }
        if (!empty($name)){
                echo  "<span class='name'>" . $name  . "</span>,<p> If you are ready to place your order click on <em>Place Order Now</em>, otherwise, click on <em>Review More Products</em> to go back to the products page.</p>"; // Displays value of checked checkbox.
                }
    ?></span><br>
    <a href="checkout.php"><button class="btn btn-outline-success">Place Order Now</button></a><br><br>
    <a href="items.php"><button class="btn btn-outline-info">Review More Products</button></a>

    <footer>
        <?php include '../shoppingcart/modules/footer.php' ?>
    </footer>
    </div>
</body>
</html>