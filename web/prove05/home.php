<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homepage</title>
</head>

<body style="text-align: center;">
    <h1>Pick a table to look at please.</h1>
    <p>But first, enter a name.</p>
    <a href="https://dry-depths-02343.herokuapp.com/prove05/character.php">Character</a>
    <form action="character.php" method="POST">
        <input type="text" name="name" value="For character, enter here." />
        <input type="submit" />
    </form>
    <a href="https://dry-depths-02343.herokuapp.com/prove05/geographic.php">Geographic</a>
    <form action="geographic.php" method="POST">
        <input type="text" name="name" value="For geographic, enter here." />
        <input type="submit" />
    </form>

</body>

</html>