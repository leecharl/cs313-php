<?php
$sesuserID = $_SESSION["userCheck"];
?>
   
<h2>Your Games</h2>
<div class="fakeimg">
<table>
  <tr>
    <th>Game</th>
    <th>Del</th>
    <th>Add Play</th>
    <th>BGG</th>
    <th>Total Plays</th>
  </tr>
 
  <?php 
    $userid = 1;
    $db = getDB();
    $db1 = getDB();
    $query = $db->prepare('SELECT gameid, title, bgg_link FROM games where usersid = :userid order by title asc');
    $query->execute(array(":userid" => $userid));
    $rows = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach($rows as $row) 
    {
    
      echo "<tr>";
      echo "<td>". "<a href='gameplays.php?gameID=" . $row["gameid"] . "'>" . $row["title"] . "</a>" . "</td>";
      echo "<td>"." (" . "<a href='deletegame.php?gameID=" . $row["gameid"] . "'>" . "-" . "</a>" . ")" . "</td>";
      echo "<td>"." (" . "<a href='addplay.php?gameID=" . $row["gameid"] . "'>" . "+" . "</a>" . ")" . "</td>";
      echo "<td>" . "<a href='" . $row["bgg_link"] . "'>Go</a>" . "</td>";
      $idrow =  $row["gameid"];
      
      $playcountquery = $db1->prepare('SELECT count(*) as totalplayed FROM game_played where gameid = :idrow');
      $playcountquery->execute(array(":idrow" => $idrow));
      $rows2 = $playcountquery->fetchALL(PDO::FETCH_ASSOC);
      foreach($rows2 as $row) 
      {
        echo "<td>" . $row["totalplayed"] . "</td>";
      }

      echo "</tr>";
    }
  ?>
  
</table>
</div> 
