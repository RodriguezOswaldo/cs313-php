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
    <title>Scriptures</title>
</head>
<body>
    <h1>Topic Scripture</h1>
    <form action="">
    <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br>
    <label for="chapter">Chapter:</label>
        <input type="text" id="chapter" name="chapter"><br>
    <label for="verse">Verse:</label>
        <input type="text" id="verse" name="verse"><br>
        <label for="content" >Content:</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <label for="topics">Topics</label><br>
        <?php
            $stmt = $db->prepare('SELECT id, name FROM topic'); 
            $stmt->execute();

            foreach ($topics as $stmt) 
            {
                $id = $topics['id'];
                $name= $topics['name'];

                echo "<input type='checkbox' name='topics[]' id='topics$id' value='$id'>";
                echo "<label for='topics$id'>$name</label>";
            }
        ?>

        <button >Submit</button>
    </form>
</body>
</html>