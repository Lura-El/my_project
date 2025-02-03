<div id="id01" class="modal">  

<form style="border:1px solid #ccc" id="floating-form" method="POST" action="<?php echo htmlspecialchars('include/sign.inc.php'); ?>">
   
    <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <div <?php if(isset($name_error)): ?> class="form_error" <?php endif;?>>
    <label for="username"></label>
    <input type="text" placeholder="User Name" name="username" value="" required autocomplete="off">
        <?php if (isset($name_error)): ?>
            <span><?php echo $name_error; ?></span>
        <?php endif ?>
    </div>

    <div <?php if(isset($email_error)): ?> class="form_error" <?php endif;?>>
    <label for="email"></label>
    <input type="email" placeholder="Email" name="email" required>
        <?php if(isset($email_error)): ?>
            <span><?php echo $email_error; ?></span>
        <?php endif ?>
    </div>

    <label for="password"><label>
    <input type="password" placeholder="Create Password" name="password" required>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <a href="<?php echo './frontPage.php'; ?>"><button type="button" class="cancelbtn btn">Cancel</button></a>
        <button type="submit" class="signupbtn btn">Sign Up</button>
    </div>
    </div>
</form>

</div>