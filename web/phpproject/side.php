<?php
$sesuserID = $_SESSION['userCheck'];


?>
    
<h2>Your Games</h2>

    
<div class="fakeimg">
  <?php 


    foreach ($db->query("SELECT * FROM games where usersid = 1 order by title asc") as $row)
    {
       $gameIDloop = $row['gameid'];
      //  $res = "SELECT count(*) as totalPlayed FROM game_played where gameid = $gameIDloop";
      //  $result = $db->query($res);
      

      echo '<h3>' . "<a href='index.php?gameID=" . $gameIDloop . "'>" . $row['title'] . "</a>"; 
      echo " (" . "<a href='index.php?removeGame=True&gameID=" . $gameIDloop. "'>" . "-" . "</a>" . ")";  
      echo "</h3>";
      // while($row2 = $result->fetch_array())
      //   {
      //     echo "Total Plays: " . $row2['totalPlayed'] . "<br>";
      //   }

      echo ' BGG link: <a href="'. $row["bgg_link"]. '">Board Game Geek Link</a>';
      echo '<br/><br>';
    }
  ?>
</div><br>