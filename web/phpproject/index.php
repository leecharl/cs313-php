<?php require('database.php');?>
<?php
// Start the session
session_start();

// Session variables
$_SESSION['userCheck'] = 1;
$removeGame=false;


if(isset($_GET['gameadded']))
{
  $addedtitle = $_GET['gameadded'];
}else
  $addedtitle = '';  
?>



<!DOCTYPE html>
<html>
<head>
<title>Your Gameplays</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/css/wk3.css">
<script src="/js/project.js"></script>



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

<div class="row">
  <!-- Left Side -->
  <div class="side">
    <?php include 'side.php';?>
  </div>

  <!-- Main Section -->
  <div class="main">
    <div class="fakeimg">
      
      <?php 
      if(strlen($addedtitle) > 1){
        echo $addedtitle . " has been added";
      }
      if(isset($_GET['removeGame']) == true){
        include 'deletegame.php';
       }else{
           include 'main.php';
       }
      
    
      
      ?>
     </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
