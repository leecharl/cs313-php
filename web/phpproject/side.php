<?php
$sesuserID = $_SESSION['userCheck'];


?>
    
<h2>Your Games</h2>

    
<div class="fakeimg">
  <table>
    <tr>
      <th>Game</th>
      <th>Delete Game</th>
      <th>Add Play</th>
      <th>Total Plays</th>
    </tr>
 
  <?php 

    $statement = $db->query('SELECT gameid, title FROM games where usersid = 1 order by title asc');
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      echo "<tr>";
      echo "<td>". "<a href='index.php?gameID=" . $row['gameid'] . "'>" . $row['title'] . "</a>" . "</td>";
      echo "<td>"." (" . "<a href='deletegame.php?removeGame=True&gameID=" . $row['gameid'] . "'>" . "-" . "</a>" . ")" . "</td>";
      echo "<td>"." (" . "<a href='addplay.php?gameID=" . $row['gameid'] . "'>" . "+" . "</a>" . ")" . "</td>";
      echo "<td></td>";
      echo "</tr>";

      //$idrow =  $row['gameid'];
     // $stmt = $db->query("SELECT count(*) as totalPlayed FROM game_played where gameid = 8");
      //$stmt->execute(['id' => $idrow]); 
     // $user = $stmt->fetch();
     // echo "total plays: " . $user['totalPlayed'];
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

</table>
</div><br>