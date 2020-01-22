<?php 
    $name = $email = $major = $comments = $continents = " ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Form Handling</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="name"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="your@email.com"><br>
        <label for="major">Major: </label><br>
        <input type="radio" name="major" value="Computer Science"> Computer Science
        <input type="radio" name="major" value="Web Design & Development"> Web Design & Development
        <input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology 
        <input type="radio" name="major" value="Computer Engineering">  Computer Engineering <br><br>
        <label for="continets">Continents: </label><br>
        <input type="checkbox" name="continents" value="North America"> North America
        <input type="checkbox" name="continents" value="South America"> South America
        <input type="checkbox" name="continents" value=" Europe"> Europe
        <input type="checkbox" name="continents" value="Asia"> Asia
        <input type="checkbox" name="continents" value="Australia"> Australia
        <input type="checkbox" name="continents" value="Africa"> Africa
        <input type="checkbox" name="continents" value="Antartica"> Antartica<br>
        <label for="comments"> Leave Us Your Comments:</label><br>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php 
        echo "Here is the name <br>";
        echo $_POST['name'] . "<br>";
        echo "Here is the email <br>";
        echo $_POST['email'] . "<br>";
        echo "These are the comments <br>";
        echo $_POST['comments'] . "<br>";
        echo "Here is the major <br>";
        echo $_POST['major'] . "<br>";
        echo "These are the continents he has visited:  <br>";
        echo $_POST['continents'];
    ?>
</body>
</html>