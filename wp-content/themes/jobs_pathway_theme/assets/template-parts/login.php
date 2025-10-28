 <!-- customised wordpress login form -->
 
 <?php
    $args = array(
        'echo' => true,
        'redirect' => site_url('/dashboard'), // redirect after login
        'form_id' => 'loginform-custom',
        'label_username' => 'Username or Email',
        'label_password' => 'Password',
        'label_remember' => 'Remember Me',
        'label_log_in' => 'Login >',
        'remember' => true
    );

    wp_login_form($args);
  ?>
 
 <!-- Form: login form -->
 <form name="main_form_login" action="<?php site_url('dashboard/'); ?>" method="post" id="" class="form form---login">
   
    <h3>Login</h3>

    <p id="registration">Not Registered?  <a href="http://localhost/jgdm_jobs_pathway/register">Click here to Register</a></p>

    <label for="username">Username: </label>
    <input type="text" name="username" class="login---input" id="username" placeholder="Enter your name...">

    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" class="login---input" id="email" placeholder="Enter your email...">

    <br>
    <label for="password">Password: </label>
    <input type="password"  name="password" id="password" class="login---input" placeholder="Enter your password...">

    <br><br>
    <input type="submit" value="Login >" class="button button---login">

</form>