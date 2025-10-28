<?php
/* 

ignore for now

require_once('wp-load.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize_user($_POST['username']);
    $email    = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];

    if ($password !== $confirm) {
        wp_redirect(site_url('/register?error=password_mismatch'));
        exit;
    }

    $user_id = wp_create_user($username, $password, $email);

    if (is_wp_error($user_id)) {
        wp_redirect(site_url('/register?error=1'));
        exit;
    } else {
        // Optionally log them in automatically
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
        wp_redirect(site_url('/dashboard'));
        exit;
    }
}
?> */
