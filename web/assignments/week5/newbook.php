<?php
session_start();
require 'boojk.php';
if(!isset($_POST['book_id']))
{
    die('Error, book id not specified');
}
$book_id = htmlspecialchars($_POST['book_id']);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Book</title>
</head>
<body>
<div class="container">
    <h1>Add A New Book</h1>
    <form action="addbook.php" method="post">
        <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
        <label for="book_title">Book:</label><br>
        <input type="text" id="book_title" name="book_title"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="book_release_year">Book Release Year:</label><br>
        <input type="text" id="book_release_year" name="book_release_year"><br>
        <label for="book_category_name" >Book Category Name:</label><br>
        <input name="book_category_name" id="book_category_name"><br>
        <label for="client_name" > User Name:</label><br>
        <input name="client_name" id="client_name"><br>
        <button type="submit" >Submit</button>
    </form>
    </div>
</body>
</html>