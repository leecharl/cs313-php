<pre>
<?php var_dump($_POST);?>
</pre>

<?php include 'debug.php';?>
<?php
    $title = htmlspecialchars($_POST["title"]);
    $publisher = htmlspecialchars($_POST["publisher"]);
    $bgg_link = htmlspecialchars($_POST["url"]);
    $gamedate = date("Y-m-d");

    require('database.php');
    echo $title. "<br>";
    echo $publisher. "<br>";
    echo $bgg_link. "<br>";

    $db = getDB();

    $stmt1 = $db->prepare('INSERT INTO games(title, publisher, date_added, bgg_link, usersid) 
    VALUES (:title, :publisher, :gamedate, :bgg_link, 1;');
    $stmt1->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt1->bindValue(':publisher', $publisher, PDO::PARAM_STR);
    $stmt1->bindValue(':gamedate', $gamedate, PDO::PARAM_STR);
    $stmt1->bindValue(':bgg_link', $bgg_link, PDO::PARAM_STR);

    $stmt1->execute();
    $new_page = "index.php";
    header("Location: $new_page");
    die();
?>

