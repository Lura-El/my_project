<?php

session_start();
require __DIR__ . '/function.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = e($_POST["username"]);
    $email = e($_POST["email"]);
    $password = e($_POST["password"]);   
}

if(empty($username)){
    echo "Username is required.";
    exit();
}
elseif(empty($email)){
    echo "Email is required.";
    exit();
}
elseif(empty($password)){
    echo "Password is required.";
    exit();
}

require __DIR__ . '/connect.db.php';

$stmt = $pdo->prepare("SELECT * FROM `signin_info` WHERE username='$username' OR email='$email'");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);


if($result){
    if($result['username'] === $username){
        $name_error = "Username already exists.";
      
    }
    if($result['email'] === $email){
        $email_error = "Email already exists.";
    }
}

//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare('INSERT INTO signin_info (username, email, password)
                 VALUES (:username, :email, :password)');

$stmt->bindValue('username', $username);
$stmt->bindValue('email', $email);
$stmt->bindValue('password', $password);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('Location: ../users.php');
    exit();
} else {
    echo "Error inserting record.";
}

?>
