<?php

session_start();
require __DIR__ . '/function.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = e($_POST["username"]);
    $phonenumber = e($_POST["phoneNumber"]);
    $email = e($_POST["email"]);
    $password = e($_POST["password"]);
    $reenter_password = e($_POST["reenterPw"]);
    
}

if(empty($username)){
    echo "Username is required.";
    exit();
}
elseif(empty($phonenumber)){
    echo "Phone number is required.";
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
elseif($password !== $reenter_password){
    echo "Passwords do not match.";
    exit();
}

require __DIR__ . '/connect.db.php';

$stmt = $pdo->prepare("SELECT * FROM `signin_info` WHERE username='$username' OR email='$email' LIMIT 1");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);

if($result){
    if($result['username'] === $username){
        echo "Username already exists.";
    }
    if($result['email'] === $email){
        echo "Email already exists.";
    }
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare('INSERT INTO signin_info (username, phonenumber, email, password, reenter_password)
                 VALUES (:username, :phonenumber, :email, :password, :reenter_password)');

$stmt->bindValue('username', $username);
$stmt->bindValue('phonenumber', $phonenumber);
$stmt->bindValue('email', $email);
$stmt->bindValue('password', $hashed_password);
$stmt->bindValue('reenter_password', $hashed_password);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('Location: ../users.php');
    exit();
} else {
    echo "Error inserting record.";
}

?>
