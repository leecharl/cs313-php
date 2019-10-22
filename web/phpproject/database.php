
<!-- This is for Local DB -->
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "public";

// // Create connection
// $db = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$db) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



// function getDb() {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "public";
    
//     // Create connection
//     $db = mysqli_connect($servername, $username, $password, $database);
    
//     // Check connection
//     if (!$db) {
//         die("Connection failed: " . mysqli_connect_error());
//     }
//     echo "Connected successfully";


//}
?>



<!-- This is for Heroku DB -->
<?php
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
  
        return $db;
      }
      catch (PDOException $ex)
      {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
}

?>