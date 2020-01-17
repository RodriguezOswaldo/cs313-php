<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="icon.png">

    <title>Home Page - Oswaldo Rodríguez</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 title="Welcome to my portal!">Oswaldo Rodríguez's Portal</h1>
        <p>Stick around to learn more about me, and to visualize some of my awesome projects!</p> 
    </div>
      
    <div class="container">
        <div  class="row">
            <div id="div1" class="col-sm">
                <div class="box">
                    <h3><a target="_blank" href="about/aboutme.php">About me</a></h3> 
                    <p>More information about the developer.</p>
                </div>
            </div>
            <div id="div2"  class="col-sm">
                <div class="box">
                    <h3><a href="assignments/assignments.php">Assignments</a></h3> 
                    <p>Previous and new assignments..</p>
                    <p><a  target="_blank" href="https://github.com/RodriguezOswaldo">Github page</a></p>
                </div>
            </div>
        </div>
    
</div>
<footer>
        <p>&copy; <span id="year"></span> | <a title="link to my GitHub page" target="_blank" href="https://github.com/RodriguezOswaldo">Oswaldo Rodríguez S.</a> | South Carolina | <a  target="_blank" title="link to my BYU-I website" href="http://www.byui.edu/online">BYU-I Online Learning.</a></p>
</footer>
<script>
    //I'll do this with php at the end.
    var date = new Date();
    var n = date.getFullYear();
    console.log(n); 
    var year = document.getElementById('year').innerHTML = n;
</script>
</body>
</html>

