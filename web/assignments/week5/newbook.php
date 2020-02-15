<?php
//bring the connections file to the scope 
session_start();
require "connections.php";
$db=get_db();
 $statement = $db->prepare("SELECT id, book_title, author, book_release_year, book_category_name, client_name FROM book");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Add A New Book</h1>
    <form action="addbook.php" method="post">
        <label for="book_title">Book:</label>
        <input type="text" id="book_title" name="book_title"><br>
        <!-- <label for="chapter">Chapter:</label>
        <input type="text" id="chapter" name="chapter"><br>
        <label for="verse">Verse:</label>
        <input type="text" id="verse" name="verse"><br>
        <label for="content" >Content:</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <label for="topics">Topics: </label><br> -->
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