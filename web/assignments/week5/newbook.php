<?php
//bring the connections file to the scope 
if(!isset($_GET['book_id']))
{
    die('Error, book id not specified');
}
$book_id = htmlspecialchars($_GET['book_id']);
//Get Connections
require 'connections.php';
$db = get_db();
//From the preparation
$stmt = $db->prepare('SELECT b.book_title, b.author, b.book_release_year, b.book_category_name, cl.client_name FROM book b 
JOIN client cl ON cl.book_title = b.book_title WHERE b.id =:id;');
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stmt->execute();
$book_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <!-- <input type="hidden" name="book_id" value=""> -->
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