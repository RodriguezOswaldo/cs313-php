<?php 
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <style>
    body{
        background:#BADA55;
        text-align: center;
    }
    .name{
        font-weight:bolder;
    }
    .item{

    }
    </style>
</head>
<body>
    <div class="container">
    <h2>Your order has been placed</h2>
    <p>Here are the products you ordered.</p>
    <span>
        <?php 
                // Displays value of checked checkbox.
                if(!empty($_POST['items'])){
                    // Loop to store and display values of individual checked checkbox.
                    foreach($_POST['items'] as $selected){
                        echo $selected."</br>";
                    }
                }
                echo"<br>";
                if (isset($_POST['name'])){
                    echo "<span class='name'>" .$_POST['name'] . "</span>, thank you for shopping with us.<br>"; // Displays value of checked checkbox.
                    }
    ?></span>
    </div>
</body>
</html>