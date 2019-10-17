<?php
$sesuserID = $_SESSION['userCheck'];


?>
    
<h2>Your Games</h2>

    
<div class="fakeimg">
  <?php 
    $sql = "SELECT gameid, title FROM games where usersid = 1 order by title asc";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc())
    {
    //   echo "<h3>". "<a href='index.php?gameID=" . $row['gameid'] . "'>" . $row['title'] . "</a>";
    //   echo " (" . "<a href='deletegame.php?removeGame=True&gameID=" . $row['gameid'] . "'>" . "-" . "</a>" . ")" ;
    //   echo " (" . "<a href='addplay.php?gameID=" . $row['gameid'] . "'>" . "+" . "</a>" . ")" .  "</h3>";

    //   $idrow =  $row['gameid'];
    //   $totalquery = "SELECT count(*) as totalPlayed FROM game_played where gameid =  $idrow";
    //   $resulttotal = $db->query($totalquery);
    //   while ($totalrow = $resulttotal->fetch_assoc())
    //   {
    //     echo "Total Plays: " . $totalrow['totalPlayed'] . "<br>";
    //   }
    }


  ?>
</div><br>