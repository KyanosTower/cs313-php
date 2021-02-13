<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="javascript.js"></script>
    <title>Homepage</title>
</head>

<body style="text-align: center;">
    <a href="https://picasion.com/gl/e7As/"><img src="https://i.picasion.com/gl/90/e7As.gif" width="500" height="25" border="0" alt="glitter maker" /></a><br /><a href="https://picasion.com/gl/e7As/">glitter maker</a>
    <p>But first, enter a name.</p>
    <p>Character</p>
    <form action="character.php" method="POST">
        <input type="text" name="name" value="For character, enter here." />
        <input type="submit" />
    </form>
    <p>Geographic</p>
    <form action="geographic.php" method="POST">
        <input type="text" name="name" value="For geographic, enter here." />
        <input type="submit" />
    </form>
    <br>
    <button id="characterAdd" onclick="displayCharacterAdd()">Click here to Add to the Character table.</button>
    <form action="characteradd.php" method="POST" id="characterAddForm" style="visibility: hidden;">
        <input type="text" name="nameAdd" value="Enter Name"/>
        <input type="text" name="classAdd" value="Enter Class"/>
        <br>
        <input type="text" name="heightAdd" value="Enter Height (ft, no inches)"/>
        <input type="text" name="weightAdd" value="Enter Weight (lbs)"/>
        <br>
        <input type="text" name="ageAdd" value="Enter Age"/>
        <input type="text" name="levelAdd" value="Enter Level"/>
        <br>
        <input type="submit"/>
    </form>
    <button id="geographicAdd" onclick="displayGeographicAdd()">To add data to the Geographic table, click here.</button>
    <form action="geographicadd.php" method="POST" id="geographicAddForm" style="visibility: hidden;">
        <input type="text" name="nameAdd" value="Enter Name"/>
        <input type="text" name="originAdd" value="Enter Origin"/>
        <br>
        <input type="text" name="currentLocationAdd" value="Enter Current Location"/>
        <br>
        <input type="submit"/>
    </form>
    <button id="geographicUpdate" onclick="displayGeographicUpdate()">To update data on the Geographic table, click here.</button>
    <form action="geographicupdate.php" method="POST" id="geographicUpdateForm" style="visibility: hidden;">
        <p>What row do you want to change?</p>
        <input type="text" name="row" value="Enter the row you want to change"/>
        <p>What do you want to change it to?</p>
        <input type="text" name="change" value="Enter the new value"/>
        <p>Who do you want to change it for?</p>
        <input type="text" name="nameUpdate" value="Enter the name of the character."/>
        <input type="submit"/>
    </form>
<footer>
    <a href="https://dry-depths-02343.herokuapp.com/prove02/assignments.html">Return to assignments page</a>
</footer>
</body>

</html>