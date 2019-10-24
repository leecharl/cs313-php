<?php
//var_dump($_POST);


    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    require('database.php');
    $db = getDB();
    $query = $db->prepare('SELECT username, password FROM wk7users where username = :username order by title asc');
    $query->execute(array(":username" => $username));
    $rows = $query->fetchALL(PDO::FETCH_ASSOC);
 
    
        if(password_verify($password, $row["password"])){
            $new_page = "welcome.php";
            header("Location: $new_page");


        }
    
    $db = getDB();
    $stmt1 = $db->prepare('INSERT INTO wk7users(username, password) 
    VALUES (:username, :hashed_password);');
    $stmt1->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt1->bindValue(':hashed_password', $hashed_password, PDO::PARAM_STR);

    $stmt1->execute();
    
    die();


?>