<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Aaron's Board Game Bonanza</title>
        <meta name="description" content="Aaron's Board Game Bonanza">

        <link rel="stylesheet" href="css/master.css">
        <script src="js/master.js"></script>

    </head>

    <body>
    <?php include 'header.php';?>
    


<section>
<?php include 'nav.php';?>
 
  
  
  <article>
    <h1>Five Tribes</h1>
      <div class="container">
        <img src="images/fiveTribes.jpg"alt="Five Tribes" class="image">
        <div class="overlay">
          <div class="text"><a href="assignments.php">Learn More</a></div>
        </div>
      </div>
      <?php 
      
      $list = array(0 => 17, 1 => 42);

?>
    <p>Crossing into the Land of 1001 Nights, your caravan arrives at the fabled Sultanate of Naqala.<br><br>
    The old sultan just died and control of Naqala is up for grabs!<br><br>    
    The oracles foretold of strangers who would maneuver the Five Tribes to gain influence over the legendary city-state.<br><br>    
    Will you fulfill the prophecy? Invoke the old Djinns, move the Tribes into position at the right time and the Sultanate
    may become yours!</p><br><br>

     <h1>Terraforming Mars</h1>
     <div class="container">
        <img src="images/tMars.jpg"alt="Terraforming Mars" class="image">
        <div class="overlay">
          <div class="text"><a href="assignments.php">Learn More</a></div>
        </div>
      </div>
    <p>In the 2400s, mankind begins to terraform the planet Mars. Giant corporations, sponsored by the World Government on Earth, initiate huge projects to raise the temperature, the oxygen level, and the ocean coverage until the environment is habitable. InTerraforming Mars, you play one of those corporations and work together in the terraforming process, but compete for getting victory points that are awarded not only for your contribution to the terraforming, but also for advancing human infrastructure throughout the solar system, and doing other commendable things.</p>
  </article>
</section>

<?php include 'footer.php';?>



</body>
</html>