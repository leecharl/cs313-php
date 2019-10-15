<?php
$sesuserID = $_SESSION['userCheck'];


?>
    
    
    
    
    <h2>Your Games</h2>
    <?php
  

  ?>
    
    <div class="fakeimg">
        <?php 
        /*
foreach ($db->query("SELECT * FROM games where usersID = $sesuserID") as $row)
{
  $gameIDloop = $row['gameID'];
  $res = "SELECT count(*) as totalPlayed FROM game_played where gameID = $gameIDloop";
  $result = $db->query($res);
  

  echo '<h3>' . "<a href='index.php?gameID=" . $row['gameID'] . "'>" . $row['title'] . "</a>"; 
  echo " (" . "<a href='index.php?removeGame=True&gameID=" . $row['gameID'] . "'>" . "-" . "</a>" . ")";  
  echo "</h3>";
  while($row = $result->fetch_array()){
    echo "Total Plays: " . $row['totalPlayed'] . "<br>";
  }
  echo ' BGG link: <a href="'. $row["bgg_link"]. '">Board Game Geek Link</a>';
  echo '<br/><br>';
}
*/
        ?>
    </div><br>