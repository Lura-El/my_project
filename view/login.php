<div id="id02" class="modal">

    <form action="<?php echo htmlspecialchars('include/login.inc.php'); ?>" method="POST" class="floating-form2">

        <h1>Please Log In</h1>
        <div class="container">
            <label for="username"></label>
            <input type="text" placeholder="User Name" name="username" required>
        
            <label for="password"></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        
            <button type="submit">Log in</button>
        </div>
        
        <div class="container" style="background-color:#f1f1f1">
            <a href="<?php echo './frontPage.php'; ?>"><button type="button" class="cancelbtn btn">Cancel</button></a>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>