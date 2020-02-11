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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books List!</title>
</head>
<body>
    <h2>Full List of Books!</h2>
    <li>
    <?php
    $statement = $db->prepare("SELECT book_title, author, book_release_year, book_category_name, client_name FROM book");
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))

    {
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        $title = $row['book_title'];
        $author = $row['author'];
        $year = $row['book_release_year'];
        $category = $row['book_category_name'];
        $client = $row['client_name'];
        // echo "<a href="">$client</a>;
        echo "<ul><p><strong>Book Title</strong>: $title. <strong> Written by:</strong> $author. <strong>Originally Published:</strong> $year. <strong>Category:</strong>$category. Uploaded by: <strong>$client.</strong>\"</p></ul>";
    }    
    ?>
    </li>
    
</body>
</html>