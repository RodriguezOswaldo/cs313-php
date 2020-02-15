<?php
$book_id = htmlspecialchars($_POST['book_id']);
$book_title = htmlspecialchars($_POST['book_title']);

echo "$book_id\n";
echo $book_title;

?>