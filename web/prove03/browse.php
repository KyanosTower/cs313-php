<?php
session_start();
?>
<!DOCTYPE html>

<head>

</head>

<body>
    <h1>All items are $15. Not a cent more, not a cent less. It's $15. Choose.</h1>
    <form action="cart.php" method="GET">
        Ditto Plush
        <input type="checkbox" name="box1" value="Ditto Plush" />
        <br>
        Dice
        <input type="checkbox" name="box2" value="Dice" />
        <br>
        A used copy of The Elder Scrolls: Morrowind
        <input type="checkbox" name="box3" value="A used copy of The Elder Scrolls: Morrowind" />
    </form>
    <br>
    <a href="cart.php">Check Cart</a>
    <br>
    <a href="checkout.php">Checkout</a>
    <?php
    if ($_GET["box1"] == "Ditto Plush") {
        $_SESSION["cart1"] = "Ditto Plush";
    }
    if ($_GET["box2"] == "Dice") {
        $_SESSION["cart2"] = "Dice";
    }
    if ($_GET["box3"] == "A used copy of The Elder Scrolls: Morrowind") {
        $_SESSION["cart3"] = "A used copy of The Elder Scrolls: Morrowind";
    }
    ?>
</body>

</html>