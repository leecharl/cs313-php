<?php require('database.php');?>

<?php
// Start the session
session_start();

// Session variables

$_SESSION['userCheck'] = 1;



if(isset($_GET['add']) == true){

  //convert x/x/x date to x-x-x
  $game_played_date = $_POST['game_played_date'];
  $time = strtotime($game_played_date);
  $newformat = date('Y-m-d',$time);


  $gameid = $_POST['gameID'];

  $sqlinsert = "INSERT INTO game_played (game_played_date, usersid, gameid, game_played_notes) VALUES ('$newformat', 1, $gameid, '')";
  if(mysqli_query($db, $sqlinsert)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sqlinsert. " . mysqli_error($db);
  }
}


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

          echo "<strong>Add a play for: ";
          foreach($rows as $row) 
          {

            echo $row["title"];
          }
          echo "</strong><br>";

      
        // $sql = "SELECT gameid, title FROM games where gameid = $game_played_id";
        // $result = $db->query($sql);
        // echo "<strong>Add a play for: ";
        // while ($row = $result->fetch_assoc())
        // { 
        //   echo $row['title'];
        // }
        // echo "</strong><br>";
      ?>






        <form method="post" action="addplay.php?add=true">
        
        <p>Date: <input type="text" id="datepicker" name="game_played_date"></p>
        <input type="hidden" name="gameID" value="<?php echo $game_played_id;?>">
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
