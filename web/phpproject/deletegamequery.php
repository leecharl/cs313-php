<pre>
<?php var_dump($_POST);?>
</pre>

<?php include 'debug.php';?>
<?php
    $game_id = htmlspecialchars($_POST["gameID"]);
   


    require('database.php');

    $db = getDB();

    $stmt = $db->prepare('DELETE FROM game_played WHERE gameid = :game_id;');
    $stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt = $db->prepare('DELETE FROM games WHERE gameid = :game_id;');
    $stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
    $stmt->execute();
    $new_page = "index.php";
    header("Location: $new_page");
    die();
?>
