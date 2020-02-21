<?php
session_start();
$loginFailed = false;
    $username = $_POST['acct_name'];
    $password = $_POST['acct_password'];
   
if(isset($_POST['acct_name']) && isset($_POST['acct_password'])){

    $username = $_POST['acct_name'];
    $password = $_POST['acct_password'];
    // echo $username, $password;
    // exit;

    //db connection
    require 'connections.php';
    $db = get_db();

    $query = 'SELECT acct_password FROM users WHERE acct_name =:username';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username);
    $result = $stmt->execute();
    echo $result[0];

//     if($result)
//     {
//         $row = $stmt->fetch();
//         $hashedpassword($row['password']);

//         if(password_verify($password, $hashedpassword))
//         {
//             $_SESSION['acct_name'] = $username;
//             header('Location: book.php');
//             die();
//         }
//         else
//         {
//             $loginFailed = true;
//         }
//     }    
//     else
//     {
//         $loginFailed = true;
//     }
// }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"> 
        <link rel="stylesheet" href="/assignments/styles/styles.css">
    <title>Login to the BookShelf!</title>
</head>
<body>
    <div class="container">
        <?php
            if($loginFailed)
            {
                echo "Incorrect username or password!<br><br>";
            }
        ?>
        <div class="loginbox">
            <h1> Login</h1>
            <form id="login" action="login.php" method="POST">
                <input type="text" name="acct_name" id="username" placeholder="Username">
                <label for="username">Username</label>
                <input type="password" name="acct_password" id="password" placeholder="Password">
                <label for="password">Password</label><br>
                <input type="submit" value="Login" class="btn btn-outline-success">
            </form>
            <br>
            <p>New? then <a href="register.php">Register</a> for a new Account.</p>
        </div>
    </div>
    
</body>
</html>