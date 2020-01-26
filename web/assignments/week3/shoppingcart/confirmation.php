<?php
session_start();

$name = $_SESSION['name'];
$item = $_SESSION['items'];
$address = $_POST['address'];
$_SESSION['address'] = $address;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="styles/styles.css">
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