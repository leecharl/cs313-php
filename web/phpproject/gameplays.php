<?php require('database.php');?>

<?php
// Start the session
session_start();

// Session variables

$_SESSION['userCheck'] = 1;

?>
<!-- dump the data from the post -->
<?php 
  //var_dump($_POST);


  error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Gameplays</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/css/wk3.css">
<script src="/js/project.js"></script>

<!-- for the date picker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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
      <?php

        //get name of game
        $gameid = $_GET["gameID"];
        $db1 = getDB();
        $query = $db1->prepare('SELECT title from games where gameid = :gameid');
        $query->execute(array(":gameid" => $gameid));
        $rows = $query->fetchALL(PDO::FETCH_ASSOC);

        echo "<strong>Game Plays for: ";
        foreach($rows as $row) 
        {

            echo $row["title"];
        }
        echo "</strong><br>";



        //get dates of plays
        $db = getDB();
        $query = $db->prepare('SELECT g.*, 
        to_char(game_played_date, "MM/DD/YY") as game_played_date
        FROM games g 
        Inner JOIN game_played gp 
        on g.gameID = gp.gameID
        where g.gameID = :gameid
        order by game_played_date desc;');
        $query->execute(array(":gameid" => $gameid));
        $rows = $query->fetchALL(PDO::FETCH_ASSOC);

        foreach($rows as $row) 
        {
            echo "<div>" . $row["game_played_date"] . "</div>" . "<br>";
        }

      ?>

       




      </div>
    
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
