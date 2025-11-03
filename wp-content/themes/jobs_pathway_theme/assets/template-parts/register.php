 <!-- Form: register form -->
 <form name="main_form_register" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" id="register-form" class="form form---register">
   
    <h3>Register (it's free)</h3>
    <p id="registration">Already Registered?  <a href="<?php echo site_url('/login'); ?>">Click here to Login</a></p>

    <label for="username">Username: </label>
    <input type="text" name="username" class="login---input" id="username" placeholder="Enter your username..." minlength="3">

    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" class="login---input" id="email" placeholder="Enter your email..." >

    <br>
    <label for="userpass">Password: </label>
    <input type="password" name="userpass" id="userpass" class="login---input" placeholder="Enter your password..." minlength="6">
    
    <br>
    <label for="confirm_password">Confirm Password: </label>
    <input type="password" name="confirm_password" id="confirm_password" class="login---input" placeholder="Confirm your password..." minlength="6">

    <input type="hidden" name="main_form_register" value="1">
    <?php wp_nonce_field('user_registration', 'register_nonce'); ?>

    <br><br>
    <input type="submit" value="Register >" class="button button---register">

</form>
