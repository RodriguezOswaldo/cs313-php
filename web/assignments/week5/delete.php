<?php
session_start();
if(!isset($_GET['book_id']))
{
    die('Error, book id not specified');
}
$book_id = htmlspecialchars($_GET['book_id']);

//Get Connections
require 'connections.php';

$db = get_db();

$stmt = $db->prepare('DELETE FROM book WHERE id =:book_id');
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$stme->execute();

$new_page = "book.php";

header("location: $new_page");
die();


?>