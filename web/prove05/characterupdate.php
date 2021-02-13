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
    <title>Character Update Page</title>
</head>

<body style="text-align: center;">
    <a href="https://picasion.com/gl/e7Ap/"><img src="https://i.picasion.com/gl/90/e7Ap.gif" width="419" height="36" border="0" alt="glitter maker" /></a><br /><a href="https://picasion.com/gl/e7Ap/">glitter maker</a>
    <form id="displayData">
        <?php
        $row = $_POST['row'];
        $change = $_POST['change'];
        $name = $_POST['nameUpdate'];
        if ($row == 'level' || $row == 'Level') {
            $statementUpdate = $db->prepare('UPDATE character SET level=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
            }
        }
        if ($row == 'height' || $row == 'Height') {
            $statementUpdate = $db->prepare('UPDATE character SET height=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
            }
        }
        if ($row == 'weight' || $row == 'Weight') {
            $statementUpdate = $db->prepare('UPDATE character SET weight=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
            }
        }
        if ($row == 'class' || $row == 'Class') {
            $statementUpdate = $db->prepare('UPDATE character SET class=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
            }
        }
        if ($row == 'age' || $row == 'Age') {
            $statementUpdate = $db->prepare('UPDATE character SET age=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE name = :name');
            $statement->bindValue(':name', $name);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
            }
        }
        if ($row == 'name' || $row == 'Name') {
            $statementUpdate = $db->prepare('UPDATE character SET name=:change WHERE name=:name');
            $statementUpdate->bindValue(':change', $change);
            $statementUpdate->bindValue(':name', $name);
            $statementUpdate->execute();

            $statementGet = $db->prepare('SELECT class, age FROM character WHERE name=:name');
            $statementGet->bindValue(':name', $change);
            $statementGet->execute();
            $row = $statementGet->fetch(PDO::FETCH_ASSOC);
            $class = $row['class'];
            $age = $row['age'];

            echo "Values are now:";
            $statement = $db->prepare('SELECT name, class, height, weight, age, level FROM character WHERE age=:age AND class=:class');
            $statement->bindValue(':class', $class);
            $statement->bindValue(':age', $age);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo 'Name: ' . $row['name'] . '<br/>';
                echo 'Class: ' . $row['class'] . '<br/>';
                echo 'Height (ft): ' . $row['height'] . '<br/>';
                echo 'Weight (lbs): ' . $row['weight'] . '<br/>';
                echo 'Age: ' . $row['age'] . '<br/>';
                echo 'Level: ' . $row['level'];
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