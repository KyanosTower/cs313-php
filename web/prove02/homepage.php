<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="javascript.js"></script>
    <title>HOMEPAGE</title>
</head>

<body>
    <header>
        <div class="topnav">
            <a class="active" href="#thebeginning">Home</a>
            <a href="#theend">The End</a>
        </div>
        <br>
        <h1><a id="thebeginning">THE NEW AND IMPROVED HOMEPAGE</a></h1>
        <a href="assignments.html">View assignments</a>
    </header>
    <?php 
        echo "The time is " . date("h.i.sa");
    ?>
    <p id="stupid">Would you like to see something that defines this website? If so, click the button!</p>
    <img src="thisisawebsite.png" alt="An image from homestarrunner.com depicting Homestar Runner saying 'This is a website'." id="stupidImage">
    <p><button id="vizButton" onclick="viz();">Click Here!</button></p>
    <p>Is this webpage professional? Does it seem weird? The answer to these questions is simple.</p>
    <p><button id="pain" onclick="viz2();">Click here to find out!</button></p>
    <div id="glitter">
    <a href="https://picasion.com/gl/dZgs/"><img src="https://i.picasion.com/gl/90/dZgs.gif" width="463" height="39" border="0" alt="https://picasion.com/gl/dZgs/" /></a><br /><a href="https://picasion.com/gl/dZgs/">https://picasion.com/gl/dZgs/</a>
    </div>
    <footer>
        <h1><a id="theend">THANKS FOR VISITING</a></h1>
        <h2>And to whoever has to grade this, I'm so sorry. I'll fix it when I feel better.</h2>
        <p><a href="#thebeginning">THE BEGINNING</a></p>
    </footer>
</body>

</html>