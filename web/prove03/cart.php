<?php
session_start();
?>

<!DOCTYPE html>

<body>
    <p>You have the following items in your cart.</p>
    <?php
    if (isset([$cart1])) {
        echo "?";
    }
    if ($_GET["box2"] == "Dice") {
        echo $_GET["cart2"];
    }
    if ($_GET["box3"] == "A used copy of The Elder Scrolls: Morrowind") {
        echo $_GET["cart3"];
    }
    ?>
    <p>Did you change your mind? Remove stuff.</p>
    Ditto Plush
    <input type="checkbox" name="uncheck1" value="noDitto" />
    <br>Dice
    <input type="checkbox" name="uncheck2" value="noDice" />
    <br>A used copy of The Elder Scrolls: Morrowind
    <input type="checkbox" name="uncheck3" value="noMorrowind" />
    <a href="browse.php">Return to browse</a>
</body>

</html>