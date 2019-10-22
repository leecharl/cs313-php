<?php include 'debug.php';?>
<?php
// Start the session
session_start();

// Session variables
$_SESSION['userCheck'] = 1;
$removeGame=false;

?>


<?php include 'database.php';?>


<?php 

// $deletedID = $_GET['gameID'];
// echo $deletedID;
// $sql ="DELETE FROM game_played WHERE gameID = $deletedID";
//     $sql ="DELETE FROM games WHERE gameID = $deletedID";
// if(mysqli_query($db, $sql)){
//     echo "Records Deleted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
// }

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
     Delete stuff
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
