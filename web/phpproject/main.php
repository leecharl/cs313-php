<?php
$showGames = false;
if (isset($_GET['gameID'])) {
    $showGames = True;
    $gameID = $_GET['gameID'];
}

?>






<div class="fakeimg">
    <?php
        if($showGames){
            foreach ($db->query("SELECT title, gameid from games where gameid = $gameID") as $titleRow)
            {
               echo "<strong>" . $titleRow['title'] . "</strong>" . " ";
               
  echo  "<a href='editgame.php?gameID=" . $titleRow['gameid'] . "'>" . "Edit Game" . "</a><br><br>";

            }
            foreach ($db->query("SELECT g.*, 
                                date_format(gp.game_played_date, '%m/%d/%Y') as game_played_date
                                FROM games g 
                                Inner JOIN game_played gp 
                                on g.gameID = gp.gameID
                                where g.gameID = $gameID
                                order by game_played_date desc") as $row)
            {
                echo "<div>" . $row['game_played_date'] . "</div>" . "<br>";
            }
        }
    ?>




</div>
<br>


