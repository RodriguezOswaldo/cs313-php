<?php
session_start();

//Get Connections
require 'connections.php';

$db = get_db();

$stmt = $db->prepare('DELETE FROM book WHERE id =:book_id');
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stme->execute();

$new_page = "book.php";

header("location: $new_page");
die();


?>