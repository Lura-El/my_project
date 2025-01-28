<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/frontPage.css">
    <link rel="stylesheet" href="style/forms.css">
    <script src="script/index.js" defer></script>
    <title> Laundry Shop</title>
</head>
<body>
    
    <header>
        <nav id="navs" class="topnav">
            <div>
                <a class="active" href="#" target="_self">Home</a>
                <a href="#services" target="_self">Services</a>
                <a href="#contact" target="_self">Contact</a>
            </div>
            <div>
                <a href="#signUp" id="signUpLink">Sign Up</a>
                <a href="#logIn" id="logInLink">Log in</a>
            </div>
        </nav>
    </header>

    <main>
        
        <div class="container-para1">
            <h1 id="greeting">Happy Laundry!</h1>

            <p id="home-para">
                We're delighted to have you here. 
                At [Your Laundry Shop Name], we take pride in providing top-notch laundry services with a personal touch. 
                Whether you need a quick wash, dry cleaning, or special care for your delicate fabrics, 
                our dedicated team is here to make your laundry experience as smooth and hassle-free as possible.
            </p>
        </div>

        <div class="container-para2">
            <h3 id="whyus-title">Why Choose Us?</h3>
            <p class="home-para2">
                <div class="whyus-para">
                    <h3>&bull; Quality Service:</h3> We use the best products and techniques to ensure your clothes come out fresh and clean every time.
                </div> 
                <div class="whyus-para">
                    <h3>&bull; Convenience:</h3>With our easy online booking system and flexible pickup and delivery options, laundry day has never been easier.
                </div>
               <div class="whyus-para">
                <h3>&bull; Customer Care:</h3> Our friendly staff is always ready to assist you with any questions or special requests..
            </div> 
            </p>
        </div>
    </main>

    <?php require __DIR__ . '/view/footer.php'; ?>

    <?php 
        require __DIR__ . '/view/signin.php'; 
        require __DIR__ . '/view/login.php'; 
    ?>    
</body>
</html>