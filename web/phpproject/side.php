<?php
$sesuserID = $_SESSION['userCheck'];


?>
    
<h2>Your Games</h2>

    
<div class="fakeimg">
  <?php 

    $statement = $db->query('SELECT gameid, title FROM games where usersid = 1 order by title asc');
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      echo "<h3>". "<a href='index.php?gameID=" . $row['gameid'] . "'>" . $row['title'] . "</a>";
      echo " (" . "<a href='deletegame.php?removeGame=True&gameID=" . $row['gameid'] . "'>" . "-" . "</a>" . ")" ;
      echo " (" . "<a href='addplay.php?gameID=" . $row['gameid'] . "'>" . "+" . "</a>" . ")" .  "</h3>";

      //$idrow =  $row['gameid'];
      $stmt = $db->query("SELECT count(*) as totalPlayed FROM game_played where gameid = 8");
      $stmt->execute(['id' => $idrow]); 

      // while ($row2 = $stmt->fetch()) {
      //   echo "Total Plays: " . $row2['totalPlayed'] . "<br>";
      // }


      // $totalquery = "SELECT count(*) as totalPlayed FROM game_played where gameid =  $idrow";
      // $resulttotal = $db->query($totalquery);

      //$totalquery = $db->query('SELECT count(*) as totalPlayed FROM game_played where gameid =  :idrow');
      // while ($row2 = $totalquery->fetch(PDO::FETCH_ASSOC))

      // //while ($totalrow = $resulttotal->fetch_assoc())
      // {
      //   echo "Total Plays: " . $row2['totalPlayed'] . "<br>";
      // }
    }


  ?>
</div><br>