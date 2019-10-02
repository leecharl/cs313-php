<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<p>Your Cart is Empty</p>
<a href="index.php">Home</a>
</body>
</html>
