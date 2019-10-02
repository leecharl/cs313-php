<?php
// Start the session
session_start();



if (isset($_GET['remove1'])) {
  $_SESSION["game1Name"] = null;
  $_SESSION["game1Price"] = null;
  $_SESSION["hasCart"] = 1;
}
if (isset($_GET['remove2'])) {
  $_SESSION["game2Name"] = null;
  $_SESSION["game2Price"] = null;
  $_SESSION["hasCart"] = 1;
}
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
        
        <h2>Shopping Cart</h2>
        <a href="kill.php" onclick="confirm('are you sure?')">Empty Cart</a><br>

        <p>
            Your cart includes: <br>
            <?php
    
                if (isset( $_SESSION["game1Name"]) && !is_null($_SESSION["game1Name"])){
                    echo $_SESSION["game1Name"] . " $" . $_SESSION["game1Price"] . " ".
                    "<a href='cart.php?remove1=true'>remove item</a>"."<br>";
                }
                if (isset( $_SESSION["game2Name"]) && !is_null($_SESSION["game2Name"])){
                    echo $_SESSION["game2Name"] . " $" . $_SESSION["game2Price"] . " ".
                    "<a href='cart.php?remove2=true'>remove item</a>"."<br>";
                }
            ?>

            <br><br>
            
            <p>Your Cart total is: $
                <?php
                 $total = 0;
                 $total = $_SESSION["game1Price"] + $_SESSION["game2Price"];
                 echo $total;
                 $_SESSION["cartTotal"] = $total;

                ?>
            </p>

            <br><br>
            <a href="checkout.php">Checkout</a>


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
