<?php var_dump($_POST);

echo "<br><br><br>";

$title =  $_POST['title'];
$publisher =   $_POST['publisher'];
$published_year =   $_POST['yearPublished'];
$bgg_link =   $_POST['url'];

// echo $title . $publisher . $published_year . $bgg_link;
// echo "<br><br><br>";

$sql ="INSERT INTO games(title, publisher, published_year, date_added, bgg_link, usersID) 
VALUES ('$title', '$publisher', $published_year, now(), '$bgg_link', 1)";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

?>