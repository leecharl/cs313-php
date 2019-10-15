<?php 

$deletedID = $_GET['gameID'];
echo $deletedID;
$sql ="DELETE FROM game_played WHERE gameID = $deletedID";
    $sql ="DELETE FROM games WHERE gameID = $deletedID";
if(mysqli_query($db, $sql)){
    echo "Records Deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

?>