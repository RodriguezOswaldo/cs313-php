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
    <h2>Form!</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="name" value="<?php echo $name; ?>"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="your@email.com"><br>
        <label for="major">Major: </label><br>
        <input type="radio" name="major" value="Computer Science"> Computer Science
        <input type="radio" name="major" value="Web Design & Development"> Web Design & Development
        <input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology 
        <input type="radio" name="major" value="Computer Engineering">  Computer Engineering <br><br>
        <label for="continets[]">Continents: </label><br>
        <input type="checkbox" name="continents[]" value="North America"> North America
        <input type="checkbox" name="continents[]" value="South America"> South America
        <input type="checkbox" name="continents[]" value="Europe"> Europe
        <input type="checkbox" name="continents[]" value="Asia"> Asia
        <input type="checkbox" name="continents[]" value="Australia"> Australia
        <input type="checkbox" name="continents[]" value="Africa"> Africa
        <input type="checkbox" name="continents[]" value="Antartica"> Antartica<br>
        <label for="comments"> Leave Us Your Comments:</label><br>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    
    <?php 
        echo "<h3>Here is the name </h3>";
        if (isset($_POST['name'])){
            echo $_POST['name']; // Displays value of checked checkbox.
            }
        echo "<h3>Here is the email </h3>";
        if (isset($_POST['email'])){
            echo $_POST['email']; // Displays value of checked checkbox.
            }
        echo "<h3>These are the comments </h3>";
        if (isset($_POST['comments'])){
            echo $_POST['comments']; // Displays value of checked checkbox.
            }
        echo "<h3>Here is the major </h3>";
        if (isset($_POST['major'])){
            echo $_POST['major']; // Displays value of checked checkbox.
            }       
            
        echo "<h3>These are the continents he has visited:  </h3>";

            if(!empty($_POST['continents'])){
                // Loop to store and display values of individual checked checkbox.
                foreach($_POST['continents'] as $selected){
                echo $selected."</br>";
                }
            }
        // echo count($_POST['continents'] );
        // $arrlength = count($continents); 

        // for ($x = 0; $x < 6; $x++) {
        //     echo $continents[$x];
        //     echo "<br>";
        // }
        // print_r($_POST['continents']);
      
    ?>
</body>
</html>