<?php
    
    session_start();

    require __DIR__ . '/function.php';
    require __DIR__ . '/connect.db.php';

    $username = e($_POST["username"]);
    $password = e($_POST["password"]);

    var_dump($username);
    
    if(empty($username) || empty($password)){
        echo "Log your credentials."; 
    }
    $stmt = $pdo->prepare("SELECT * FROM `signin_info` WHERE username='$username' AND password='$password' LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($result);

    if($result['username'] === $username && $result['password'] === $password){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('Location: ../users.php');
        exit();
    }else{
        echo "Incorrect credentials";
    }
