<?php
var_dump($_POST);


    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    require('database.php');
    

    $db = getDB();

    $stmt1 = $db->prepare('INSERT INTO wk7users(username, password) 
    VALUES (:username, :hashed_password);');
    $stmt1->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt1->bindValue(':hashed_password', $hashed_password, PDO::PARAM_STR);

    $stmt1->execute();
    $new_page = "index.php";
    header("Location: $new_page");
    die();


?>