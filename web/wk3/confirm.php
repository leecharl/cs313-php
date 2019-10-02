<?php
// Start the session
session_start();
?>

<?php 
$_SESSION["name"] = $_POST['name'];
$_SESSION["address"] = $_POST['address'];;
$_SESSION["city"] = $_POST['city'];;
$_SESSION["state"] = $_POST['state'];;
$_SESSION["zip"] = $_POST['zip'];;
?>


<!DOCTYPE html>
<html>
<head>
<title>Buy More Board Games</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="/css/wk3.css">
<script src="/js/wk3.js"></script>

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
    <div class="fakeimg">


    <p><h2>Thank you <?php echo $_SESSION['name'];?></h2>
        Your order of:
        <?php
            if (isset( $_SESSION["game1Name"]) && !is_null($_SESSION["game1Name"])){
                echo $_SESSION["game1Name"] . " $" . $_SESSION["game1Price"] . "<br>";
            }
            if (isset( $_SESSION["game2Name"]) && !is_null($_SESSION["game2Name"])){
                echo $_SESSION["game2Name"] . " $" . $_SESSION["game2Price"] . "<br>";
            }
        ?>
        <br>
        Your total is: <?php echo "$". $_SESSION["cartTotal"];?><br><br>

        Your order will be shipped to:<br>
        <?php
            echo $_SESSION['name'] . "<br>". $_SESSION['address'] . "<br>". $_SESSION['city'] . ", ". $_SESSION['state'] . " ".  $_SESSION['zip']
        ?>
    </p>





        
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>



