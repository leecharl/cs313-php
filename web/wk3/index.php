<?php
// Start the session
session_start();

// Session variables
if (!isset( $_SESSION["game1Name"])){
$_SESSION["game1Name"] = null;
$_SESSION["game1Price"] = null;
}

if (!isset( $_SESSION["game2Name"])){
$_SESSION["game2Name"] = null;
$_SESSION["game2Price"] = null;
}
$_SESSION["cartTotal"] = 0;
$_SESSION["hasCart"] = null;

$_SESSION["name"] = '';
$_SESSION["address"] = '';
$_SESSION["city"] = '';
$_SESSION["state"] = '';
$_SESSION["zip"] = '';
?>

<?php 
  $gameid = 0; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Buy More Board Games</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/css/wk3.css">
<script src="/js/wk3.js"></script>



<?php
 
  if (isset($_GET['addgame1'])) {
    $_SESSION["game1Name"] = "Marvel Champions";
    $_SESSION["game1Price"] = 50.99;
    $_SESSION["hasCart"] = 1;
  }
  if (isset($_GET['addgame2'])) {
    // runMyFunction("Thunderstone Quest", 56.99);
    $_SESSION["game2Name"] = "Thunderstone Quest";
    $_SESSION["game2Price"] = 56.99;
    $_SESSION["hasCart"] = 1;
  }
?>



</head>
<body>

<!-- Header -->
<div class="header">
  <h1>Buy More Board Games</h1>
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
     <?php include 'main.php';?>
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
