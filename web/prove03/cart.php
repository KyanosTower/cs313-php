<?php
if (!isset($_SESSION)) { session_start(); }

echo '<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
</head>
<body>';

echo 'Your Cart Contains:<br><br>';
if(isset($_SESSION['Ditto'])){
  echo $_SESSION["Ditto"];
  echo "<form action='' method='post' id='DittoForm'>
  <input type='hidden' value='Ditto' name='Ditto'>
  <button class='btn' type='submit' form='DittoForm' value='Ditto'>Remove from cart</button>
  </form>";
  if(isset($_POST['Ditto'])){
    unset($_SESSION['Ditto']);
    echo "<meta http-equiv='refresh' content='0'>";
}
}
if(isset($_SESSION['Dice'])){
  echo $_SESSION["Dice"];
  echo "<form action='' method='post' id='DiceForm'>
  <input type='hidden' value='Dice' name='Dice'>
  <button class='btn' type='submit' form='DiceForm' value='Dice'>Remove from cart</button>
  </form>";
  if(isset($_POST['Dice'])){
    unset($_SESSION['Dice']);
    echo "<meta http-equiv='refresh' content='0'>";
  }
}
if(isset($_SESSION['Morrowind'])){
  echo $_SESSION['Morrowind'];
  echo "<form action='' method='post' id='MorrowindForm'>
  <input type='hidden' value='Sting' name='Morrowind'>
  <button class='btn' type='submit' form='MorrowindForm' value='Morrowind'>Remove from cart</button>
  </form>";
  if(isset($_POST['Morrowind'])){
    unset($_SESSION['Morrowind']);
    echo "<meta http-equiv='refresh' content='0'>";
  }
}

echo '<br>' . '<a href="index.php"><- Back to store</a>';
echo '<br><br>' . '<a href="checkout.php">Checkout -></a>';

echo '</body></html>';
