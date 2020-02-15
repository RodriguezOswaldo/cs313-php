<?php
$book_title = htmlspecialchars($POST['book_title']);
session_start();
require 'connections.php';
$db = get_db();
//From the preparation
$stmt = $db->prepare('SELECT b.book_title, b.author, b.book_release_year, b.book_category_name, cl.client_name FROM book b 
JOIN client cl ON cl.book_title = b.book_title WHERE b.id =:id;');
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stmt->execute();
echo 'yo are here';
echo $book_title;

?>