<?php
var_dump($_POST);
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    require('database.php');
    $db = getDB();
    $query = $db->prepare('SELECT username, password FROM wk7users where username = :username');
    $query->execute(array(":username" => $username));
    $rows = $query->fetchALL(PDO::FETCH_ASSOC);
 
    foreach($rows as $row) 
    {
        echo "did it work?<br>";
        echo "db password: ".  $row["password"];
        echo "entered hash password: " . $hashed_password;
        echo "<br>";
        if(password_verify($hashed_password, $row["password"])){
            // $new_page = "welcome.php";
            // header("Location: $new_page");
            echo "Cool stuff You got it";


        }else{
            echo "Bad Username/Password";
        }
    }
    
    
?>