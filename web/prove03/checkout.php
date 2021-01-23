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
    <title>Checkout</title>
</head>

<body>
    <div class="container">
        <h3 class='text-center'>What's your address</h3>
        <form action="confirmationpage.php" method='get'>
            <div class="row">
                <div class="col">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr" name="address" placeholder="Street Name">
                </div>
                <div class="col">
                    <label for="city"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" name="city" placeholder="City">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" placeholder="ST">
                </div>
                <div class="col">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" placeholder="11111">
                </div>
            </div>
            <input type='submit' value='Checkout' class='btn'>
        </form>
        <a href="cart.php">Return to Cart</a>
    </div>
</body>

</html>