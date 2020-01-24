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
</head>
<body>
<h2>Thanks for shopping!</h2>
<p>These are the products you ordered.</p>
    <span>
    <?php 
        echo "Thank you for shopping ".$_POST['name'] . "<br>";
             // Displays value of checked checkbox.
        if(!empty($_POST['items'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['items'] as $selected){
            echo $selected."</br>";
            }
        }
        if(!empty($_POST['img'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['img'] as $selected){
            echo $selected."</br>";
            }
        }
    ?></span>
</body>
</html>