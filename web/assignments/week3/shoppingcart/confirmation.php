<?php
session_start();

$name = $_SESSION['name'];
$item = $_SESSION['items'];
$address = $_POST['address'];
$_SESSION['address'] = $address;

?><!DOCTYPE html>
<html lang="en">
<head>
<?php 
        include '../shoppingcart/modules/head.php';
    ?>
    <title>Confirmation</title>
</head>
<body>
    <div class="container confirmation">
        <div class="box">

            <h2>Thank You!</h2>
            <p>We have taken your order, here is the confirmation.</p>
            
            <h3>Shipping Information</h3>
            <p>Name: <?php if (!empty($name)){ echo "<span class='name'>" . $name ."</span>";}  ?></p>
            <p>Address: <?php if (!empty($address)){ echo "<span class='name'>" . $address ."</span>";}  ?></p>
            <p>City: <?php if (!empty($_POST['city'])){ echo "<span class='name'>" . $_POST['city'] ."</span>";}  ?></p>
            <p>Zip: <?php if (!empty($_POST['zip'])){ echo "<span class='name'>" . $_POST['zip'] ."</span>";}  ?></p>
        </div>
        <div class="box">
            <h2>Order</h2>
            <p><?php 
                if(!empty($item)){
                    foreach ($_SESSION['items'] as $selected) {
                        echo "<li>" . $selected." </li></br>";
                    }
                }
            ?></p>

        </div>

    <footer>
        <?php include '../shoppingcart/modules/footer.php' ?>
    </footer>
    </div>
    
</body>
</html>