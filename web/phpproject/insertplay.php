<pre>
<?php var_dump($_POST);?>
</pre>


<?php

$game_id = htmlspecialchars($_POST['gameID']);
$game_played_date = $_POST['game_played_date'];
$time = strtotime($game_played_date);
$newformat = date('Y-m-d',$time);


echo "debug stuff <br>";
echo $newformat . "<br>";
echo $game_id . "<br>";


require('database.php');

$db = get_db();

$stmt = $db->prepare('INSERT INTO game_played(game_played_date, usersid, gameid) VALUES (:newformat, 1, :game_id);');
$stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
$stmt->bindValue(':newformat', $newformat, PDO::PARAM_STR);
$stmt->execute();
$new_page = "addplay.php?gameID=$game_id";
header("Location: $new_page");
die();
?>

