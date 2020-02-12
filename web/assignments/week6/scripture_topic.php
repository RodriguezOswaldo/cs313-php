<?php
//bringing the connection!
require "connections.php";
$db=get_db();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    <title>Scriptures</title>
</head>
<body>
<div class="container">
    <h1>Topic Scripture</h1>
    <form action="allscriptures.php" method="post">
        <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br>
        <label for="chapter">Chapter:</label>
        <input type="text" id="chapter" name="chapter"><br>
        <label for="verse">Verse:</label>
        <input type="text" id="verse" name="verse"><br>
        <label for="content" >Content:</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <label for="topics">Topics: </label><br>
        <?php
            $stmt = $db->prepare('SELECT id, name FROM topic'); 
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $id = $row['id'];
                $name= $row['name'];

                echo "<input type='checkbox' name='topics[]' id='topics$id' value='$id'>";
                echo "<label for='topics$id'>$name</label><br>";
            }
        ?><button type="submit" >Submit</button>
    </form>
    </div>
</body>
</html>