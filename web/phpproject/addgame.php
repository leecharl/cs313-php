<?php require 'database.php';?>

<?php
// Start the session
session_start();

// Session variables
$_SESSION['userCheck'] = 1;
$removeGame=false;

if(isset($_GET['add']) == true){
  //date convert
  $gamedate = date("Y-m-d");
  $time = strtotime($gamedate);
  $newformat = date('Y-m-d',$time);

  $title =  $_POST['title'];
  $publisher =   $_POST['publisher'];
  $published_year =   $_POST['yearPublished'];
  $bgg_link =   $_POST['url'];

  $sqlinsert = "INSERT INTO games(title, publisher, published_year, date_added, bgg_link, usersid) 
  VALUES ('$title', '$publisher', $published_year, 
  '$newformat', 
  '$bgg_link', 1);";
  if(mysqli_query($db, $sqlinsert)){
      
  } else{
      echo "ERROR: Could not able to execute $sqlinsert. " . mysqli_error($db);
  }

}




?>
<!-- dump the data from the post -->
<?php 
  //var_dump($_POST);
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
    <div class="fakeimg">
      <form action="insertgame.php" method="post">
        <div class="form-group">
          <label for="title">Game Title: </label>
          <input id="title" class="form-control" type="text" name="title">
        </div>
        <br>
        <div class="form-group">
          <label for="publisher">Publisher: </label>
          <input id="publisher" class="form-control" type="text" name="publisher">
        </div>
        <br>
        <div class="form-group">
          <label for="yearPublished">Year Published: </label>
          <input id="yearPublished" class="form-control" type="number" name="yearPublished">
        </div>
        <br>
        <div class="form-group">
          <label for="url">BGG Link: </label>
          <input id="url" class="form-control" type="text" name="url">
        </div>
        <br>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
