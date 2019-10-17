<?php
require('db.php');

if (!isset($_POST['book'])) {
    header("Location: search.html");
} else {
  $book = strtolower($_POST['book']);
}

$db = getDB();
  $query = $db->prepare('SELECT id, book, chapter, verse from scriptures where LOWER(book)=:book');
  $query->execute(array(":book" => $book));
  $rows = $query->fetchALL(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search Results for <?php echo $book; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <h3>Results</h3>
  <?php
    foreach($rows as $row) {
      echo "<div class='row'>";
        echo "<a href='detail.php?id=" . $row["id"] . "'>";
        echo $row["book"] . " " . $row["chapter"] . ":" . $row["verse"];
        echo "</a>";
      echo "</div>";
    }
  ?>
  </div>
  
</body>
</html>