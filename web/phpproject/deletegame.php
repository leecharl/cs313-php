<?php require('database.php');?>
<?php include 'debug.php';?>
<?php
// Start the session
session_start();

// Session variables

$_SESSION['userCheck'] = 1;



?>
<!-- dump the data from the post -->
<?php 
  //var_dump($_POST);
?>

<?php 
if(isset($_GET['gameID']))
  $game_played_id = $_GET['gameID'];
else
  $game_played_id = $_POST['gameID']
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


        
          $db = getDB();
          $query = $db->prepare('SELECT title from games where gameid = :game_played_id');
          $query->execute(array(":game_played_id" => $game_played_id));
          $rows = $query->fetchALL(PDO::FETCH_ASSOC);

          echo "<strong>Are you sure you want to Delete: ";
          foreach($rows as $row) 
          {

            echo $row["title"];
          }
          echo "</strong><br>";

      ?>

        <form method="post" action="deletegamequery.php">        
          <input type="hidden" name="gameID" value="<?php echo $game_played_id;?>">
          <button type="submit">YES</button><br>
          <a href="index.php">Cancel</a>
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
