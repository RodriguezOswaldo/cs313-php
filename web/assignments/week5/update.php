<?php
if(!isset($_GET['book_id']))
{
    die('Error, book id not specified');
}
$book_id = htmlspecialchars($_GET['book_id']);
//Get Connections
require 'connections.php';
$db = get_db();
//From the 
$query = 'SELECT b.id, b.book_title, b.author, b.book_release_year, b.book_category_name, cl.client_name FROM book b 
JOIN client cl ON cl.book_title = b.book_title WHERE b.id =:id';
$stmt = $db->prepare($query);
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stmt->execute();
$book_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$title = $book_rows[0]['book_title'];
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
    <title>Update Book</title>
</head>
<body>
    <div class="container">
    <h1>Update Book</h1>
    <h2><?php echo $title; ?></h2>
    <p>
    <?php 
    foreach($book_rows as $book_row)
    {
        $title = $book_row['book_title'];
        $authorName = $book_row['author'];
        $year = $book_row['book_release_year'];
        $category = $book_row['book_category_name'];
        $client = $book_row['client_name'];
        $id = $book_row['id'];
    }

    ?>
   
    <form action="changes.php" method="post">
        <input type="hidden" name="book_id" value="<?php echo $id; ?>">
        <label for="book_title">Book:</label><br>
        <input type="text" id="book_title" name="book_title" value="<?php if (isset($title)) { echo $title; } ?>" required><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="<?php if (isset($authorName)) { echo $authorName; } ?>" required><br>
        <label for="book_release_year">Book Release Year:</label><br>
        <input type="text" id="book_release_year" name="book_release_year" value="<?php if (isset($year)) { echo $year; } ?>" required><br>
        <label for="book_category_name" >Book Category Name:</label><br>
        <input name="book_category_name" id="book_category_name" value="<?php if (isset($category)) { echo $category; } ?>" required><br>
        <label for="client_name" > User Name:</label><br>
        <input name="client_name" id="client_name" value="<?php if (isset($client)) { echo $client; } ?>" required><br><br>
        <button class="btn-info" type="submit" >Submit</button>
    </form>
   
    </div>
</body>
</html>