<?php

$stmt = $db->prepare("INSERT INTO book (book_title, author, book_release_year, book_category_name, client_name)
VALUES ('book', 'a man', 1971, 'something', 'me')");
$stmt->execute();

?>