<?php

require('db.php');

if(!isset($_GET['id'])) {
  header("Location: search.html");
} else {
  $id = $_GET['id'];
}

$db = getDb();

  $query = $db->prepare('SELECT id, book, chapter, verse, content from scriptures where id=:id');
  $query->execute(array(":id" => $id));
  $result = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scripture Detail</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <h3><?php echo $result["book"] . " " . $result["chapter"] . ":" . $result["verse"]; ?></h3>
  <?php
   
      echo "<div class='row'>";
        echo $result["content"];
      echo "</div>";
  ?>
  <div class="row">
    <a href="search.html">Back to Search</a>
  </div>
  </div>
</body>
</html>