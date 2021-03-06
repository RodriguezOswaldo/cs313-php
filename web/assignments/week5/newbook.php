<?php
session_start();

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
    <link rel="stylesheet" href="/assignments/styles/styles.css">
    <title>Add New Book</title>
</head>
<body>
    <div class="container">
        <div class="loginbox">
            <h1>Add A New Book</h1>
            <form action="addbook.php" method="post">
                <!-- <input type="hidden" name="book_id" value="id"> -->
                <label for="book_title">Book:</label><br>
                <input type="text" id="book_title" name="book_title" required><br>
                <label for="author">Author:</label><br>
                <input type="text" id="author" name="author" required><br>
                <label for="book_release_year">Book Release Year:</label><br>
                <input type="text" id="book_release_year" name="book_release_year" required><br>
                <label for="book_category_name" >Book Category Name:</label><br>
                <input name="book_category_name" id="book_category_name" required><br>
                <label for="client_name" > User Name:</label><br>
                <input name="client_name" id="client_name" required><br><br>
                <button class="btn-info" type="submit" >Submit</button>
            </form>
        </div><br><br><br>

        <a href="book.php">Back to the list</a>
    </div>
</body>
</html>