<?php

/* Template Name: Register Template */

?>

<!DOCTYPE html>
<html lang="en">
<head>    

    <title>JGDM Jobs Pathway App</title>

</head>

<?php

    // if user is logged in, send to dashboard page
    if (is_user_logged_in()) {
        wp_redirect(site_url('/dashboard'));
        exit;
    }

    if (!is_user_logged_in()) {
        wp_redirect(site_url('/login'));
        exit;
    }

?>


<?php get_header(); ?> 


<?php 

    if ($_POST && isset($_POST['main_form_register'])) {

        $userdata = array(

            'username' => sanitize_user($_POST['username']),
            'email' => sanitize_email($_POST['email']),
            'userpass'  => $_POST['userpass'],
        );

        $user_id = wp_insert_user($userdata);

    if (!is_wp_error($user_id)) {

        echo '<p class="success">Account created successfully. <a href="' . site_url('/login') . '">Login here</a>.</p>';

    } else {

        echo '<p class="error">' . $user_id->get_error_message() . '</p>';
    }

}

?>

<body>

    <p>page-register.php</p>

    <body class="body---register">

        <header class="header---register--page">

            <h1> Jobs Pathway App <?php //echo $website_title ?> </h1>

            <h2>Keep track of your way to your professional life</h2>

        </header>

        <section class="container---element--register">

            <?php require "assets/template-parts/register.php"; ?>

        </section>

    </body>

<?php get_footer() ?>