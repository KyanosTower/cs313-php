<?php
session_start();
?>
<!DOCTYPE html>

<head>

</head>

<body>
    <h1>All items are $15. Not a cent more, not a cent less. It's $15. Choose.</h1>
    <form action="" method="POST" id="ditto">
        <p>Ditto Plush</p>
        <input type="hidden" value="Ditto Plush" name="box1">
        <button type="submit" class="btn" form="DittoForm">Add to Cart</button>
    </form>
    <form action="" method="POST" id="Dice">
        Dice
        <input type="checkbox" name="box2" form="DiceForm" />
    </form>
    <form action="" method="POST" id="morrowind">
        A used copy of The Elder Scrolls: Morrowind
        <input type="checkbox" name="box3" form="MorrowindForm" />
    </form>
    <br>
    <a href="cart.php">Check Cart</a>
    <br>
    <a href="checkout.php">Checkout</a>
    <?php
    if (isset($_POST['box1'])) {
        $_SESSION["cart1"] = $_POST['box1'];
    }
    if (isset($_POST['box2'])) {
        $_SESSION["cart2"] = $_POST['box2'];
    }
    if (isset($_POST['box3'])) {
        $_SESSION['cart3'] = $_POST['box3'];
    }
    /*if (isset($_POST['OrcArmor'])) {
            $_SESSION['OrcArmor'] = $_POST['OrcArmor'];
        }
        if (isset($_POST['LegoGandalf'])) {
            $_SESSION['LegoGandalf'] = $_POST['LegoGandalf'];
        }*/
    ?>
</body>

</html>