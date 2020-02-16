<?php
//From the preparation

$book_title = htmlspecialchars($_POST['book_title']);
$author = htmlspecialchars($_POST['author']);
$book_release_year = htmlspecialchars($_POST['book_release_year']);
$book_category_name = htmlspecialchars($_POST['book_category_name']);
$client_name = htmlspecialchars($_POST['client_name']);
$id = htmlspecialchars($_POST['book_id']);


require 'connections.php';
$db = get_db();


$stmt = $db->prepare('UPDATE book SET book_title = :book_title, author = :author, book_release_year = :book_release_year,book_category_name = :book_category_name, client_name = :client_name  =  WHERE book_id =:id;');
$stmt->bindValue(':book_id', $id, PDO::PARAM_INT);
$stmt->bindValue(':book_title', $book_title, PDO::PARAM_STR);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':book_release_year', $book_release_year, PDO::PARAM_INT);
$stmt->bindValue(':book_category_name', $book_category_name, PDO::PARAM_STR);
$stmt->bindValue(':client_name', $client_name, PDO::PARAM_STR);
$stmt->execute();
echo 'I am here!';
exit;
// $stmt2 = $db->prepare('UPDATE client SET book_title = :book_title, client_name = :client_name WHERE  b.id =:id;');
// $stmt2->bindValue(':client_name', $client_name, PDO::PARAM_STR);
// $stmt2->bindValue(':book_title', $book_title, PDO::PARAM_STR);
// $stmt2->execute();
echo 'yo are here\n';
echo $book_title;
echo $author;
echo $book_release_year;
echo $book_category_name;
echo $client_name;

// I'll use this line of code later when I'm adding specific IDs
//sending the user back to this page after submitting the form
// $new_page = "booksinfo.php?book_id=$id";

// header("location: $new_page");
// die();
?>