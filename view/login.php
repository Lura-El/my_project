<div id="id02" class="modal">

    <form method="POST" action="include/login.inc.php" class="floating-form2">

        <h1>Please Log In</h1>
        <div class="container">
            <label for="username"></label>
            <input type="text" placeholder="User Name" name="username" required id="username">
        
            <label for="password"></label>
            <input type="password" placeholder="Enter Password" name="password" required id="password">
        
            <button type="submit">Log in</button>
        </div>
        
        <div class="container" style="background-color:#f1f1f1">
            <a href="<?php echo './frontPage.php'; ?>"><button type="button" class="cancelbtn btn">Cancel</button></a>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>