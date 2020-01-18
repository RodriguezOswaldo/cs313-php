<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="web/icon.png">

    <title>About Me</title>
</head>

<body>
    <div class="container">
        <div class="showcase">
            <h2>My Family</h2>
            <p>My wife Helena, my little one Arthur, and one more baby boy on his way constitute my small, and growing
                family. </p>
        </div>
        <section class="section section2">
            <h2> My Interest</h2>
                <div class="container-slider">
                        <!--The dots that we'll use to navigate the images-->
                        <input type="radio" name="image" id="i1" checked>
                        <input type="radio" name="image" id="i2">
                        <input type="radio" name="image" id="i3">
                        <input type="radio" name="image" id="i4">
                        <input type="radio" name="image" id="i5">
                        <!--Loading the images-->
                        <!--Image 1-->
                        <div class="mySlides" id="one">
                            <img src="1.jpg" alt="Star Wars image taken from the Time website" >
                            <label for="i5" class="pre"></label>
                            <label for="i2" class="next"></label>
                        </div>
                        <!--Image 2-->
                        <div class="mySlides" id="two">
                            <img src="2.jpg" alt="Image of the suite">
                            <label for="i1" class="pre"></label>
                            <label for="i3" class="next"></label>
                        </div>
                        <!--Image 3-->
                        <div class="mySlides" id="three">
                            <img src="3.png" alt="Photo by Serge Kutuzov on Unsplash">
                            <label for="i2" class="pre"></label>
                            <label for="i4" class="next"></label>
                        </div>
                        <!--Image 4-->
                        <div class="mySlides" id="four">
                            <img src="4.jpg" alt="Image of the suite">
                            <label for="i3" class="pre"></label>
                            <label for="i5" class="next"></label>
                        </div>
                        <!--Image 5-->
                        <div class="mySlides" id="five">
                            <img src="5.png" alt="Photo by Ben White on Unsplash5">
                            <label for="i4" class="pre"></label>
                            <label for="i1" class="next"></label>
                        </div>
        
                        <div class="nav">
                            <label class="dots" id="dot1" for="i1"></label>
                            <label class="dots" id="dot2" for="i2"></label>
                            <label class="dots" id="dot3" for="i3"></label>
                            <label class="dots" id="dot4" for="i4"></label>
                            <label class="dots" id="dot5" for="i5"></label>
                        </div>
        
                    </div>
            <p>I'm passionate about reading, watching movies, and tv shows, cooking, and spending family time outdoors.
            </p>
            <p>Some of my favorite movies, include Star Wars, at least since I watched all the first 6 movies before the
                release of Episode VII on 2015. I also like
                The Hobbit, Batman, and Marvel Movies.</p>
        </section>
        <section class="section section1">

            <h2>Background</h2>
            <img src="programming.png" alt="A laptop used by a web developer" title="Photo by Fatos Bytyqi on Unsplash.com">
            <p>I have been programming for the last couple years. I have worked with several programming
                languages and technologies, included but not limited to HTML, CSS, JS, PHP, jQuery,
                Visual Studio, C#, Microsoft SQL Server, Teradata, Oracle database, phpMyAdmin and others. </p>
                <p>I am eager to learn, and I am always occupied trying to learn and understand new technologies. I like to challenge my knowledge in order to grow.</p>
            </p>
        </section>
    </div>
    <hr>
    <footer>
        <p>&copy; <span id="year">2020</span> | <a title="link to my GitHub page" target="_blank" href="https://github.com/RodriguezOswaldo">Oswaldo
                Rodríguez S.</a> | South Carolina | <a target="_blank" title="link to my BYU-I website" href="http://www.byui.edu/online">BYU-I
                Online Learning.</a></p>
    </footer>
    <script src="/web/scripts/scripts.js">
    </script>
</body>

</html>