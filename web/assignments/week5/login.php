<?php
session_start();
$loginFailed = false;

if(isset($_POST['acct_name']) && isset($_POST['acct_password'])){

    $username = $_POST['acct_name'];
    $password = $_POST['acct_password'];
    //db connection
    require 'connections.php';
    $db = get_db();
    
}
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
<div class="loginbox">
<h1> Login</h1>
<form id="login" action="login.php" method="POST">
    <input type="text" name="acct_name" id="username" placeholder="Username">
    <label for="username">Username</label>
    <input type="password" name="acct_password" id="password" placeholder="Password">
    <label for="password">Password</label>
    <input type="submit" value="Login" class="btn btn-outline-success">
</form>
<br>
<p>New? then <a href="register.php">Register</a> for a new Account.</p>
</div>
</div>
    
</body>
</html>