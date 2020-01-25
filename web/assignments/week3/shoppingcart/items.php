<?php 
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    <title>Items</title>
    <style>
        body{
            margin:0;
            padding:0;
            background: rgb(155, 161, 131);
        }
        img{
            width:100%;
        }
        .btn{

        }
        </style>
</head>

<body>
    <div class="container">
        <form action="sendToCart.php" method="POST">
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
                    <img src="./img/soft.jpg" alt="Jedi Robes"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Sith Cloak">Sith Cloak<br>
                    <img src="./img/sithcloak.jpg" alt="Jedi Robes"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Jedi Ligthsaber">Jedi Lightsaber<br>
                    <img src="./img/lightsaber.jpg" alt="Jedi Robes"><br><br>
                </div>
                <div class="col-sm">
                    <input type="checkbox" name="items[]" value="Sith Ligthsaber">Sith Lightsaber<br>
                    <img src="./img/darklightsaber.jpg" alt="Jedi Robes"><br><br>
                </div>
            </div>
            <input type="submit" class="btn btn-outline-success" value="Order Now">
        </form>
    </div>
</body>

</html>