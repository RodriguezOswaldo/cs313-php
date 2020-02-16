<?php
session_start();
require 'connections.php';
$db = get_db();
//From the preparation
$book_title = htmlspecialchars($_POST['book_title']);

$stmt = $db->prepare('INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES (:book_title, :author, :book_release_year, :book_category_name, :client_name);');
$stmt->bindValue(':book_title', $book_title, PDO::PARAM_STR);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':book_release_year', $book_release_year, PDO::PARAM_INT);
$stmt->bindValue(':book_category_name', $book_category_name, PDO::PARAM_STR);
$stmt->bindValue(':client_name', $client_name, PDO::PARAM_STR);
$stmt->execute();
echo 'yo are here\n';
echo $book_title;
echo $author;
echo $book_release_year;
echo $book_category_name;
echo $client_name;

?>