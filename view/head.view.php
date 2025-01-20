<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Laundry Shop</title>
</head>
<body>
    <header>

    <?php

    require __DIR__ . './inc/signUp.inc.php/';
        $navBtns = [
            "Home" => '/inc/home.inc.php',
            "Services" => '/inc/services.inc.php',
            "Contact" => '/inc/contact.inc.php'
        ]

    ?>
        <nav class="topnav">
        <div>
        <a class="active" href="#home">Home</a>
        <a href="#news">Services</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        </div>
        
        <div>
        <a href="">Sign-up</a>
        <a href="">Log-in</a>
        </div>
        </nav>
    </header>
</body>
</html>

