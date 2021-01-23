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
    <title>Store</title>
</head>

<body>
    <h1 class="text-center">All items are $15. Not a cent more, not a cent less. It's $15. Choose.</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Ditto Plush</p>
                <form action='' method='post' id='DittoForm'>
                    <input type='hidden' value='Ditto' name='Ditto'>
                    <button class='btn' type='submit' form='DittoForm'>Add to cart</button>
                </form>
            </div>
            <div class="col">
                <p>Dice</p>
                <form action='' method='post' id='DiceForm'>
                    <input type='hidden' value='Dice' name='Dice'>
                    <button class='btn' type='submit' form='DiceForm'>Add to cart</button>
                </form>
            </div>
            <div class="col">
                <p>A used copy of The Elder Scrolls: Morrowind</p>
                <form action='' method='post' id='MorrowindForm'>
                    <input type='hidden' value='A used copy of The Elder Scrolls: Morrowind' name='Morrowind'>
                    <button class='btn' type='submit' form='MorrowindForm'>Add to cart</button>
                </form>
            </div>
            <br>
            <span class="float-right">
                <form action="cart.php" method='GET'>
                    <input type="submit" value="Cart" class='btn-success' />
                </form>
            </span>
</body>

</html>
<?php
if (isset($_POST['Ditto'])) {
    $_SESSION["Ditto"] = $_POST['Ditto'];
}
if (isset($_POST['Dice'])) {
    $_SESSION["Dice"] = $_POST['Dice'];
}
if (isset($_POST['Morrowind'])) {
    $_SESSION["Morrowind"] = $_POST['Morrowind'];
}
?>