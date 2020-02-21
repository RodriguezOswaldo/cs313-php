<!DOCTYPE html>
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
    <title>Registration Page for the BookShelf!</title>
</head>
<body>
<div class="container">
    <div class="loginbox">
<h1> Register!</h1>
<form id="login" action="newAccount.php" method="POST">
    <input type="text" name="acct_name" id="username" placeholder="Username">
    <label for="username">Username</label>
    <input type="password" name="acct_password" id="password" placeholder="Password">
    <label for="password">Password</label><br>
    <input type="submit" value="Register" class="btn btn-outline-success">
</form>
<br>
<p>Already have an account? then try <a href="login.php">Login</a></p>
</div>
</div>
    
</body>
</html>