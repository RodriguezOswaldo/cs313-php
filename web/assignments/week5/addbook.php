<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Books!</title>
</head>
<body>
    <div class="container">
    <form action="function.php" method="POST">
            <label for="item">Select items from the list to add to your cart.</label><br>
            <label for="name">Name For The Order: </label>
            <input type="text" name="name" placeholder="name"><br>
            <label for="items[]">Items: </label><br>
            <div class="row">
                <div class="col-sm">
                    <input type="text"  id="jedirobes" value="Jedi Robes">Jedi Robes<br>
                    <img src="./img/robe.jpg" name="" alt="Jedi Robes"><br><br>
                </div>
                <div class="col-sm">
                    <input type="text"  value="Soft Boots">Soft Boots<br>
                    <img src="./img/soft.jpg" alt="Soft Boots"><br><br>
                </div>
                <div class="col-sm">
                    <input type="text"  value="Sith Cloak">Sith Cloak<br>
                    <img src="./img/sithcloak.jpg" alt="Sith Cloak"><br><br>
                </div>
                <div class="col-sm">
                    <input type="text"  value="Jedi Lightsaber">Jedi Lightsaber<br>
                    <img src="./img/lightsaber.jpg" alt="Jedi Lightsaber"><br><br>
                </div>
                <div class="col-sm">
                    <input type="text"  value="Sith Lightsaber">Sith Lightsaber<br>
                    <img src="./img/darklightsaber.jpg" alt="Sith Lightsaber"><br><br>
                </div>
            </div>
    </div>
</body>
</html>