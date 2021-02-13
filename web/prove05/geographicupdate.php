<!DOCTYPE html>

<?php
try {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"], '/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="javascript.js"></script>
    <title>Geographic Add Page</title>
</head>

<body style="text-align: center;">
    <a href="https://picasion.com/gl/e7Ap/"><img src="https://i.picasion.com/gl/90/e7Ap.gif" width="419" height="36" border="0" alt="glitter maker" /></a><br /><a href="https://picasion.com/gl/e7Ap/">glitter maker</a>
    <form id="displayData">
        <?php
        $row = $_POST['row'];
        $change = $_POST['change'];
        $name = $_POST['nameUpdate'];
        if ($row == 'origin' || $row == 'Origin') {
            $statementUpdate = $db->prepare('UPDATE geographic SET origin=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, origin, currentlocation FROM geographic WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<br>' . 'Name: ' . $row['name'] . '<br/>';
                echo 'Origin: ' . $row['origin'] . '<br/>';
                echo 'Current Location: ' . $row['currentlocation'];
            }
        }
        if ($row == 'currentLocation' || $row == 'Current Location' || $row == 'current location') {
            $statementUpdate = $db->prepare('UPDATE geographic SET currentLocation=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, origin, currentlocation FROM geographic WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<br>' . 'Name: ' . $row['name'] . '<br/>';
                echo 'Origin: ' . $row['origin'] . '<br/>';
                echo 'Current Location: ' . $row['currentlocation'];
            }
        }
        if ($row == 'name' || $row == 'Name') {
            $statementUpdate = $db->prepare('UPDATE geographic SET name=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            $statementGet = $db->prepare('SELECT origin, currentlocation FROM geographic WHERE name=:name');
            $statementGet->bindValue(':name', $name);
            $statementGet->execute();
            $row = $statementGet->fetch(PDO::FETCH_ASSOC);
            $origin = $row['origin'];
            $currentLocation = $row['currentLocation'];

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, origin, currentlocation FROM geographic WHERE currentLocation=:currentLocation AND origin=:origin');
            $statement->bindValue(':origin', $origin);
            $statement->bindValue(':currentLocation', $currentLocation);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<br>' . 'Name: ' . $row['name'] . '<br/>';
                echo 'Origin: ' . $row['origin'] . '<br/>';
                echo 'Current Location: ' . $row['currentlocation'];
            }
        }
        ?>
    </form>
    <footer>
        <p>
            <a href="https://dry-depths-02343.herokuapp.com/prove05/home.php">Click here to return to the Homepage.</a>
        </p>
    </footer>
</body>

</html>