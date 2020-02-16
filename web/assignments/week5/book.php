<?php
/**********************************************************
* File: book.php
* Author: Oswaldo Rodríguez 
* 
* Description: This file shows the book lists of how to query a
*   PostgreSQL database from PHP.
***********************************************************/
session_start();
require "connections.php";
$db=get_db();
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
    <title>Books List!</title>
</head>
<body>
    <h2>Full List of Books!</h2>
    <ul>
    <?php
    $statement = $db->prepare("SELECT id, book_title, author, book_release_year, book_category_name, client_name FROM book");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))

    {
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        $id = $row['id'];
        $title = $row['book_title'];
        $author = $row['author'];
        $year = $row['book_release_year'];
        $category = $row['book_category_name'];
        $client = $row['client_name'];
        // echo "<a href="">$client</a>;
        echo "<li><a href='booksinfo.php?book_id=$id'>$title</a> <a href='update.php?book_id=$id' class='btn-outline-success'>Update</a> | <a class='btn-outline-danger'>Delete</a></li>";
    }    
    ?>
    </ul>
    
</body>
</html>