<?php
function getDb() {
    try
    {
      $dbUrl = getenv('DATABASE_URL');
    
      $dbOpts = parse_url($dbUrl);
    
      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');
    
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }
    //Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}

$test = 2;
$db = getDB();
  $query = $db->prepare('SELECT title from games where gameid = :test');
  $query->execute(array(":test" => $test));
  $rows = $query->fetchALL(PDO::FETCH_ASSOC);

  foreach($rows as $row) {

    echo $row['title'];
  }







?>