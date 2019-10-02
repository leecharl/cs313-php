<?php
// Start the session
session_start();
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
        
        <h2>Checkout</h2>
        <form method="Post" action="confirm.php">
            <div class="form-group">
            <label for="name">Name: </label>
            <input id="name" class="form-control" type="text" name="name">
            <br>
            <label for="address">Address: </label>
            <input id="address" class="form-control" type="text" name="address">
            </div><br>
            <div class="form-group">
                <label for="city">City: </label>
                <input id="city" class="form-control" type="text" name="city">
                <label for="state">State: </label>
                <input id="state" class="form-control" type="text" name="state">
                <label for="zip">Zipcode: </label>
                <input id="zip" class="form-control" type="text" name="zip">
            </div>
            <button type="submit">Submit</button>

        </form>





        
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
    <?php include 'footer.php';?>
</div>  

</body>
</html>
