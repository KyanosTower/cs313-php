<!DOCTYPE html>
<?php
    try
    {
      $dbUrl = getenv('DATABASE_URL');
    
      $dbOpts = parse_url($dbUrl);
    
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
    
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="javascript.js"></script>
    <title>Character Page</title>
</head>

<body style="text-align: center;">
    <h1>You have two options, pick one.</h1>
        <button id = "buttonM" onclick="mapheButton()">Maphe</button>
            <form id="mapheH" style="visibility:hidden">
                <?php
                    $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
                    $statement->bindValue(':name', 'Maphe'); 
                    $statement->execute();
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                    {
                      echo 'Name: ' . $row['name'] . '<br/>'; 
                      echo 'Class: ' . $row['class'] . '<br/>';
                      echo 'Height (ft): ' . $row['height'] . '<br/>';
                      echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                      echo 'Age: ' . $row['age'] . '<br/>';
                      echo 'Level: ' . $row['level'];
                    }
                ?>
            </form>
        <button id = "buttonB" onclick="brytonButton()">Bryton</button>
    <footer>
        <p>
            <a href="https://dry-depths-02343.herokuapp.com/prove05/home.php">Click here to return to the Homepage.</a>
        </p>
    </footer>
</body>

</html>