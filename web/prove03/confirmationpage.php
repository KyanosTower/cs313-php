<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>You bought stuff</title>
</head>

<body>
    Items bought:
    <br>
    <?php
    if (isset($_SESSION['Ditto'])) {
        echo $_SESSION["Ditto"] . '<br>';
        unset($_SESSION['Ditto']);
    }
    if (isset($_SESSION['Dice'])) {
        echo $_SESSION["Dice"] . '<br>';
        unset($_SESSION["Dice"]);
    }
    if (isset($_SESSION['Morrowind'])) {
        echo $_SESSION['Morrowind'] . '<br>';
        unset($_SESSION['Morrowind']);
    }
    ?>
    <p>Items will be shipped to:</p>
    <?php
    echo htmlspecialchars($_GET['address']) . ' ' .
        htmlspecialchars($_GET['city']) . ', ' .
        htmlspecialchars($_GET['state']) . ', ' .
        htmlspecialchars($_GET['zip']) . '<br>';
    ?>

    <a href="browse.php">Back to store</a>
</body>

</html>