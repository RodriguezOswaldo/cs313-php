<?php
session_start();
require 'connections.php';
$db = get_db();
//From the preparation
$book_title = htmlspecialchars($_POST['book_title']);
$book_title = htmlspecialchars($_POST['author']);
$book_release_yeargit = htmlspecialchars($_POST['book_release_year']);
$book_category_name = htmlspecialchars($_POST['book_category_name']);
$client_name = htmlspecialchars($_POST['client_name']);

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

// I'll use this line of code later when I'm adding specific IDs
//sending the user back to this page after submitting the form
$new_page = "course_notes.php?id=$course_id";

header("location: $new_page");
die();
?>