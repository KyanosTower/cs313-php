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
    <title>Geographic Page</title>
</head>

<body style="text-align: center;">
    <h1>Input a name.</h1>
    <form id="getInput" action="" method="get">
        <input type="text" name="nameInput" id="nameInput" value="Enter Name" />
    </form>
    <button name="notHidden" onclick="displayView()">Search</button>
    <form id="displayData" style="visibility:hidden">
        <?php
        $name = $_GET['nameInput'];
        echo $name;
        $statement = $db->prepare('SELECT name, origin, currentlocation FROM geographic WHERE name = :name');
        $statement->bindValue(':name', 'Maphe');
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo 'Name: ' . $row['name'] . '<br/>';
            echo 'Origin: ' . $row['origin'] . '<br/>';
            echo 'Current Location: ' . $row['currentlocation'];
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