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
?>