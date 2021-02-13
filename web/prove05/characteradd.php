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
    <title>Character Add Page</title>
</head>

<body style="text-align: center;">
    <a href="https://picasion.com/gl/e7Ap/"><img src="https://i.picasion.com/gl/90/e7Ap.gif" width="419" height="36" border="0" alt="glitter maker" /></a><br /><a href="https://picasion.com/gl/e7Ap/">glitter maker</a>
    <form id="displayData">
        <?php
        $name = $_POST['nameAdd'];
        $class = $_POST['classAdd'];
        $height = $_POST['heightAdd'];
        $weight = $_POST['weightAdd'];
        $age = $_POST['ageAdd'];
        $level = $_POST['levelAdd'];
        $statementInsert = $db->prepare('INSERT INTO character(
            name,
            class,
            height,
            weight,
            age,
            level
        )
        VALUES(
            :name,
            :class,
            :height,
            :weight,
            :age,
            :level	
        )');
        $statementInsert->bindValue(':name', $name);
        $statementInsert->bindValue(':class', $class);
        $statementInsert->bindValue(':height', $height);
        $statementInsert->bindValue(':weight', $weight);
        $statementInsert->bindValue(':age', $age);
        $statementInsert->bindValue(':level', $level);
        $statementInsert->execute();
        echo "w";
        echo "Values added are:";
        $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
        $statement->bindValue(':name', $name);
        $statement->execute();
        echo "w";
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<br>' . 'Name: ' . $row['name'] . '<br/>';
            echo 'Class: ' . $row['class'] . '<br/>';
            echo 'Height (ft): ' . $row['height'] . '<br/>';
            echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
            echo 'Age: ' . $row['age'] . '<br/>';
            echo 'Level: ' . $row['level'];
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