<?php 

$username = $_POST['acct_name'];
$password = $_POST['acct_password'];
 echo " you made it!";
 echo $username;
 echo $password;
// if username or password are empty display back the register form
 if(!isset($username) || $username == "" || !isset($password) || $password == "")
 {
    header("Location: register.php");
    die();
 }
 $username = htmlspecialchars($username);
 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

 require("connections.php");
 $db = get_db();

 $query = 'INSERT INTO users(acct_name, acct_password) VALUES (:username, :password)';
 $stmt = $db->prepare($query);
 $stmt->bindValue(':username',$username);
 $stmt->bindValue(':password',$hashedPassword);
 $stmt->execute();

 header("Location: login.php");
 die();
?>