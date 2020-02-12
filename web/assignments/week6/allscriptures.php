<?php
require 'connections.php';
$db = get_db();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures - Full List</title>
</head>
<body>
<h2>Scriptures Full List</h2>
<?php
    $stmt = $db->prepare('SELECT book, chapter, verse, content FROM scripture');
    $stmt->execute();
    echo 'SuccesS!';
    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        
        $book = $row['book'];
        $chapter = $row['chapter'];
        $verse = $row['verse'];
        $content = $row['content'];
        echo "<li>$chapter: $book $verse $content</li>";
    }
?>

    
</body>
</html>