<pre>
<?php var_dump($_POST);?>
</pre>

<?php include 'debug.php';?>
<?php
    $title = htmlspecialchars($_POST["title"]);
    $gameid = htmlspecialchars($_POST["gameid"]);

    require('database.php');
   

    $db = getDB();

    $stmt1 = $db->prepare('UPDATE games set title = :title where gameid = :gameid;');
    $stmt1->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt1->bindValue(':gameid', $gameid, PDO::PARAM_STR);

    $stmt1->execute();
    $new_page = "index.php";
    header("Location: $new_page");
    die();
?>

