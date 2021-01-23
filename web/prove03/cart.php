<?php
session_start();
?>

<!DOCTYPE html>

<body>
    <p>You have the following items in your cart.</p>
    <?php
    if (isset($_SESSION['cart1'])) {
        echo $_SESSION["cart1"];
        echo "<form action='' method='post' id='AndurilForm'>
        <input type='hidden' value='Anduril' name='Anduril'>
        <button class='btn' type='submit' form='AndurilForm' value='Anduril'>Remove from cart</button>
        </form>";
        if (isset($_POST['box1'])) {
            unset($_SESSION['cart1']);
            echo "<meta http-equiv='refresh' content='0'>"; //from https://stackoverflow.com/questions/10643626/refresh-page-after-form-submitting
        }
    }
    if (isset($_SESSION['cart2'])) {
        echo $_SESSION["cart2"];
        echo "<form action='' method='post' id='GlamdringForm'>
        <input type='hidden' value='Glamdring' name='Glamdring'>
        <button class='btn' type='submit' form='GlamdringForm' value='Glamdring'>Remove from cart</button>
        </form>";
        if (isset($_POST['box2'])) {
            unset($_SESSION['cart2']);
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
    if (isset($_SESSION['cart3'])) {
        echo $_SESSION['cart3'];
        echo "<form action='' method='post' id='StingForm'>
        <input type='hidden' value='Sting' name='Sting'>
        <button class='btn' type='submit' form='StingForm' value='Sting'>Remove from cart</button>
        </form>";
        if (isset($_POST['box3'])) {
            unset($_SESSION['cart3']);
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
    ?>
    <a href="browse.php">Return to browse</a>
</body>

</html>