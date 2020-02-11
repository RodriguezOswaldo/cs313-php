<?php
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
JOIN client cl ON cl.book_title = b.book_title WHERE b.id =id;');
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$title = $rows[0]['book_title'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Info</title>
</head>
<body>
    <h2><?php echo $book_title;?></h2>
    <p>
    <?php 
        foreach($rows as $row)
        {
            $author = $row['author'];
            // $year = $row['book_release_year'];
            // $category = $row['book_category_name'];
            // $client = $row['client_name'];
            echo '<p>$author </p>';
        }
    ?>
    </p>
</body>
</html>