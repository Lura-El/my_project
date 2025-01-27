<div id="id02" class="modal">
    <form action="" method="post" class="floating-form2">

        <h1>Please Log In</h1>
        <!-- <div class="imgcontainer">
            <img src="" alt="avatar" class="avatar">
        </div> -->

        <div class="container">
            <label for="email"></label>
            <input type="email" placeholder="Email" name="email" required>
        
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