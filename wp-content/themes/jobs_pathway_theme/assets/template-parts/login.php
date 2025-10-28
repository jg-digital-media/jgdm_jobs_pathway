<!-- customised wordpress login form -->

<?php

// Check if there are any login errors or messages
if (isset($_GET['login']) && $_GET['login'] == 'failed') {
    echo '<p class="login-error" style="color: red; background: #ffe6e6; padding: 10px; border-radius: 5px;"><strong>Error:</strong> Invalid username or password. Please try again.</p>';
}

if (isset($_GET['login']) && $_GET['login'] == 'empty') {
    echo '<p class="login-error" style="color: red; background: #ffe6e6; padding: 10px; border-radius: 5px;"><strong>Error:</strong> Username and password are required.</p>';
}

if (isset($_GET['loggedout']) && $_GET['loggedout'] == 'true') {
    echo '<p class="login-success" style="color: green; background: #e6ffe6; padding: 10px; border-radius: 5px;">You have successfully logged out.</p>';
}
?>

<!-- Form: login form -->
<form name="main_form_login" action="<?php echo wp_login_url(); ?>" method="post" id="loginform-custom" class="form form---login">
  
   <h3>Login</h3>

   <p id="registration">Not Registered?  <a href="<?php echo site_url('/register'); ?>">Click here to Register</a></p>

   <label for="log">Username or Email: </label>
   <input type="text" name="log" class="login---input" id="log" placeholder="Enter your username or email..." required>

   <br>
   <label for="pwd">Password: </label>
   <input type="password" name="pwd" id="pwd" class="login---input" placeholder="Enter your password..." required>

   <br>
   <label for="rememberme">
       <input type="checkbox" name="rememberme" id="rememberme" value="forever"> Remember Me
   </label>

   <input type="hidden" name="redirect_to" value="<?php echo site_url('/dashboard'); ?>">

   <br><br>
   <input type="submit" name="wp-submit" value="Login >" class="button button---login">

</form>