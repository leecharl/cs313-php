<pre>
<?php var_dump($_POST);?>
</pre>

<?php include 'debug.php';?>
<?php
    $title = htmlspecialchars($_POST['title']);
    $publisher = htmlspecialchars($_POST['publisher']);
    $yearPublished = $_POST['yearPublished'];
    $url = htmlspecialchars($_POST['url']);

    require('database.php');

    $db = getDB();

    $stmt = $db->prepare('INSERT INTO games(title, publisher, published_year, date_added, bgg_link, usersid) 
                        VALUES (:title, :publisher, :published_year, now(), :url, 1 ;');
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);
    $stmt->bindValue(':yearPublished', $yearPublished, PDO::PARAM_INT);
    $stmt->bindValue(':url', $url, PDO::PARAM_STR);

    $stmt->execute();
    $new_page = "index.php";
    header("Location: $new_page");
    die();
?>

