<div id="id01" class="modal">  

<form style="border:1px solid #ccc" id="floating-form" method="POST" action="<?php echo htmlspecialchars('include/sign.inc.php'); ?>">
    <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"></label>
    <input type="text" placeholder="User Name" name="username" value="" required autocomplete="off">

    <label for="phoneNumber"><label>
    <input type="tel" placeholder="Phone" name="phoneNumber" required>

    <label for="email"></label>
    <input type="email" placeholder="Email" name="email" required>

    <label for="password"><label>
    <input type="password" placeholder="Create Password" name="password" required>

    <label for="reenterPw"><label>
    <input type="password" placeholder="Reenter Password" name="reenterPw" required>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <a href="<?php echo './frontPage.php'; ?>"><button type="button" class="cancelbtn btn">Cancel</button></a>
        <button type="submit" class="signupbtn btn">Sign Up</button>
    </div>
    </div>
</form>

</div>