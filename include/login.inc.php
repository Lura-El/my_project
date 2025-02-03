<?php
    
    session_start();

    require __DIR__ . '/function.php';
    require __DIR__ . '/connect.db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = sanitizeInput($_POST["username"]);
        $password = sanitizeInput($_POST["password"]);

        $stmt = $pdo->prepare("SELECT * FROM `signin_info` WHERE username='$username' AND password='$password'");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result["username"] === $username && $result["password"] === $password){
            $_SESSION["username"] = $username;
            $_SESSION["success"] = "You are now logged in";
            header('Location: ../users.php');
            exit();
        }else{
            echo "Incorrect credentials";
        }
    }




    