<?php
// Start the session
session_start();

// Session variables
$_SESSION['userCheck'] = 1;
$removeGame=false;

?>

<?php include 'debug.php';?>
<?php include 'database.php';?>

<?php 
var_dump($_POST);

echo "<br><br><br>";

$title =  $_POST['title'];
$publisher =   $_POST['publisher'];
$published_year =   $_POST['yearPublished'];
$bgg_link =   $_POST['url'];

// echo $title . $publisher . $published_year . $bgg_link;
// echo "<br><br><br>";

$sql ="INSERT INTO games(title, publisher, published_year, date_added, bgg_link, usersid) 
        VALUES ('$title', '$publisher', $published_year, '2019-10-15', '$bgg_link', 1);";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($db);
}

?>

<?php
// Start the session
session_start();

// Session variables


?>

<!DOCTYPE html>
<html>
<head>
<title>Your Gameplays</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/css/wk3.css">
<script src="/js/project.js"></script>



</head>
<body>

<!-- Header -->
<div class="header">
  <h1>Your Game Plays</h1>
</div>

<!-- Navigation Bar -->
<div class="navbar">
    <?php include 'navbar.php';?>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <!-- Left Side -->
  <div class="side">
    <?php include 'side.php';?>
  </div>

  
  <div class="main">
     Insert page
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
