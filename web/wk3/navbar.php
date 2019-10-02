
  <a href="index.php">Home</a>
  <a href="cart.php?cart=true">Cart</a>
  <a href="/index.php">CS313 Home</a>
  <?php
    if (isset($_GET['cart'])) {
      echo '<a href="checkout.php?checkout=true">checkout</a>';
    } else{

    }
  ?>
